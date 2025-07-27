<?php
session_start();

// Get product data
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];

// Initialize cart data
if (isset($_SESSION['cart'])) {
    $data = $_SESSION['cart'];
} else {
    $data = []; // Khởi tạo mảng rỗng
}

// Check if product already exists in cart
if (isset($data[$id])) {
    // If product exists, increase quantity
    $data[$id]['quantity'] += $quantity;
    $data[$id]['total'] = $data[$id]['quantity'] * $data[$id]['price'];
} else {
    // If product doesn't exist, add new
    $data[$id] = [
        'id' => $id,
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity,
        'image' => $image,
        'category' => $category,
        'total' => ($quantity * $price)
    ];
}

// Save to session
$_SESSION['cart'] = $data;

// Debug: Log session data
error_log('Cart data: ' . print_r($_SESSION['cart'], true));

// Return success response
echo json_encode([
    'success' => true,
    'message' => 'Product added to cart successfully',
    'cart' => $_SESSION['cart']
]);
?>