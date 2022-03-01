<?php 
require 'function.php';

session_start();

if(isset($_SESSION["login"])){
    header("location:dashboard.php");
}

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($config, "SELECT * FROM user where username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1 ){

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            $_SESSION["login"] = true;
            header("location: index.php");
            exit;
        }

    }

    $error = true;

}

if(isset($_POST["register"])){
  if(register($_POST) > 0 ){
    echo "<script>
            alert('User berhasil dibuat');
            document.location.href = 'form.php';
            </script>" ;
}
else{
    echo mysqli_error($config);
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Register | Login</title>
  <!-- Font Awesome -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/form.css">
  <link rel="shortcut icon" href="images/icon.jpeg" type="image/x-icon">
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</head>

<body>




  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log">
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <img src="images/logo-no-bg.png" alt="" width="105px">
                      <h4 class="mb-4 pb-3">Log In</h4>
                      <div class="form-group">
                        <form action="" method="post">
                        <input type="text" name="username" class="form-style" placeholder="Username" id="username" autocomplete="off">
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" name="password" class="form-style" placeholder="Your Password" id="password" autocomplete="off">
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <button type="submit" name="login" class="btn mt-4 pt-2">submit</button>
                      </form>
                      <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                    </div>
                  </div>
                </div>
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <img src="images/logo-no-bg.png" alt="" width="105px">
                      <h4 class="mb-4 pb-3">Sign Up</h4>
                      <div class="form-group">
                        <form action="" method="post">
                        <input type="text" name="username" class="form-style" placeholder="Username" id="username" autocomplete="off">
                        <i class="input-icon uil uil-user"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" name="password" class="form-style" placeholder="Password" id="password" autocomplete="off">
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" name="logpass" class="form-style" placeholder="Confirm Password" id="logpass" autocomplete="off">
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <button type="submit" name="register" class="btn mt-4 pt-2">submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
