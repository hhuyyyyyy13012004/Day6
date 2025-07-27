<?php
session_start();
header('Content-Type: application/json');
include_once(__DIR__ . '/../../dbconnect.php');

if (!isset($_POST['id']) || !isset($_POST['quantity'])) {
    echo json_encode(['success' => false, 'error' => 'Missing id or quantity']);
    exit;
}

$id = $_POST['id'];
$quantity = intval($_POST['quantity']);

if (!isset($_SESSION['cart'][$id])) {
    echo json_encode(['success' => false, 'error' => 'Product not found in cart']);
    exit;
}

$cart = $_SESSION['cart'];
$tempProd = $cart[$id];
$cart[$id] = [
    'id' => $tempProd['id'],
    'name' => $tempProd['name'],
    'quantity' => $quantity,
    'price' => $tempProd['price'],
    'total' => ($quantity * $tempProd['price']),
    'image' => $tempProd['image']
];
$_SESSION['cart'] = $cart;

echo json_encode(['success' => true, 'cart' => $_SESSION['cart']]);
