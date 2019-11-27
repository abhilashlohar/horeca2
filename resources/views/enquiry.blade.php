@extends('layouts.front')

@section('headpart')

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
<body class="body-bg">
@endsection


@section('content')
<div class="container">
        
          <div class="row detail-body">


                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 product-image">

                <?php if ($product->image_path) { ?>
                    <img src="<?php echo url('/'); ?>/uploads/<?php echo $product->image_path; ?>" alt="">
                <?php } else { ?>
                    <img src="<?php echo url('/'); ?>/assets/img/quick-view/l1.jpg"> 
                <?php } ?>
                   

                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 body-content">

                  <h3>{{ $product->name }}</h3>
                  <p>{{ $product->description }}</p>
                     <!-- <div class="quick-view-select">
                        <div class="select-option-part">
                            <label>Dimension*</label>
                            <select class="select">
                                <option value="">- Please Select -</option>
                                <option value="">x</option>
                                <option value="">y</option>
                                <option value="">z</option>
                            </select>
                        </div>
                        <div class="select-option-part">
                            <label>Color*</label>
                            <select class="select">
                                <option value="">- Please Select -</option>
                                <option value="">Black</option>
                                <option value="">Beige</option>
                                <option value="">Grey</option>
                            </select>
                        </div>
                    </div> -->

                    
                  <div class="quickview-plus-minus">
                    <div class="quickview-btn-cart">
                        <a title="Quick View" data-toggle="modal" style="padding: 10px;" data-target="#exampleModal" class="animate-right" href="#">Enquire Now</a>
                    </div>
                </div>
            </div>
        </div>


      </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-dialog modal-bg" role="document">
                  <h3>Request a Quote</h3>
            
        <form action="{{ route('saveenquiry', $product->id) }}" method="POST" class="modal-content">
        @csrf
                
                <input type="hidden" name="product_name" value="{{ $product->name }}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="Contact">Contact Number</label>
                    <input type="text" name="name" class="form-control" id="contact" placeholder="Contact Number" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                  </div>
                   
                  <div class="form-group col-md-6">
                    <label for="Company">Organization / Company</label>
                    <input type="text" name="company" class="form-control" id="Company" placeholder="Company" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="notes">Notes</label>
                  <input type="text" name="description" class="form-control" id="notes" placeholder="xyz" required>
                </div>
                <button type="submit" class="btn" style="background-color: #e61c6f; color: #fff; display: inline-block; letter-spacing: 0.08px; line-height: 1;  position: relative; z-index: 5;  border-radius: 5px;">Send Enquiry</button>
          </form>

                </div>
            </div>
@endsection