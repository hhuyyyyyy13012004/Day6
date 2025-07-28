<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Shop</title>
    <?php include_once(__DIR__ . '/../layouts/styles.php'); ?>
    <style>
        .image {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <?php include_once(__DIR__ . '/../layouts/partials/header.php'); ?>
    <main role="main" class="mb-2">
        <?php
        include_once(__DIR__ . '/../../dbconnect.php');
        $cart = [];
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        } else {
            $cart = [];
        }
        ?>
        <div class="container mt-4">
            <div id="alert-container" class="alert alert-warning alert-dismissible fade d-none" role="alert">
                <div id="message">&nbsp;</div>
                <button type="button" class="close" datadismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h1 class="text-center">Cart</h1>
            <div class="row">
                <div class="col col-md-12">
                    <?php if (!empty($cart)) : ?>
                        <table id="tblCart" class="table tablebordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Sub Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="datarow">
                                <?php $no = 1; ?>
                                <?php foreach ($cart as $item) : ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td>
                                            <?php if (empty($item['image'])) : ?>
                                                <img src="/Day6/assets/shared/img/default-image_600.png" class="imgfluid image" />
                                            <?php else : ?>
                                                <img src="/Day6/assets/uploads/<?= $item['image'] ?>" class="img-fluid image" />
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $item['name'] ?></td>
                                        <td>
                                            <input type="number" class="form-control" id="quantity_<?= $item['id'] ?>" name="quantity" value="<?= $item['quantity'] ?>" />
                                            <button class="btn btnprimary btn-sm btn-update-quantity" data-id="<?= $item['id'] ?>">Update</button>
                                        </td>
                                        <td><?= number_format($item['price'], 2, ".", ",") ?> vnđ</td>
                                        <td><?= number_format($item['quantity'] * $item['price'], 2, ".", ",") ?> vnđ</td>
                                        <td>
                                            <a id="delete_<?= $no ?>" data-id="<?= $item['id'] ?>" class="btn btn-danger btn-delete-product">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else : ?>
                        <h2>Cart Empty</h2>
                    <?php endif; ?>
                    <a href="/Day6/frontend" class="btn btnwarning btn-md"><i class="fa fa-arrow-left" aria-hidden="true"></i> Continue Shopping</a>
                    <a href="/Day6/frontend/pages/checkout.php" class="btn btn-primary btn-md"><i class="fa fa-shopping-cart" ariahidden="true"></i> Checkout</a>
                </div>
            </div>
        </div>
    </main>
    <?php include_once(__DIR__ . '/../layouts/partials/footer.php'); ?>
    <?php include_once(__DIR__ . '/../layouts/scripts.php'); ?>
    <script>
        $(document).ready(function() {
            function removeProductItem(id) {
                var data = {
                    id: id
                };
                $.ajax({
                    url: '/Day6/frontend/pages/api/removeCartItem.php',
                    method: "POST",
                    dataType: 'json',
                    data: data,
                    success: function(data) {
                        if (data && typeof data === 'object') {
                            $("#delete_" + id).closest('tr').remove();
                            if (Object.keys(data).length === 0) {
                                $('#tblCart').remove();
                                $('.col-md-12').append('<h2>Cart Empty</h2>');
                            }
                        } else {
                            $('#message').html(`<h1>Lỗi xóa sản phẩm</h1>`);
                            $('.alert').removeClass('d-none').addClass('show');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log("AJAX error:", textStatus, errorThrown);
                        $('#message').html(`<h1>Lỗi kết nối tới server</h1>`);
                        $('.alert').removeClass('d-none').addClass('show');
                    }
                });
            };
            $('#tblCart').on('click', '.btn-delete-product', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                removeProductItem(id);
            });

            function updateCartItem(id, quantity) {
                var data = {
                    id: id,
                    quantity: quantity
                };
                $.ajax({
                    url: '/Day6/frontend/pages/api/updateCartItem.php',
                    method: "POST",
                    dataType: 'json',
                    data: data,
                    success: function(data) {
                        if (data.success && data.cart && data.cart[id]) {
                            var item = data.cart[id];
                            var $row = $('#quantity_' + id).closest('tr');
                            $row.find('input[name="quantity"]').val(item.quantity);
                            $row.find('td').eq(5).text(Number(item.quantity * item.price).toLocaleString('en-US', {minimumFractionDigits: 2}) + ' vnđ');
                        } else {
                            var htmlString = `<h1>${data.message || 'Can not update item'}</h1>`;
                            $('#message').html(htmlString);
                            $('.alert').removeClass('d-none').addClass('show');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                        var htmlString = `<h1>Lỗi kết nối tới server</h1>`;
                        $('#message').html(htmlString);
                        $('.alert').removeClass('d-none').addClass('show');
                    }
                });
            };
            $('#tblCart').on('click', '.btn-update-quantity', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                var quantity = $('#quantity_' + id).val();
                updateCartItem(id, quantity);
            });
        });
    </script>
</body>

</html>