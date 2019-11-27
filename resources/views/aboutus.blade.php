@extends('layouts.front')

@section('headpart')
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/styleo.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flickity@2/dist/flickity.css">
  <link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/responsive.css">
  <link rel="shortcut icon" type="image/png" href="<?php echo url('/'); ?>/assets/img/h.PNG"/>
<script src="<?php echo url('/'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo url('/'); ?>/assets/js/script.js"></script>
 <script src="<?php echo url('/'); ?>/assets/js/jquery-3.4.1.min.js"></script>
<script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ac4e70cd8e.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
    <body>
@endsection

@section('content')

            <div class="row about-section sections py-5"  id="about">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 about-size">
                    <div class="heading">
                        <h1>ABOUT US</h1>
                    </div>
                        
                </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 description text-left" >
                        <p>HORECA HOSPITALITY SOLUTIONS are leading service provider in Hospitality Solutions. Over the time span, We have crafted numerous Trunkey projects for HOtel - REstaurant – CAnteen Hospitality solutions, Staying at Par with latest demands and changing trends in the market. We are fulfilling demand of a wide range of consumers from HO-RE-CA Sectors with our most advanced kitchen Solutions. Our range includes HORECA Kitchen Equipments & Utilities, Guest Room Solutions, House 
                        Keeping Supplies & Solutions, Display Counters & Solutions, Appliances, DTH Connections & Solutions, Solar Equipments, Hotel Management Softwares, Interior Designing & Solutions</p>
                    </div>
            </div>

            
@endsection
