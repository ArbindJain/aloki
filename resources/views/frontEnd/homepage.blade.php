<!DOCTYPE html>
<html lang="zxx">
    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title>ALoki - Fisk</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <!-- <li><a href="#">home</a></li> -->
                        <li><a href="#menu">Home Delivery</a></li>
                        <li><a href="#product">Products</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#news">Quality Guarantee</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#contact"> <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>

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
                    <div class="swiper-slide" style="background: url('frontEnd/img/fish-2366925_1920.jpg');">
                       <h1 class="main-heading inverse">Welcome<span>Aloki is here</span>
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

                        <h2 class="home-slider-title-main">100% fresh</h2>
                        <div class="home-slider-title-small" >Lorem ipsum dolor sit amet, consectetur adipisicing</div>

                        <a class="arrow bounce text-center" href="#about">
                            <span class="ti-mouse"></span>
                            scroll down
                            <span class="ti-angle-double-down"></span>
                        </a>
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
                        <h2 class="main-heading "><!-- Recomendation --> <span>PRODUCTS</span>
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
                                        <span class="menu-list-item-title">
                                            <span class="menu-list-item-name">{{ $product->name }}</span>
                                            <span class="menu-list-item-price-row">
                                                <span class="menu-list-item-price">KR. {{ number_format($product->price, 2, '.', ',') }}
                                                    <span>1 kg</span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="menu-list-item-ingridients">
                                            <a id="bulk-order-{{ $product->id }}" class="btn btn-sm btn-success pull-left" data-toggle="modal" data-target="#bulk-order-details-{{ $product->id }}">Bulk order Inquiry</a>
                                            <a class="btn btn-sm btn-success pull-right">Add to Cart</a>
                                        </span>
                                    </a>
                                    <!-- Modal -->
                                    <div class="modal fade bulk-order-model" id="bulk-order-details-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h2 class="main-heading">Fill details</h2>
                                                    </div>
                                                    <div class="col-md-8 col-md-push-2">
                                                        <div class="contact-form">
                                                            <form role="form" action="" method="">
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
                                                                    <input type="hidden" name="item" value="{{ $product->name }}" required />
                                                                </div>
                                                                <button type="submit" name="submit" class="btn btn-primary btn-lg text-center bulk-submit">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul> 
                </div>
            </div>
        </section>

        

        <section class="about" id="about">


            <div class="about-chef section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h2 class="main-heading inverse">Quality<span>Quarantee</span>
                                <span class="main-heading-decor">
                                    <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                    <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                    <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>
                                </span>
                            </h2>
                            <h3 class="wow fadeInDown">Aloki</h3>
                            <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a class="btn btn-default btn-lg" href="#"  data-toggle="modal" data-target="#about-01">more</a>
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
                            <h2 class="main-heading ">Fresh<span> from the Sea</span>
                                <span class="main-heading-decor">
                                    <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                    <span class="">
                                    <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                    <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>
                                </span>
                            </h2>
                            <p> Sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.
                            </p>
                            <a class="btn btn-primary btn-lg" href="#menu">our products</a>
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
        

        <section id="reviews" class="testimonials section">
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

    
         

        <section id="contact" class="contact contact-with-map section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-heading">Contact<span> lorem dolorem</span>
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
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Message" rows="7"></textarea>
                                </div>

                                <button type="button" id="contact-submit" name="submit" class="btn btn-primary btn-lg text-center">Submit your message</button>
                            </form>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="submit-model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="main-heading" id="contact-us-response"></h2>
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
                            
                            <li class="wow fadeInDown" data-wow-delay="0.8s">
                                <a href="https://vimeo.com/" target="_blank"><span class="ti-vimeo-alt"></span></a>
                            </li>
                            
                            <li class="wow fadeInDown" data-wow-delay="1s">
                                <a href="http://youtube.com/" target="_blank"><span class="ti-youtube"></span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-md-offset-4 col-sm-12">
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
                    </div>

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
    </body>
</html>