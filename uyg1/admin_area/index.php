<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <!-- first child -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expen-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="#" alt="">
                <nav class="navbar navbar-expen-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nalink">Hoşgeldin</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- secon child -->
    <div class="bglight">
        <h3 class="text-center p-2">Lorem.</h3>
    </div>

    <!-- third child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1">
            <div>
                <a href="#" alt="" src="admin_image">
                    <p class="text-light text-center">admin</p>
                </a>
            </div>
            <div class="button text-center">
                <button classmy-3><a href="insert_product.php" class="nav-link text-light bg-info my-1">Ürün ekle</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Lorem.</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Lorem.</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Kategori Ekle</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Yayınevi Ekle</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Lorem</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Lorem</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Lorem</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Lorem</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Lorem</a></button>
            </div>
        </div>
    </div>

    <!-- fourth child -->
    <div class="container my-5">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
        }
        ?>
    </div>
    <!-- last child -->
    <div class="bg-info p-3 text-center footer">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, rerum.</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>