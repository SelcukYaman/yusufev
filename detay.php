<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ev Alım Satım</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


<body>
    <?php    session_start();?>
    <!-- Topbar Start -->
     <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">Hakkımızda</a>    
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Giriş Yapın</button>
                        <div class="dropdown-menu dropdown-menu-right">
                             <a class="dropdown-item" href="login2.php"> Giriş Yap</a>
                             <a class="dropdown-item" href="login.php"> Kaydol</a>
                        </div>
                    </div>
                    
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Yusuf</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Ev</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ev ara">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Bize Ulaş</p>
                <h5 class="m-0">05362089645</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Shirts</a>
                        <a href="" class="nav-item nav-link">Jeans</a>
                        <a href="" class="nav-item nav-link">Swimwear</a>
                        <a href="" class="nav-item nav-link">Sleepwear</a>
                        <a href="" class="nav-item nav-link">Sportswear</a>
                        <a href="" class="nav-item nav-link">Jumpsuits</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Yusuf</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Ev</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        
                           <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Anasayfa</a>
                            <a href="shop.html" class="nav-item nav-link">Evler</a>
                            <a href="about.html" class="nav-item nav-link">Hakkımızda</a>
                            <a href="about.html" class="nav-item nav-link">İletişim</a>
                               <?php session_start();
                            echo '<a  class="nav-item nav-link"> '.$_SESSION["user"].' </a> '; if(isset($_SESSION["user"])) { echo '<a  class="nav-item nav-link" href="ilanver.php"> İlan Ver </a> '; } ?>
                        </div> 
    
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Anasayfa</a>
                    <a class="breadcrumb-item text-dark" href="#">Evler</a>
                    <span class="breadcrumb-item active">Ev Detay</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            


<?php
include("baglan.php"); 
         $home="Select * From home";  
         $account="Select * From account";
         $sonuc=$baglan->query($account); 

         if ($sonuc->num_rows>0){ // satır varsa 
  while ($accountcek=$sonuc->fetch_assoc()) { 
      $sonuc2=$baglan->query($home); 
        if ($sonuc2->num_rows>0){   
  while ($homecek=$sonuc2->fetch_assoc()) { 
      if($homecek["id"]==$_POST["homeid"] && $accountcek["id"]==$homecek["ekleyen"]) { 
           echo '

<div class="col-lg-6  mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="'.$homecek["photo0"].'" alt="Image">
                        </div>';
		  for ($i = 1; $i <= 7; $i++) {
			  if($homecek["photo".$i]!=null){
    echo '<div class="carousel-item">
                            <img class="w-100 h-100" src="'.$homecek["photo".$i].'" alt="Image">
                        </div>';}
}
                        
                  
                   echo ' </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>



           <div class="col-lg-6 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>Ev hakkında detaylar</h3>
                   
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Açıklama:</strong>
                        <p> '.$homecek["about"].'</p>
                    </div>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Fiyat:</strong>
                        <p> '.$homecek["buy"].'</p>
                    </div>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Metrekare:</strong>
                        <p> '.$homecek["size"].'</p>
                    </div>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Statü:</strong>
                        <p> '.$homecek["statu"].'</p>
                    </div>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Takas:</strong>
                        <p> '.$homecek["swap"].'</p>
                    </div>
                   <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Oda-Sayısı:</strong>
                        <p> '.$homecek["value"].'</p>
                    </div>

                    <h3>Ev Sahibi Hakkında</h3>
                   
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Adı Soyadı:</strong>
                        <p> '.$accountcek["account_name"].'</p>
                    </div>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Telefon Numarası:</strong>
                        <p> '.$accountcek["phone"].'</p>
                    </div>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Eposta:</strong>
                        <p> '.$accountcek["mail"].'</p>
                    </div>

                </div>
            </div> ';
     
}}}}}

?>



            




        </div>
      
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
  
    <!-- Products End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Yusuf ev</h5>
                <p class="mb-4">Buraya yazı yazılacak </p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>adres</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>mail</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>telefon</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Sayfamız</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Evler</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Hakkımızda</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>İletişim</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Kolay Giriş</h5>
                        <p>Buraya yazı ekle</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Kaydol</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Sosyal Medya</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>