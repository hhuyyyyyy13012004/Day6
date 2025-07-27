<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// var_dump($_SESSION['cart']);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Shop</title>

    <?php include_once(__DIR__ . '/layouts/styles.php'); ?>
</head>

<body>
    <?php include_once(__DIR__ . '/layouts/partials/header.php'); ?>
    <main>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="/Day6/assets/uploads/slider/fashion-online-ads-design-template-d307900deaec216781ff3112ba8c8d28_screen.jpg" class="d-block w-100" alt="Slide 1">
                    <svg aria-hidden="true" class="bd-placeholder-img" height="100%" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="/Day6/assets/uploads/slider/fashion-retail-ads-design-template-b438ed4634f67a4b9c08b3c58b06fca7_screen.jpg" class="d-block w-100" alt="Slide 2">
                    <svg aria-hidden="true" class="bd-placeholder-img" height="100%" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                    </svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/Day6/assets/uploads/slider/fashion-sale-banner-template-design-27259ad99d56e4e47ade4dea85cff69a_screen.jpg" class="d-block w-100" alt="Slide 3">
                    <svg aria-hidden="true" class="bd-placeholder-img" height="100%" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                </div>
                <div class="col-md-5">
                    <svg aria-label="Placeholder: 500x500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" height="500" preserveAspectRatio="xMidYMid slice" role="img" width="500" xmlns="http://www.w3.org/2000/svg">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
                        <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
                    <p class="lead">Another featurette? Of course.
                        More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg aria-label="Placeholder: 500x500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" height="500" preserveAspectRatio="xMidYMid slice" role="img" width="500" xmlns="http://www.w3.org/2000/svg">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
                        <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-body-secondary">Checkmate.</span></h2>
                    <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <svg aria-label="Placeholder: 500x500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" height="500" preserveAspectRatio="xMidYMid slice" role="img" width="500" xmlns="http://www.w3.org/2000/svg">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
                        <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div><!-- /.container -->

        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>© 2017–2025 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
        <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        include_once(__DIR__ . '/../dbconnect.php');
        $sql = "SELECT id, name, price, stock_quantity, category, image_url FROM products";
        $result = $conn->query($sql);
        $data = [];
        if ($result->num_rows > 0){
            while($row = $result->fetch_array(MYSQLI_NUM)) {
                $data[] = $row;
            }
            $result->free_result();
        }
        $conn->close();

        
        ?>
        <?php foreach ($data as $item): ?>
        <div class="col">
          <div class="card shadow-sm">
            <img src="/Day6/assets/uploads/<?= $item[5] ?>" alt="">
            <div class="card-body">
              <p class="card-text"><a href="pages/detail.php?id=<?= $item[0] ?>" class="text-decoration-none text-dark fw-bold"><?= $item[1] ?></a></p>
              <p class="card-text"><?= $item[2] ?> đ</p>
              <div class="d-flex justify-content-between align-items-center">
                
                <button
                  class="btn btn-sm btn-outline-secondary btn-add-cart"
                  data-id="<?= $item[0] ?>"
                  data-name="<?= $item[1] ?>"
                  data-price="<?= $item[2] ?>"
                  data-image="<?= $item[5] ?>"
                  data-category="<?= $item[4] ?>"
                >Add Cart</button>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php

        ?>
      </div>
    </div>
    </main>

    <?php include_once(__DIR__ . '/layouts/partials/footer.php'); ?>
</body>
<!-- Kiểm tra jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    console.log('jQuery version:', $.fn.jquery);
    console.log('Found add cart buttons:', $('.btn-add-cart').length);
    
    $('.btn-add-cart').click(function(e) {
        e.preventDefault();
        console.log('Button clicked!');
        
        // Lấy dữ liệu từ button
        const id = $(this).data("id");
        const name = $(this).data("name");
        const price = $(this).data("price");
        const image = $(this).data("image");
        const category = $(this).data("category");
        
        console.log('Data from button:', {
            id: id,
            name: name,
            price: price,
            image: image,
            category: category
        });
        
        // Kiểm tra dữ liệu có đầy đủ không
        if (!id || !name || !price) {
            console.log('Missing data!');
            alert('Missing product data!');
            return;
        }
        
        const data = {
            id: id,
            name: name,
            price: price,
            image: image,
            category: category,
            quantity: 1
        };

        console.log('Sending AJAX to: /Day6/frontend/pages/api/add_cart.php');
        console.log('Data:', data);

        $.ajax({
            url: '/Day6/frontend/pages/api/add_cart.php',
            method: 'POST',
            dataType: 'json',
            data: data,
            beforeSend: function() {
                console.log('Request started...');
            },
            success: function(response) {
                console.log('Success response:', response);
                if (response.success) {
                    alert('Product added to cart! Cart has ' + response.cart_count + ' items.');
                } else {
                    alert('Error: ' + response.error);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('AJAX Error:');
                console.log('Status Code:', jqXHR.status);
                console.log('Status Text:', textStatus);
                console.log('Error Thrown:', errorThrown);
                console.log('Response Text:', jqXHR.responseText);
                
                if (jqXHR.status === 404) {
                    alert('Error 404: add_cart.php not found!');
                } else if (jqXHR.status === 500) {
                    alert('Server error 500. Check PHP syntax.');
                } else {
                    alert('AJAX Error: ' + textStatus);
                }
            }
        });
    });
});
</script>
</body>

</html>