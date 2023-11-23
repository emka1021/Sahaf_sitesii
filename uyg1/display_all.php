<!-- connect file -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yalapşap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- found awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
        .admin_image {
            width: 100px;
            object-fit: contain;

        }

        .footer {
            position: absolute;
            bottom: 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <img src="" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class='nav-item'><a class='nav-link active' aria-currents='page' href='index.php'>Home</a></li>
                <li class='nav-item'><a class='nav-link' href='display_all.php'>Ürünler</a></li>
                <li class='nav-item'><a class='nav-link' href='#'>register</a></li>
                <li class='nav-item'><a class='nav-link' href='#'>iletişim</a></li>
                <li class='nav-item'><a class='nav-link' href='#'><i class='fa-solid fa-cart-shopping'></i></a></li>
                <li class='nav-item'><a class='nav-link' href='#'>toplam ücret</a></li>
            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                <input type="submit" value="Search">
            </form>
        </div>
    </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class='nav-item'>
            <a class='nav-link' href='#'>Hoşgeldin okur</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='./users_area/user_login.php'>Giriş Yap</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='./users_area/user_registration.php'>Kayıt Ol</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='./admin_area/admin_login.php'>Admin Girişi</a>
        </li>
    </ul>
</nav>


        <div class="bg-light">
            <?php
            $title = "Lorem, ipsum.";
            $content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, hic.";
            ?>
            <h3 class="text-center"><?php echo $title; ?></h3>
            <p class="text-center"><?php echo $content; ?></p>
        </div>

        <div class="row px-3">
            <div class="col-md-10">
                <div class="row">
                    <?php
                    getproducts();
                    get_unique_categories();
                    get_unique_brands()
                    ?>
                    <!-- row -->
                </div>

            </div>
            <div class="col-md-2 bg-secondary p-0">
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info text-light">
                        <a href="#" class="nav-link">
                            <h4>Kategori</h4>
                        </a>
                    </li>
                    <?php

                    getbrands()



                    ?>

                    <li class="nav-item bg-info text-light">
                        <a href="#" class="nav-link">
                            <h4>Yayınevi</h4>
                            <?php

                            getcategories();
                            ?>
                </ul>
            </div>

            <div class="bg-info p-3 text-center">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, rerum.</p>
            </div>
        </div>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>