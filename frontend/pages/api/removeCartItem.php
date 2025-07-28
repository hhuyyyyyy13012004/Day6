
<?php
session_start();
include_once(__DIR__ . '/../../dbconnect.php');
header('Content-Type: application/json');

$id = isset($_POST['id']) ? $_POST['id'] : null;
if (!$id) {
    echo json_encode([
        'success' => false,
        'message' => 'Thiếu ID sản phẩm',
        'cart' => isset($_SESSION['cart']) ? $_SESSION['cart'] : []
    ]);
    exit;
}

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    if (isset($cart[$id])) {
        unset($cart[$id]);
        $_SESSION['cart'] = $cart;
        echo json_encode([
            'success' => true,
            'message' => 'Xóa sản phẩm thành công',
            'cart' => $_SESSION['cart']
        ]);
        exit;
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Không tìm thấy sản phẩm trong giỏ hàng',
            'cart' => $_SESSION['cart']
        ]);
        exit;
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Giỏ hàng trống',
        'cart' => []
    ]);
    exit;
}
