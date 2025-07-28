<?php
session_start();
include_once(__DIR__ . '/../../dbconnect.php');

header('Content-Type: application/json');

if (!isset($_POST['id']) || !isset($_POST['quantity'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Thiếu ID hoặc số lượng'
    ]);
    exit;
}

$id = $_POST['id'];
$quantity = $_POST['quantity'];

if (!isset($_SESSION['cart'][$id])) {
    echo json_encode([
        'success' => false,
        'message' => 'Không tìm thấy sản phẩm trong giỏ hàng'
    ]);
    exit;
}

$tempProd = $_SESSION['cart'][$id];

$_SESSION['cart'][$id] = [
    'id' => $tempProd['id'],
    'name' => $tempProd['name'],
    'quantity' => $quantity,
    'price' => $tempProd['price'],
    'total' => ($quantity * $tempProd['price']),
    'image' => $tempProd['image']
];

echo json_encode([
    'success' => true,
    'message' => 'Cập nhật giỏ hàng thành công',
    'cart' => $_SESSION['cart']
]);

