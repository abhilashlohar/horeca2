@extends('layouts.front')

@section('content')
<div class="contact-bg">
                <h1>Contact us</h1>
                <div class="row">                   
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contact-form">
                        <form>
                          <div class="form-group">
                            <label for="companyname">Company Name</label>
                            <input type="" class="form-control" id="companyname" aria-describedby="" placeholder="">
                          </div>
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="" class="form-control" id="name" placeholder="">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                          </div>
                          <div class="form-group">
                            <label for="mobilenumber">Mobile Number</label>
                            <input type="" class="form-control" id="mobilenumber" placeholder="">
                          </div>
                            <div class="form-group">
                            <label for="message">Message</label>
                            <input type="" class="form-control" id="message" placeholder="">
                          </div>
                          <button type="submit" class="btn">Submit</button>
                        </form>
                    </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 map">
                        <iframe allowfullscreen="" frameborder="0" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56928.85341281277!2d75.74129018268417!3d26.901802275510416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db4a41aecafa3%3A0xfc4504c22597c2ce!2sAH+International!5e0!3m2!1sen!2sin!4v1522679586598" style="border:0;" width="80%" class=""></iframe>  
                </div>

                </div>
        </div>

        @endsection