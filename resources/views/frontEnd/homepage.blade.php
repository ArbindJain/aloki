<!DOCTYPE html>
<html lang="zxx">
    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ALoki - Fisk</title>
        <link rel="icon" type="image/png" href="{{ asset('frontEnd/img/favicon.png') }}"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700%7CAlex+Brush%7CPhilosopher:400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontEnd/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('frontEnd/css/theme.css') }}">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <nav class="navbar navbar-fixed-top shadow navbar-fixed-active" id="js-nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('frontEnd/img/logo.png') }}" alt="logo">
                        <img class="logo-inverse" src="{{ asset('frontEnd/img/logo-inverse.png') }}" alt="logo">
                    </a>
                </div>

                <div class=" navbar " id="">
                    <ul class="nav navbar-nav">
                        <!-- <li><a href="#">home</a></li> -->
                        <li><b href="" style="font-size: 14px; color: red;">Hjemlevering **  &nbsp;</b></li>
                        <li><a href="#product" style="font-size: 14px">Produkt</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#bulk-order" style="font-size: 14px">Bedriftskunde</a></li>
                        <li><a href="#about" style="font-size: 14px">Kvalitetsgaranti</a></li>
                        <li><a href="#contact" style="font-size: 14px">Kontakt oss</a></li>
                        <li>
                            <a href="#" id="cartShow">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                <span id="cartData">
                                    @if(Cart::count() > 0)
                                        {{ Cart::count() }} Elementer - KR.{{ Cart::total() }}
                                    @endif
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Cart items Modal -->
        <div class="modal fade" id="cart-model">
            <div class="modal-dialog">
                <div class="modal-content" id="cart-table">
                    
                </div>
            </div>
        </div>
        <!-- Bulkorder Modal -->
        <div class="modal fade" id="bulk-order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="">
                        <div class="col-md-12">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title text-center">Fill details</h2>
                        </div>
                        <div class="col-md-8 col-md-push-2">
                            <div class="contact-form">
                                <form role="form" id="bulk-order-form" action="" method="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <select name="product" id="product-dropdown" class="form-control">
                                            <option value="" selected disabled> -- Inquiry for -- </option>
                                            @foreach($products as $product)
                                                <option value="{{ $product->name }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" placeholder="Address" required />
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg text-center" id="bulk-submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--User details when checkout Modal -->
        <div class="modal fade" id="user-checkout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="">
                        <div class="col-md-12">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="main-title text-center">Fill all details</h2>
                        </div>
                        <div class="col-md-8 col-md-push-2">
                            <div class="contact-form">
                                <form id="checkout-form" role="form" action="" method="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" placeholder="Address" required />
                                    </div>
                                    <div>
                                        {{-- <input type="hidden" name="item" value="{{ $product->name }}" required /> --}}
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg text-center" id="order-confirm" onclick="confirm('Once order confirmed, can not be changed')">Confirm</button>
                                    <span class="text-danger">c.o.d. only</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="load">
             <div class="load-container">
                 <span class="load-green" style="font-size: 60px;">A</span>
                 <span class="load-white " style="font-size: 60px;">L</span>
                 <span class="load-red " style="font-size: 60px;">O</span>
                 <span class="load-green" style="font-size: 60px;">K</span>
                 <span class="load-white " style="font-size: 60px;">I</span>
                 <span class="load-text">loading</span>
             </div>
         </div>
     
        <section class="home image-slider">
            <div class="home-slider text-center">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: url('frontEnd/img/h1.jpg');">
                       <h1 class="main-heading inverse">velkommen til aloki<span>Norges beste fiskeforretning online</span>
                            <!-- <span class="main-heading-decor">                          
                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>
                            </span> -->
                        </h1>

                        <!-- <h2 class="home-slider-title-main">100% fresh</h2>
                        <div class="home-slider-title-small" >Lorem ipsum dolor sit amet, consectetur adipisicing</div>

                        <a class="arrow bounce text-center" href="#about">
                            <span class="ti-mouse"></span>
                            scroll down
                            <span class="ti-angle-double-down"></span>
                        </a> -->
                    </div>




                   <!--  <div class="swiper-slide" style="background: url(img/home3.jpg)">
                       <h1 class="main-heading inverse">Welcome<span>Aloki is here</span>
                            <span class="main-heading-decor">                          
                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>
                            </span>
                        </h1>

                        <h2 class="home-slider-title-main">100% authentic</h2>
                        <div class="home-slider-title-small">Lorem ipsum dolor sit amet, consectetur adipisicing</div>

                        <a class="arrow bounce text-center" href="#about">
                            <span class="ti-mouse"></span>
                            scroll down
                            <span class="ti-angle-double-down"></span>
                        </a>
                    </div> -->

                </div>

                <div class="home-pagination"></div>
                <div class="home-slider-next right-arrow-negative">
                    <span class="ti-arrow-right"></span>
                </div>

                <div class="home-slider-prev left-arrow-negative">
                    <span class="ti-arrow-left"></span>
                </div>
            </div>
        </section>

         <section class="recomendation section" id="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-heading "><!-- Recomendation --> <span>produkt</span>
                            <span class="main-heading-decor">
                                <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                <span class="">
                                <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>
                            </span>
                        </h2>
                    </div>

                    <ul>
                        @if(count($products) > 0)
                            @foreach($products as $product)
                                <li class="col-md-4 col-sm-6 col-xs-6 wow fadeInDown" data-wow-delay="0.2s">
                                    <a href="#" class="" data-toggle="modal" data-target="#menu-01">
                                        <img src="{{ asset('images/products').'/'.$product->image }}" alt="placehoder">
                                    </a>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">{{ $product->name }}</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR.<strike class="text-danger">{{ number_format($product->old_price, 2, '.', ',') }}</strike>&nbsp;{{ number_format($product->price, 2, '.', ',') }}
                                                <span>1 kg</span>
                                            </span>
                                        </span>
                                    </span>
                                    <div class="cartDiv">
                                        <span class="menu-list-item-title">
                                            <span class="menu-list-item-name">Mengde :
                                                <input type="hidden" class="productId" name="productId" value="{{ $product->id }}">
                                                <input type="number" class="form-control quiantityValue" name="quant[1]" value="1" min="1" style="display: inline-block; width: 75px;">Kg
                                            </span>
                                            <span class="menu-list-item-price-row">
                                                <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="quant[1]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </span>
                                        </span>
                                        <span class="menu-list-item-ingridients">
                                            <a class="btn btn-sm btn-success pull-right cart-submit" href="{{ route('cartAdd', $product->id) }}">Add to Cart</a>
                                        </span>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul> 
                </div>
                <div class="col-md-12 text-center">
                <button type="submit" name="submit" class="btn btn-primary btn-lg text-center bulk-submit" style="margin-top: 50px;">se alt produkt</button>
                </div>
            </div>
        </section>

        

        <section class="about" id="about">

IKKE VÆR REDD FOR Å KLAGE PÅ TJENESTEN VÅR

            <div class="about-chef section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h2 class="main-heading inverse"> Kvalitetsgaranti<span></span>
                               <!--  <span class="main-heading-decor">
                                    <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                    <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                    <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>
                                </span> -->
                            </h2>
                            <br><br><br>
                           <!--  <h3 class="wow fadeInDown">Aloki</h3> -->
                            <p class="wow fadeInUp" style="font-size: 24px!important;">Jeg er misfornøyd med smak</p>
                            <p class="wow fadeInUp" style="font-size: 24px!important;">Jeg fant ben i fisken som skulle være benfri</p>
                            <p class="wow fadeInUp" style="font-size: 24px!important;">Jeg synes produktet deres var dyrt</p>
                            <p class="wow fadeInUp" style="font-size: 24px!important;">Jeg er misfornøyd med selgers oppførsel</p>
                            <p class="wow fadeInUp" style="font-size: 24px!important;">Jeg angrer mitt kjøp</p>

                         <!--    <a class="btn btn-default btn-lg" href="#"  data-toggle="modal" data-target="#about-01">more</a> -->
                        </div>
                    </div>

                    <!-- ABOUT MODAL -->
                    <div id="about-01" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content shadow">
                                <a class="close" data-dismiss="modal"><span class="ti-close"></span></a>
                                <div class="modal-body">
                                    <div class="post-entry post-entry-modal">
                                        <h2>Meet our chef de cuisine -<br> Thomas Example</h2>
                                        <span class="post-entry-cover" style="background-image:url(img/home4.jpg); ">
                                        </span>


                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        </p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        </p>

                                        <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / ABOUT MODAL -->
                </div>
            </div>




            <div class="container">
                <div class="row">
                    <div class="about-row section">
                        <div class="col-md-6 text-center">
                            <h2 class="main-heading ">Fersk<span> fra havet</span>
                                <span class="main-heading-decor">
                                    <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                    <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                    <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>
                                </span>
                            </h2>
                            <p style="font-size: 26px; color: #000;"> 
- Legg inn bestilling, så ringer vi for å avtale når du ønsker levering<br>
- Du får se varene ved levering før du betaler<br>
- Gratis levering

                            </p>
                           <!--  <a class="btn btn-primary btn-lg" href="#menu">our products</a> -->
                        </div>

                        <div class="col-md-6 col-xs-12 about-photo">
                            <img class="col-md-6 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.2s" alt="about photo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkXphlr9_KWwBKDTHpboFCxVlhxOUwRn7vzWNNH2VByTo5bRiHsA">
                            <img class="col-md-6 col-sm-6 col-xs-6 wow fadeInDown" data-wow-delay="0.4s" alt="about photo" src="{{ asset('frontEnd/img/placeholder2.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- <div class="about-row about-row-inverse section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h2 class="main-heading inverse">Wines <span>from italy</span>
                                <span class="main-heading-decor">
                                    <span class="">
                                        <img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                    </span>

                                    <span class="">
                                        <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                    </span>

                                    <span class="">
                                        <img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                    </span>
                                </span>
                            </h2>
                            <h3>Culpa qui officia deserunt </h3>
                            <p>Sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                            <a class="btn btn-default btn-lg" href="#" data-toggle="modal" data-target="#menu-01">wine card</a>
                        </div>
                        <div class="col-md-6 about-photo">
                        </div>
                    </div>
                </div>
            </div> -->
<!-- 
            <div class="container">
                <div class="row">
                    <div class="about-row section">
                        <div class="col-md-6 about-photo">
                            <img class="col-md-6 col-sm-4 col-xs-6 wow fadeInUp" alt="about photo" src="{{ asset('frontEnd/img/placeholder3.jpg') }}" data-wow-delay=".2s">
                            <img class="col-md-6 col-sm-4 col-xs-6 wow fadeInUp" alt="about photo" src="{{ asset('frontEnd/img/placeholder4.jpg') }}" data-wow-delay=".4s">
                            <img class="col-md-6 col-sm-4 col-xs-6 wow fadeInUp" alt="about photo" src="{{ asset('frontEnd/img/placeholder5.jpg') }}" data-wow-delay=".6s">
                            <img class="col-md-6 col-sm-4 col-xs-6 wow fadeInUp" alt="about photo" src="{{ asset('frontEnd/img/placeholder6.jpg') }}" data-wow-delay=".8s">
                            <img class="col-md-6 col-sm-4 col-xs-6 wow fadeInUp" alt="about photo" src="{{ asset('frontEnd/img/placeholder7.jpg') }}" data-wow-delay="1s">
                            <img class="col-md-6 col-sm-4 col-xs-6 wow fadeInUp" alt="about photo" src="{{ asset('frontEnd/img/placeholder9.jpg') }}" data-wow-delay="1.2s">
                        </div>

                        <div class="col-md-6 text-center">
                            <h2 class="main-heading ">Excellent <span>italian food</span>
                                <span class="main-heading-decor">
                                    <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                    <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                    <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>
                                </span>
                            </h2>
                            <h3>Duis aute irure dolor in reprehenderit</h3>
                            <p>Sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <p><br>Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div> -->

            
        </section>

       

        <!-- <section class="menu section" id="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-heading ">Discover menu<span>lorem dolorem</span>
                            <span class="main-heading-decor">                          
                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>
                            </span>
                        </h2>
                    </div>

                    <div class="col-md-3">
                        <div class="menu-list">
                        <h3>Pizza</h3>
                            <ul class="">
                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">01</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                        <span class="red"><span class="icon"></span>hot</span>
                                        <span class="brown"><span class="icon"></span>gluten free</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">02</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">03</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>
                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">04</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                        <span class="red"><span class="icon"></span>hot</span>
                                        <span class="brown"><span class="icon"></span>gluten free</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">05</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">06</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">07</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                        <span class="red"><span class="icon"></span>hot</span>
                                        <span class="brown"><span class="icon"></span>gluten free</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">08</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">09</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <div class="menu-list">
                        <h3>Pasta</h3>
                            <ul class="">
                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">01</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                        <span class="red"><span class="icon"></span>hot</span>
                                        <span class="brown"><span class="icon"></span>gluten free</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">02</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">03</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">04</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                        <span class="red"><span class="icon"></span>hot</span>
                                        <span class="brown"><span class="icon"></span>gluten free</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">05</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">06</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div class="menu-list">
                        <h3>Cold Starters</h3>
                            <ul class="">
                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">01</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                        <span class="red"><span class="icon"></span>hot</span>
                                        <span class="brown"><span class="icon"></span>gluten free</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">02</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">03</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-md-push-2">
                        <div class="menu-list">
                        <h3>Warm Starters</h3>
                            <ul class="">
                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">01</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name. long food name, example of wrap text</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">02</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div class="menu-list">
                        <h3>Desserts</h3>
                            <ul class="">
                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">01</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                        <span class="red"><span class="icon"></span>hot</span>
                                        <span class="brown"><span class="icon"></span>gluten free</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">02</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">03</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">04</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                        <span class="red"><span class="icon"></span>hot</span>
                                        <span class="brown"><span class="icon"></span>gluten free</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">05</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>

                                <li class="menu-list-item">
                                    <span class="menu-list-item-order">06</span>
                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">Food name. long food name, example of wrap text</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR. 22.00
                                            </span>
                                        </span>
                                    </span>

                                    <span class="menu-list-item-ingridients">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                    <span class="menu-list-item-icons">
                                        <span class="green"><span class="icon"></span>vege</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                    <!-- MENU MODAL -->
                   <!--  <div id="menu-01" class="modal fade menu-modal" role="dialog">
                        <div class="modal-dialog"> -->
                            <!-- Modal content-->
                            <!-- <div class="modal-content shadow">
                                <a class="close" data-dismiss="modal"><span class="ti-close"></span></a>
                                <div class="modal-body">
                                    <div class="modal-header">
                                        <div class="col-md-12 text-center">

                                            <h2>spaghetti bolognese</h2>
                                            <span class="menu-modal-price-row">
                                                <span class="menu-modal-item-price">KR. 12.00
                                                    <span>300g</span>
                                                </span>
                                                <span class="menu-modal-item-price">KR. 18.00
                                                    <span>600g</span>
                                                </span>
                                            </span>
                                        </div>
                                        <ul class="menu-labels">
                                            <li class="menu-labels-item">
                                                <span class="food-icon-16 icon"></span>
                                                <span class="menu-labels-item-title">for vegan</span>
                                            </li>

                                            <li class="menu-labels-item">
                                                <span class="food-icon-18 icon"></span>
                                                <span class="menu-labels-item-title">grana padano</span>
                                            </li>

                                            <li class="menu-labels-item">
                                                <span class="food-icon-13 icon"></span>
                                                <span class="menu-labels-item-title">italian tomatoes</span>
                                            </li>

                                            <li class="menu-labels-item">
                                                <span class="food-icon-27 icon"></span>
                                                <span class="menu-labels-item-title">ready in 15-20 min</span>
                                            </li>
                                        </ul>
                                        <img src="{{ asset('frontEnd/img/placeholder7.jpg') }}" alt="menu photo" class="full-width">
                                    </div>

                                    <div class="modal-text-box">
                                        <h4>Ingridients:</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,

                                        </p>
                                        <h4>Alergens:</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- / MENU MODAL -->
                <!-- </div>
            </div>       
        </section> -->
     
        <!-- <div id="about-counter" class="about-counter section">  
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <h2 class="main-heading inverse">Italia<span>in numbers</span>
                            <span class="main-heading-decor">                          
                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>
                            </span>
                        </h2>
                    </div>

                    <div class="col-md-3 wow fadeInLeft about-counter-single" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                        <div class="counter">
                            <h2 class="timer"> 23</h2>
                            <p>fugiat nulla</p>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInLeft about-counter-single" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <div class="counter">
                            <h2 class="timer">14006 </h2>
                            <p>velit esse</p>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInLeft about-counter-single" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                        <div class="counter">
                            <h2 class="timer"> 65</h2>
                            <p>tempor incididunt</p>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
                        <div class="counter">
                            <h2 class="timer">1180</h2>
                            <p>adipisicing elit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 -->
        

        <!-- <section id="reviews" class="testimonials section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-heading inverse">Reviews<span> of our guests</span>
                            <span class="main-heading-decor">                          
                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>
                            </span>
                        </h2>
                    </div>

                    <div class="testimonials-slider text-center">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonials-container shadow">
                                    <img class="wow fadeInUp" src="{{ asset('frontEnd/img/user.png') }}" alt="user avatar">
                                    <h3 class="wow fadeInUp" data-wow-delay=".4s">Martin Johe, Co-Founder / CEO
                                    <span class="testimonials-rating">
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".2s"></span>
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".4s"></span>
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".6s"></span>
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".8s"></span>
                                        <span class="icon ti-star wow fadeInUp" data-wow-delay="1s"></span>
                                    </span>
                                    </h3>
                                    <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials-container shadow">
                                    <img class="wow fadeInUp" src="{{ asset('frontEnd/img/user.png') }}" alt="user avatar">
                                    <h3 class="wow fadeInUp" data-wow-delay=".4s">Martin Johe, Co-Founder / CEO
                                    <span class="testimonials-rating">
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".2s"></span>
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".4s"></span>
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".6s"></span>
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".8s"></span>
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay="1s"></span>
                                    </span>
                                    </h3>
                                    <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials-container shadow">
                                    <img class="wow fadeInUp" src="{{ asset('frontEnd/img/user.png') }}" alt="user avatar">
                                    <h3 class="wow fadeInUp" data-wow-delay=".4s">Martin Johe, Co-Founder / CEO
                                    <span class="testimonials-rating">
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".2s"></span>
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".4s"></span>
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".6s"></span>
                                        <span class="icon active ti-star wow fadeInUp" data-wow-delay=".8s"></span>
                                        <span class="icon ti-star wow fadeInUp" data-wow-delay="1s"></span>
                                    </span>
                                    </h3>
                                    <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="testimonials-pagination"></div>
                        <div class="testimonials-slider-next right-arrow-negative">
                            <span class="ti-arrow-right"></span>
                        </div>

                        <div class="testimonials-slider-prev left-arrow-negative">
                            <span class="ti-arrow-left"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 -->
    
         

        <section id="contact" class="contact contact-with-map section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-heading">Kontakt oss<span></span>
                            <span class="main-heading-decor">                          
                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>

                                <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20">
                                </span>
                            </span>
                        </h2>
                    </div>

                    <div class="col-md-8 col-md-push-2">
                        <div class="contact-form">
                            <form id="contact-us-form" method="" action="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Navn" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="E-post" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefonnummer" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Emne" required />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Budskap" rows="7"></textarea>
                                </div>

                                <button type="button" id="contact-submit" name="submit" class="btn btn-primary btn-lg text-center">send inn meldingen din</button>
                            </form>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="submit-model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="">
                                    <div class="col-md-12">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h2 id="contact-us-response" class="modal-title text-center">Fill details</h2>
                                    </div>
                                    <div class="col-md-8 col-md-push-2">
                                        <div class="contact-form text-center">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg text-center"  data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="google-maps">
                <div id="map-canvas"></div>
            </div>
        </section>

        <footer class="footer section">
            <div class="container">
                <div class="row">
                    <div class="social">
                        <ul>
                            <li class="wow fadeInDown" data-wow-delay="0.2s">
                                <a href="http://facebook.com/" target="_blank"><span class="ti-facebook"></span></a>
                            </li>
                            
                            <li class="wow fadeInDown" data-wow-delay="0.4s">
                                <a href="https://twitter.com/" target="_blank"><span class="ti-twitter-alt"></span></a>
                            </li>
                            
                            <li class="wow fadeInDown" data-wow-delay="0.6s">
                                <a href="http://linkedin.com/" target="_blank"><span class="ti-linkedin"></span></a>
                            </li>
                            
                            <!-- <li class="wow fadeInDown" data-wow-delay="0.8s">
                                <a href="https://vimeo.com/" target="_blank"><span class="ti-vimeo-alt"></span></a>
                            </li>
                            
                            <li class="wow fadeInDown" data-wow-delay="1s">
                                <a href="http://youtube.com/" target="_blank"><span class="ti-youtube"></span></a>
                            </li> -->
                        </ul>
                    </div>

                    <!-- <div class="col-md-4 col-md-offset-4 col-sm-12">
                        <div class="footer-newsletter">
                            <div class="center text-center">
                                <h3>stay tuned</h3>

                                <div class="wow fadeInUp">
                                    <p>Subscribe to our weekly newsletter</p>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="e-mail">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><span class="ti-arrow-right"></span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-md-12 text-center">
                        <img class="footer-logo" src="{{ asset('frontEnd/img/logo.png') }}" alt="footer-logo">
                    </div>
                </div>
            </div>
        </footer>
      
        <script data-cfasync="false" src="http://thymetheme.pl/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script>
        <script src="{{ asset('frontEnd/js/vendor/wow.js') }}"></script>
        <script src="{{ asset('frontEnd/js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('frontEnd/js/vendor/swiper.min.js') }}"></script>
        <script src="{{ asset('frontEnd/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontEnd/js/vendor/jquery.countTo.js') }}"></script>
        <script src="{{ asset('frontEnd/js/vendor/jquery.inview.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_6m6Glf1-P7jvVdHZ00e3Ue_EoUNe39g"></script>
        <script src="{{ asset('frontEnd/js/main.js') }}"></script>
        <script src="{{ asset('frontEnd/js/bulkOrderForm.js') }}"></script>
        <script src="{{ asset('frontEnd/js/contactUsForm.js') }}"></script>
        <script src="{{ asset('frontEnd/js/cart.js') }}"></script>
    </body>
</html>