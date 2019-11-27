@extends('layouts.front')

@section('headpart')
<!-- all css here -->
<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/magnific-popup.css">
<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/animate.css">
<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/slinky.min.css">
<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/meanmenu.min.css">
<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/jquery-ui.css">
<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/slick.css">
<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/bundle.css">
<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/responsive.css">
    <!-- index index-->
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/styleo.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flickity@2/dist/flickity.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Actor|Alegreya+Sans+SC|M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/responsive.css">

<script src="<?php echo url('/'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo url('/'); ?>/assets/js/script.js"></script>
 <script src="<?php echo url('/'); ?>/assets/js/jquery-3.4.1.min.js"></script>
<script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ac4e70cd8e.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="<?php echo url('/'); ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
    <body>
@endsection



@section('content')
<div class="shop-page-wrapper hidden-items padding-filter">
    <div class="container-fluid">
        <div class="row pr-head">
            <div class="col-sm-12 headline-bg">
                    <h1 class="product-head">{{ $category->name }}</h1>
            </div>

        </div>

    <div class="cat-series">
        @foreach ($SubCategories as $SubCategory)
        
        <?php if (count($SubCategory->products)>0) { ?>
            <h3 class="product-subhead one">{{ $SubCategory->name }}</h3>
            <div class="shop-product-content tab-content">
                <div id="grid-5-col1" class="tab-pane fade active show">
                    <div class="row custom-row">
                        @foreach ($SubCategory->products as $product)
                        <div class="custom-col-5 custom-col-style">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#">
                                        <?php if ($product->image_path) { ?>
                                            <img src="<?php echo url('/'); ?>/uploads/<?php echo $product->image_path; ?>" alt="">
                                        <?php } else { ?>
                                            <img src="<?php echo url('/'); ?>/assets/img/shop/shop-grid-1/2.jpg" alt="">
                                        <?php } ?>
                                    </a>
                                    <div class="product-action">
                                        <!-- <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a> -->
                                        <a style="padding: 10px;" class="animate-right" href="{{ route('enquiry', $product->id) }}">Enquire </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4>{{ $product->name }}</h4>
                                        </div>
                                       <!--  <div class="product-price">
                                            <span>Rs.xyz</span>
                                        </div> -->
                                    </div>
                
                                </div>
                            </div>
                       </div>
                       @endforeach
                 </div>



                </div>
              
            </div>
        <?php } ?>
        

        @endforeach

    </div>

    </div>

    </div>
@endsection