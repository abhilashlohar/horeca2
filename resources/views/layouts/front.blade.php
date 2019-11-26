<?php 
use \App\Http\Controllers\HomeController;
?>
<?php echo HomeController::xyz();?>
<!doctype html>
<html>
    
    <head>
        <title>HORECA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/styleo.css">
        <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flickity@2/dist/flickity.css">
          <link rel="stylesheet" href="assets/css/responsive.css">
          <link rel="shortcut icon" type="image/png" href="assets/img/h.PNG"/>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>
         <script src="assets/js/jquery-3.4.1.min.js"></script>
        <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
                <script src="https://code.jquery.com/jquery-3.4.1.js"
          integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
          crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ac4e70cd8e.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        

    </head>
    <body>
        
        <div class="container-fluid">
            <div class="">

                <nav class="navbar navbar-expand-md navbar-light fixed-top">
                 
                        <a class="navbar-brand" href="#home"><img src="assets/img/horeca-logo-2.png" width="200px"/></a>

                        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">

                        <span class="navbar-toggler-icon"></span>

                        </button>
                 
                            <div class="collapse navbar-collapse justify-content-between" id="nav">
                             
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                       
                                    <div class="dropdown show">
                                      <a class="btn btn-service dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Services
                                      </a>

                                      <div class="dropdown-menu drop-items" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="category.html">Kitchen Equipment &amp; Utilities</a>
                                        <a class="dropdown-item" href="#">In Room Solutions</a>
                                        <a class="dropdown-item" href="#">Bathroom Equipments</a>
                                        <a class="dropdown-item" href="#">House Keeping Solutions</a>
                                        <a class="dropdown-item" href="#">Large Consumer Appliances</a>
                                        <a class="dropdown-item" href="#">Cookware &amp; Utensils</a>
                                        <a class="dropdown-item" href="#">Interior Solutions</a>
                                         <a class="dropdown-item" href="#"> Display Counters, Solar Equipments &amp; Appliances and DTH Service Provider </a>
                                      </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                                         
                             
                           
                        </div>
                 
                </nav>
            </div>
           @yield ('content')
            </div>
           
    <div class="row footer" style="background-color:#42153b;"  id="contact">
            
                <div class="col-sm-4">
                    <div class="">
                        <img src="assets/img/horeca-logo-3.png" width="150">
                    </div>
                        
                </div>

                <div class="col-sm-4">
                    <div class="text-white">
                        <p>202, Vinayak Residency, Close to Sona Resort, Sanganeri Road, Bhilwara (Raj.) - 313001 <span><button type="button" class="btn btn-light contactbutton">Get in Touch</button></span></p>
                    </div>
                        
                </div>

                <div class="col-sm-4">
                    <div class="">
                        <a href="#"><img src="assets/img/icons/instagram.svg" width="15"></a>
                        <span><a href="#"><img src="assets/img/icons/facebook-logo.svg" width="15"></a></span>
                        <span><a href="#"><img src="assets/img/icons/whatsapp.svg" width="15"></a></span>
                    </div>
                        
                </div>
                    <div class="footer-copyright text-center py-3 col-sm-12 text-white">Copyright © 2019
                    <a href="#home" class="text-white"> HorecaHospitality</a>
                  </div>
        </div>
        

    </body>

</html>