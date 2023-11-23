<?php
include('../includes/connect.php');
include('../functions/common_function.php');

if (isset($_POST['user_login'])) {
    $admin_name = isset($_POST['user_username']) ? $_POST['user_username'] : '';
    $admin_password = isset($_POST['user_password']) ? $_POST['user_password'] : '';

    if (check_admin_login($admin_name, $admin_password)) {
        // Giriş başarılı, yönlendirme yap
        header('Location: ./admin_area/index.php');
        exit(); // İşlemi sonlandır
    } else {
        // Giriş başarısız
        echo "Giriş başarısız!";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center">Admin Girişi</h2>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- admin_name -->
                    <div class="form-outline">
                        <label for="admin_name" class="formlabel">Admin Adı</label>
                        <input type="text" id="admin_name" class="form-control" placeholder="Admin ismi girin" autocomplete="off" required="required" name="admin_name"/>
                    </div>
               
                    <!-- admin_password -->
                    <div class="form-outline">
                        <label for="admin_password" class="formlabel">Şifre</label>
                        <input type="password" id="admin_password" class="form-control" placeholder="şifre girin" autocomplete="off" required="required" name="admin_password"/>
                    </div>
                
                    <div class="text-center">
                        <input type="submit" value="giriş" name="admin_login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
