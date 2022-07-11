<?php
require_once('./php/component.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css"/>
    <title>shoping cart</title>
</head>
<body>
<h1 class="text-center">shoping cart</h1>
<div class="container">
    <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./upload/product1.png" alt="product 1" class="img-fluid card-img-top"/>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">product 1</h5>

                        <h6>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>
                        </h6>

                        <p class="cart-text">
                            some quick example text to build on the card
                        </p>

                        <h5>
                            <small><s class="text-secondary">$519</s></small>
                            <span class="price">$530</span>
                        </h5>

                        <button type="submit" name="add" class="btn btn-info shadow my-3">Add To Cart <i class="fa-solid fa-bag-shopping"></i></button>

                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./upload/product2.png" alt="product 1" class="img-fluid card-img-top"/>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">product 2</h5>

                        <h6>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>
                        </h6>

                        <p class="cart-text">
                            some quick example text to build on the card
                        </p>

                        <h5>
                            <small><s class="text-secondary">$519</s></small>
                            <span class="price">$517</span>
                        </h5>

                        <button type="submit" name="add" class="btn btn-info shadow my-3">Add To Cart <i class="fa-solid fa-bag-shopping"></i></button>

                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./upload/product3.png" alt="product 1" class="img-fluid card-img-top"/>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">product 3</h5>

                        <h6>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>
                        </h6>

                        <p class="cart-text">
                            some quick example text to build on the card
                        </p>

                        <h5>
                            <small><s class="text-secondary">$519</s></small>
                            <span class="price">$560</span>
                        </h5>

                        <button type="submit" name="add" class="btn btn-info shadow my-3">Add To Cart <i class="fa-solid fa-bag-shopping"></i></button>

                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./upload/product4.png" alt="product 1" class="img-fluid card-img-top"/>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>

                        <h6>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>
                        </h6>

                        <p class="cart-text">
                            some quick example text to build on the card
                        </p>

                        <h5>
                            <small><s class="text-secondary">$519</s></small>
                            <span class="price">$599</span>
                        </h5>

                        <button type="submit" name="add" class="btn btn-info shadow my-3">Add To Cart <i class="fa-solid fa-bag-shopping"></i></button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>