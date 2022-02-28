<?php
require 'function.php';



if (isset($_POST["submit"])) {

    // var_dump($_POST);
    // var_dump($_FILES);
    // die;

    if (tambah($_POST) > 0) {
        echo "
        
        <script>
        
        alert('data berhasil ditambahkan');
        document.location.href='laptop.php'
        
        </script>
        ";
    } else {
        echo "
        <script>
        
        alert('data gagal ditambahkan');
        document.location.href='input.php'
        
        </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Admin | Input</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/icon.jpeg" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesoeet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body style="background-image: url('images/bg.jpg');">
    <div class="banner_bg_main">
        <!-- header top section start -->
        <div class="container">
            <div class="header_section_top">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="custom_menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="laptop.php">Laptop</a></li>
                                <li><a href="gear.php">Gear Set</a></li>
                                <li><a href="computer.php">Computers</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="#">Log Out</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="logo_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo"><a href="index.html"><img src="images/logo-no-bg.png" width="200px" height="200px"></a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdpricea03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->


    <!-- form jual -->
    <br><br>
    <style type="text/css">
        .input-group {
            padding-bottom: 20px;
            padding-left: 30px;
            padding-right: 70px;
        }

        .container {
            padding-bottom: 50px;
        }
    </style>


    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-group  ">
                <span class="input-group-text">Brand</span>
                <input type="text" aria-label="brand" class="form-control" name="brand" required autocomplete="off" style="opacity: 75%;">
            </div>
            <div class="input-group ">
                <span class="input-group-text">tipe</span>
                <input type="text" aria-label="tipe" class="form-control" name="tipe" required autocomplete="off" style="opacity: 75%;">
            </div>
            <div class="input-group ">
                <span class="input-group-text">price</span>
                <input type="text" class="form-control" aria-label="price" name="price" required autocomplete="off" style="opacity: 75%;">
            </div>
            <div class="input-group ">
                <span class="input-group-text">Deskripsi Barang</span>
                <input type="text" aria-label="des" class="form-control" name="des" required autocomplete="off" style="opacity: 75%;">
            </div>
            <div class="input-group ">
                <span class="input-group-text">Nomor Whatsapp</span>
                <input type="text" aria-label="no" class="form-control" name="no" required autocomplete="off" style="opacity: 75%;">
            </div>
            <div class="input-group ">
                <span class="input-group-text">Gambar</span>
                <input type="file" aria-label="img" class="form-control" name="img" autocomplete="off" style="opacity: 75%;">
            </div>
            <div class="input-group">
                <button type="submit" class="btn btn-outline-info" name="submit">Kirim</button>
            </div>
        </form>
    </div>
</body>

</html>