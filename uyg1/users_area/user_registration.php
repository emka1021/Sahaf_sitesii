<?php
include('../includes/connect.php');
include('../functions/common_function.php');

if(isset($_POST['user_register'])){
    $user_username = isset($_POST['user_username']) ? $_POST['user_username'] : '';
    $user_email = isset($_POST['user_email']) ? $_POST['user_email'] : '';
    $user_password = isset($_POST['user_password']) ? $_POST['user_password'] : '';
    $conf_user_password = isset($_POST['conf_user_password']) ? $_POST['conf_user_password'] : '';
    $user_adress = isset($_POST['user_adress']) ? $_POST['user_adress'] : '';
    $user_contact = isset($_POST['user_contact']) ? $_POST['user_contact'] : '';

    $user_ip = getIPAddress();

    if ($user_password != $conf_user_password) {
        die('Şifreler eşleşmiyor');
    }


    $insert_query = "INSERT INTO `user_table` (user_name, user_email, user_password, user_ip, user_adress, user_mobile) VALUES ('$user_username', '$user_email', '$user_password', '$user_ip', '$user_adress', '$user_contact')";
    
    $sql_execute = mysqli_query($con, $insert_query);

    if($sql_execute){
        echo "<script>alert('Veri başarıyla yüklendi')</script>";
    } else {
        die('Could not connect: ' . mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Kayıt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center">Üye Kayıt</h2>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username -->
                    <div class="form-outline">
                        <label for="user_username" class="formlabel">Kullanıcı Adı</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Kullanıcı ismi girin" autocomplete="off" required="required" name="user_username"/>
                    </div>
                    <!-- email -->
                    <div class="form-outline">
                        <label for="user_email" class="formlabel">Email</label>
                        <input type="email" id="user_email" class="form-control" placeholder="email ismi girin" autocomplete="off" required="required" name="user_email"/>
                    </div>
                    
                     <!-- password -->
                     <div class="form-outline">
                        <label for="user_password" class="formlabel">Şifre</label>
                        <input type="password" id="user_password" class="form-control" placeholder="şifre girin" autocomplete="off" required="required" name="user_password"/>
                    </div>
                    <!-- confirm password -->
                    <div class="form-outline">
                        <label for="conf_user_password" class="formlabel">Şifre Onayla</label>
                        <input type="password" id="conf_user_password" class="form-control" placeholder="şifre onaylama" autocomplete="off" required="required" name="conf_user_password"/>
                    </div>
                    <!-- adres -->
                    <div class="form-outline">
                        <label for="user_adress" class="formlabel">Adres</label>
                        <input type="text" id="user_adress" class="form-control" placeholder="adres girin" autocomplete="off" required="required" name="user_adress"/>
                    </div>
                    <!-- iletişim -->
                    <div class="form-outline">
                        <label for="user_contact" class="formlabel">İletişim</label>
                        <input type="text" id="user_contact" class="form-control" placeholder="iletişim" autocomplete="off" required="required" name="user_contact"/>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="kayıt" name="user_register">
                        <p>Hesabın zaten var mı? <a href="user_login.php">Giriş Yap</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
