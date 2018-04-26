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
    <link rel="icon" type="image/png" href="{{ asset('frontEnd/img/favicon.ico') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700%7CAlex+Brush%7CPhilosopher:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/own.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300i,400" rel="stylesheet"> 
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <style type="text/css">
        /* The ribbons */

      .corner-ribbon{
        width: 400px;
        background: #e43;
        position: absolute;
        top: 25px;
        left: -50px;
        text-align: center;
        line-height: 56px;
        letter-spacing: 1px;
        color: #f0f0f0;
        text-shadow: none;
        font-weight: bold;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        font-size: 18px;
      }

      /* Custom styles */

      .corner-ribbon.sticky{
        position: fixed;
      }

      .corner-ribbon.shadow{
        box-shadow: 0 0 3px rgba(0,0,0,.3);
      }

      /* Different positions */

      .corner-ribbon.top-left{
        top: 135px;
        left: -130px;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
      }

      .corner-ribbon.top-right{
        top: 25px;
        right: -50px;
        left: auto;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
      }

      .corner-ribbon.bottom-left{
        top: auto;
        bottom: 25px;
        left: -50px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
      }

      .corner-ribbon.bottom-right{
        top: auto;
        right: -50px;
        bottom: 25px;
        left: auto;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
      }

      /* Colors */

      .corner-ribbon.white{background: #f0f0f0; color: #555;}
      .corner-ribbon.black{background: #333;}
      .corner-ribbon.grey{background: #999;}
      .corner-ribbon.blue{background: #39d;}
      .corner-ribbon.green{background: #2c7;}
      .corner-ribbon.turquoise{background: #1b9;}
      .corner-ribbon.purple{background: #95b;}
      .corner-ribbon.red{background: #e43;}
      .corner-ribbon.orange{background: #e82;}
      .corner-ribbon.yellow{background: #ec0;}
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117929025-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-117929025-1');
    </script>

  </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50" style="font-family: 'Lato', sans-serif!important;">
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
                        <!-- <li><b href="" style="font-size: 14px; color: red;">Hjemlevering **  &nbsp;</b></li> -->
                        <li><a href="#product" style="font-size: 14px">PRIVATKUNDE</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#bulk-order" style="font-size: 14px">Bedriftskunde</a></li>
                        <li><a href="#about" style="font-size: 14px">Kvalitetsgaranti</a></li>
                        <li><a href="#contact" style="font-size: 14px">Kontakt oss</a></li>
                        <li>
                            <a href="#" id="cartShow">
                                <span class="glyphicon glyphicon-shopping-cart" style="font-size: 18px;"></span>
                                <span id="cartData" style="color: red;">
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
                            <h3 class="modal-title text-center">PRISFØRESPØRSEL/BESTILLINGSSKJEMA</h3>
                        </div>
                        <div class="col-md-8 col-md-push-2">
                            <div class="contact-form" style="margin-bottom: 15px;">
                                <form role="form" id="bulk-order-form" action="" method="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <select name="product" id="bulkorder-for" class="form-control">
                                            <option value="PRISFØRESPØRSEL/TILBUD" selected >PRISFØRESPØRSEL/TILBUD</option>
                                            <option value="BESTILLINGSSKJEMA">BESTILLINGSSKJEMA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="bulkorder-name" class="form-control" name="name" placeholder="Firma *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  id="bulkorder-phone" class="form-control" name="phone" placeholder="Kontakt Person *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  id="bulkorder-address" class="form-control" name="address" placeholder="Addresse" />
                                    </div>
                                    <!-- <div class="form-group">
                                        <input type="text" id="bulkorder-land" class="form-control" name="land" placeholder="Land *" required />
                                    </div> -->
                                    <div class="form-group">
                                        <input type="text" id="bulkorder-poststed" class="form-control" name="poststed" placeholder="Poststed" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="bulkorder-post_number" class="form-control" name="post_number" placeholder="Postnummer" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="bulkorder-email" name="email" placeholder="Email *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="bulkorder-tlf" name="tlf" placeholder="Tlf *" required />
                                    </div>
                                    <!-- <div class="form-group">
                                        <input type="text" class="form-control" id="bulkorder-fax" name="fax" placeholder="Fax" />
                                    </div> -->
                                    <div class="form-group">
                                        <textarea class="form-control" id="bulkorder-inquiry" name="additional_inquiry" placeholder="Melding" rows="4"></textarea>
                                    </div>
                                    <p style="color: #FF0000">Felt merket med * må fylles ut.</p>
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg text-center" id="bulk-submit">send inn</button>
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
                            <h2 class="main-title text-center">Fullfør bestillingen</h2>
                        </div>
                        <div class="col-md-8 col-md-push-2">
                            <div class="contact-form">
                                <h4 style="margin: 10px 0px;">PERSONLIGE OPPLYSNINGER OG LEVERINGSADRESSE</h4>
                                <form id="checkout-form" role="form" action="" method="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Fornavn *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="checkout-etternavn" name="etternavn" placeholder="Etternavn *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="checkout-email" name="email" placeholder="Epost *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Adresse *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="checkout-postnr" name="postnr" placeholder="Postnr *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="checkout-sted" name="sted" placeholder="Sted *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="checkout-phone" name="phone" placeholder="Telefon *" required />
                                    </div>
                                    <p style="color: #FF0000">Fyll inn felter merket med *</p>
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg text-center" id="order-confirm">Bekreft</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!-- <div class="load">
             <div class="load-container">
                 <span class="load-green" style="font-size: 60px;">A</span>
                 <span class="load-white " style="font-size: 60px;">L</span>
                 <span class="load-red " style="font-size: 60px;">O</span>
                 <span class="load-green" style="font-size: 60px;">K</span>
                 <span class="load-white " style="font-size: 60px;">I</span>
                 <span class="load-text">loading</span>
             </div>
         </div> -->
     
        <section class="home image-slider">

            <div class="home-slider text-center">
                <div class="swiper-wrapper" style="background: url('frontEnd/img/h5.jpg');">

                    <div class="swiper-slide">

                       <h1 class="main-heading inverse" style="color:#00008b;">velkommen til aloki<span class="sub-header" style="font-size: 22px; color:#00008b;">LEVERANDØR AV SJØMAT TIL BEDRIFTER OG PRIVATKUNDER</span>

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
                        <div class="corner-ribbon top-left sticky red shadow">Hjemlevering!!</div>
                        <div class="row" style="margin-top: 100px;  " >
     <div class="service_ col-md-10 col-md-offset-1" >
       <div class="col-md-4 col-sm-4">
        <div class="box">
        <div class="box_con">
            <i class="fas fa-truck fa-3x" style="color:#c19c62;"></i><br><br>
         <span class="box_title">Fri Frakt</span> <br><span class="box-1">i Oslo</span>
         </div>
         <div class="circle hidden-xs"><span class="delivery"></span></div>
        </div>
       </div>
      <!--  <div class="col-md-3">
        <div class="box">
        <div class="box_con">
            <i class="fas fa-phone fa-3x" style="color:#c19c62;"></i><br><br>
         <span class="box_title">KUNDESERVICE</span><br>man-fre kl 08 - 16
         </div>
         <div class="circle hidden-xs"><span class="support"></span></div>
        </div>
       </div> -->
       <div class="col-md-4 col-sm-4">
        <div class="box">
        <div class="box_con">
            <i class="fas fa-thumbs-up fa-3x" style="color:#c19c62;"></i><br><br>
         <span class="box_title" >100% KVALITETSGARANTI</span><br><span class="box-1">TA VARE PÅ KVITTERINGEN </span><br>&nbsp;
         </div>
         <div class="circle hidden-xs"><span class="guarantee"></span></div>
        </div>
       </div>
       <div class="col-md-4 col-sm-4">
        <div class="box">
        <div class="box_con">
            <i class="fas fa-boxes fa-3x" style="color:#c19c62;"></i><br><br>
         <span class="box_title" >GOD KAPASITET</span> <br><span class="box-1">levering uansett størrelse</span>
         </div>
         <div class="circle hidden-xs"><span class="bulk"></span></div>
        </div>
       </div>
      </div>
      <div class="clearfix"></div>
   </div>
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
                        <h2 class="main-heading "><!-- Recomendation --> <span>PRIVATKUNDE</span>
                            <p style="font-size: 16px; margin-top: 12px;">Du får se varene ved levering før du betale</p>
                            <span class="main-heading-decor">
                                <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".2s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                <span class="">
                                <img class="wow fadeInUp js-rotate" data-wow-delay=".4s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>

                                <span class=""><img class="wow fadeInUp js-rotate" data-wow-delay=".6s" src="{{ asset('frontEnd/img/asterix.svg') }}" alt="decor" width="20" height="20"></span>
                            </span>
                        </h2>
                    </div>

                    <ul class="col-md-12" id="product">
                        @if(count($products) > 0)
                            @foreach($products as $product)
                                <li class="col-md-4 col-sm-6 col-xs-6 wow fadeInDown product-li" data-wow-delay="0.2s">
                                    <a href="#" class="" data-toggle="modal" data-target="#menu-01">
                                        <img src="{{ asset('images/products').'/'.$product->image }}" alt="placehoder" class="img-responsive">
                                    </a>                                    <span class="menu-list-item-title">
                                        <span class="menu-list-item-name">{{ $product->name }}</span>
                                        <span class="menu-list-item-price-row">
                                            <span class="menu-list-item-price">KR.<del class="text-danger">{{ number_format($product->old_price, 2, '.', ',') }}</del>&nbsp;{{ number_format($product->price, 2, '.', ',') }}
                                                <span>1 kg</span>
                                            </span>
                                        </span>
                                    </span>
                                    <div class="cartDiv">
                                    <span class="" style="color: #000;">{{ $product->description }}</span>
                                        <span class="menu-list-item-title">
                                            <span class="menu-list-item-name">Mengde :
                                                <input type="hidden" class="productId" name="productId" value="{{ $product->id }}">
                                                <input type="hidden" class="quantity_multiplier" name="multiplier" value="{{ $product->quantity_multiplier }}">
                                                <input type="number" class="form-control quiantityValue" name="quant[1]" value="{{ $product->quantity_multiplier }}" step="{{ $product->quantity_multiplier }}" min="{{ $product->quantity_multiplier }}" style="display: inline-block; width: 75px;">Kg
                                            </span>
                                            <span class="menu-list-item-price-row">
                                                <button type="button" class="btn btn-default btn-number hidden-md hidden-xs" data-type="minus" data-field="quant[1]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <button type="button" class="btn btn-default btn-number hidden-md hidden-xs" data-type="plus" data-field="quant[1]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                                <button type="button" class="btn btn-default btn-number hidden-sm hidden-lg btn-sm" data-type="minus" data-field="quant[1]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <button type="button" class="btn btn-default btn-number hidden-sm hidden-lg btn-sm" data-type="plus" data-field="quant[1]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </span>
                                        </span>
                                        <span class="menu-list-item-ingridients">
                                            <a class="btn btn-sm btn-success pull-right cart-submit" href="{{ route('cartAdd', $product->id) }}">KJØP PRODUKT</a>
                                        </span>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul> 
                </div>
                <div class="col-md-12 text-center">
                <button type="submit" id="see-all" name="submit" class="btn btn-primary btn-lg text-center bulk-submit" style="margin-top: 50px;">Se alle PRIVATKUNDE</button>
                </div>
            </div>
        </section>

        

        <section class="about" id="about">

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
                            <p class="wow fadeInUp" style="font-size: 24px!important;">Vi gir 100% fornøydgaranti på alle våre varer så lenge du som kunde kontakter oss innen 14 dager fra handledatoen og har kvittering. </p>
                            <p class="wow fadeInUp" style="font-size: 24px!important;">Vennligst send en skriftlig klage til Post@aloki.no</p>
                            <!-- <p class="wow fadeInUp" style="font-size: 24px!important;">Jeg synes produktet deres var dyrt</p>
                            <p class="wow fadeInUp" style="font-size: 24px!important;">Jeg er misfornøyd med selgers oppførsel</p>
                            <p class="wow fadeInUp" style="font-size: 24px!important;">Jeg angrer mitt kjøp</p>
 -->
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




        <!--     <div class="container">
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

                            </p> -->
                           <!--  <a class="btn btn-primary btn-lg" href="#menu">our products</a> -->
                      <!--   </div>

                        <div class="col-md-6 col-xs-12 about-photo">
                            <img class="col-md-6 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.2s" alt="about photo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkXphlr9_KWwBKDTHpboFCxVlhxOUwRn7vzWNNH2VByTo5bRiHsA">
                            <img class="col-md-6 col-sm-6 col-xs-6 wow fadeInDown" data-wow-delay="0.4s" alt="about photo" src="{{ asset('frontEnd/img/placeholder2.jpg') }}">
                        </div>
                    </div>
                </div>
            </div> -->
           
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
                                    <input type="text" class="form-control" id="contact-name" name="name" placeholder="Navn" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="contact-email" name="email" placeholder="E-post" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-phone" name="phone" placeholder="Telefonnummer" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-subject" name="subject" placeholder="Emne" required />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="contact-message" name="message" placeholder="Budskap" rows="7"></textarea>
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
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg text-center"  data-dismiss="modal">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 
            <div class="google-maps">
                <div id="map-canvas"></div>
            </div> -->

        </section>
        <footer class="footer section" style="background-color: #000; color: #fff;">
            <div class="container">
                <div class="row">
                    

                        

                    <div class="col-md-12 text-center">
                        <p>Hallagerbakken 10c 1256 <br>Oslo <br> telefon - 96961234 <br> post@aloki.no<br>Copyright © Aloki</p>
                        <!-- <img class="footer-logo" src="{{ asset('frontEnd/img/logo.png') }}" alt="footer-logo"> -->
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
        <script src="{{ asset('frontEnd/js/see_all_product.js') }}"></script>
    </body>
</html>