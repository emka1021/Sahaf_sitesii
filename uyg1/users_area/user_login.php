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
        <h2 class="text-center">Üye Girişi</h2>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data"></form>
                <!-- username -->
                <div class="form-outline">
                    <label for="user_username" class="formlabel">Kullanıcı Adı</label>
                    <input type="text" id="user_username" class="form-control" placeholder="Kullanıcı ismi girin" autocomplete="off" required="required" name="user_username"/>
                </div>
               
                 
                 <!-- password -->
                 <div class="form-outline">
                    <label for="user_password" class="formlabel">Şifre</label>
                    <input type="password" id="user_password" class="form-control" placeholder="şifre girin" autocomplete="off" required="required" name="user_password"/>
                </div>
                
                
                <div class="text-center">
                    <input type="submit" value="giriş" name="user_login">
                    <p>Hesabın yok mu? <a href="user_registration.php">Kayıt Ol</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>