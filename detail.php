<?php
require 'function.php';
$id = $_GET['id'];
$laptop = query("SELECT*FROM laptop WHERE id=$id");


// while ($result = mysqli_fetch_assoc($query)) {
//    // var_dump($result);
// }

if (isset($_POST["cari"])) {
   $laptop = cari($_POST["search"]);
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
   <title>Unknown</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="/css/detail.css">
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--  -->
   <!-- owl stylesheets -->
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesoeet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
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
   <!-- header top section start -->
   <!-- header section start -->
   <div class="header_section">
      <div class="container">
         <div class="containt_main">
            <div id="mySidenav" class="sidenav">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <a href="index.html">Home</a>
               <a href="laptop.php">Laptop</a>
               <a href="gear.php">Gear Set</a>
               <a href="computer.php">Computers</a>
               <a href="about.php">About Us</a>
            </div>

         </div>
      </div>
   </div>
   <!-- header section end -->








   </div>
   <h1 class="fashion_taital"><img src="images/logo-bg.jpeg" width="150px" alt="" style="border-radius: 5px;"></h1>


   <div class="container">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->

      <!DOCTYPE html>
      <html lang="en">

      <head>

         <meta name="viewport" content="width=device-width, initial-scale=1">

         <title>eCommerce Product Detail</title>
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

      </head>

      <body>

         <div class="container">
            <div class="card">
               <div class="container-fliud">
                  <div class="wrapper row">
                     <div class="preview col-md-6">

                        <?php foreach ($laptop as $row) : ?>
                           <div class="preview-pic tab-content">
                              <div class="tab-pane active" id="pic-1"><img src="images/laptop/<?php echo $row['img']; ?>" width="400px" height="400px" /></div>
                              <div class="tab-pane" id="pic-2"><img src="images/laptop/<?php echo $row['img']; ?>" /></div>
                              <div class="tab-pane" id="pic-3"><img src="images/laptop/<?php echo $row['img']; ?>" /></div>
                              <div class="tab-pane" id="pic-4"><img src="images/laptop/<?php echo $row['img']; ?>" /></div>
                              <div class="tab-pane" id="pic-5"><img src="images/laptop/<?php echo $row['img']; ?>" /></div>
                           </div>
                        <?php endforeach; ?>


                     </div>
                     <?php foreach ($laptop as $row) : ?>
                        <div class="details col-md-6">
                           <h1 class="product-title"><?php echo $row['brand']; ?></h1>
                           <h3 class="product-title"><?php echo $row['tipe']; ?></h3>

                           <h4 class="price"><span>Rp. <?php echo $row['price']; ?></span></h4>
                           <p class="product-description"><?php echo $row['des']; ?></p>


                           <h5 class="colors">colors:
                              <button class="btn btn-primary"></button>
                              <button class="btn btn-success"></button>
                              <button class="btn btn-danger"></button>
                              <button class="btn btn-warning"></button>
                           </h5>
                           <div class="action">
                              <button class="add-to-cart btn btn-warning" type="button"><a href="wa.me/62<?php echo $row['no']; ?>">Hubungi Penjual</a></button>
                              <button class="like btn btn-success" type="button"> <a href="wa.me/62<?php echo $row['no']; ?>"><i class="fab fa-whatsapp"></i></a></button>
                           </div>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div>
            </div>
         </div>
      </body>

      </html>

   </div>


   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="footer_logo"><a href="index.html"><img src="images/logo-bg.jpeg" width="10%" height="10%" style="border-radius: 5%;"></a></div>
         <div class="input_bt">
            <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
            <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
         </div>

         <div class="location_main">Help WhatsApp Number : <a href="wa.me/6281977785738">+6281977785738</a></div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">© 2022 All Rights Reserved. Design by <a href="about.html">KELOMPOK 5</a></p>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script>
      function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
      }
   </script>
</body>

</html>