<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">  
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />

    <title>ՓՈՒՉԻԿՆԵՐ | ՏՈՐԹԵՐ | ԳԻՖԹ ԲՈՔՍԵՐ | ՀՐԱՎԱՌՈՒԹՅՈՒՆ | ՄՈՒԼՏՀԵՐՈՍՆԵՐ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css" type="text/css" />   
    <link rel="stylesheet" href="<?= base_url() ?>public/css/jquery.exzoom.css" type="text/css" />
    <link href="<?= base_url() ?>public/css/handle-counter.min.css" rel="stylesheet" type="text/css" />      
    <script src="https://kit.fontawesome.com/3a0c83e525.js" crossorigin="anonymous"></script>
    
    <meta property="og:image" content="<?= base_url() ?>public/images/logo2.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1024">
<meta property="og:image:height" content="1024">


    <link rel="icon" href="<?= base_url() ?>public/favicon3.ico" type="image/x-icon">
</head>
<body>
  <style>
      .center {display: flex; align-items: center;}
      .light-dark {font-weight: bold; color:#494949}
      .icon {margin: 0 10px;}
      .margin-top {margin-top:20px;}
      .primary-color {color: #800080}
      .white-color {color: white!important}
      .primary-back {background: #800080!important; background-color: #800080!important}

        @font-face {
            font-family: 'Dejavue';
            src: url(<?= base_url() ?>public/fonts/a.ttf);
        }
  
        body {
            font-family:"Dejavue";
        }
  </style>
  
  

  <header>
    <div class="top-header">
      <div class="container">

        <div class="row">

          <div class="col-lg-1 col-md-1 col-sm-1 col-1 display display2"></div>

          <div class="col-lg-6 col-md-6 col-sm-6 display">

            <div class="top-menu">

              <ul>

                <li class="mr-80">Սպասարկում 24/7</li>

                <li><a href="#">Կորպորատիվ</a></li>

                <li><a href="#">FAQ</a></li>

              </ul>

            </div>

          </div>

          <div class="col-lg-4 col-md-5 col-sm-7 col-9">

            <div class="float-right social-media">

              <ul>

                <li>

                  <span><a href="https://wa.me/+37433727710">

                  <img src="<?= base_url() ?>public/images/whatsapp.png" /></a></span>

                  <span><a href="https://www.instagram.com/salooote_martooni/">

                  <img src="<?= base_url() ?>public/images/viber.png" /></a></span>

                </li>

                <li>

                  <a href="tel:+37433727710">

                  <img src="<?= base_url() ?>public/images/pi.png" /> + 374 60 727 717</a>

                </li>

              </ul>

            </div>

          </div>

          <div class="col-lg-1 col-md-1 col-sm-4 col-3">

            <div class="float-right social-media">

              <ul>

              <li><img style="cursor:pointer; width:28px;" src="<?= base_url() ?>public/images/en.png" /></li>

              </ul>

            </div>

          </div>

        </div>

      </div>
    </div>
    <div class="menu-bar">
      <div class="container">

        <div class="row">

          <div class="col-md-1 col-sm-3 col-3">

            <div id="mySidenav" class="sidenav">

              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="<?= site_url()?>">Գլխավոր</a>
              <a href="<?= site_url()?>/category/1">Փուչիկներով ձևավորումներ</a>
              <a href="<?= site_url()?>/category/2">Տորթեր</a>
              <a href="<?= site_url()?>/category/3">Մուլտհերոսներ</a>
              <a href="<?= site_url()?>/category/4">Գիֆթ բոքսեր</a>              
              <a href="<?= site_url()?>/category/5">Հրավառություններ</a>

            </div>

            <div class="openbtn">

              <span onclick="openNav()">&#9776;</span>

            </div>

          </div>

          <div class="col-md-10 col-sm-6 col-6">

            <div class="logo">

            <a href="<?= base_url() ?>"><img src="<?= base_url() ?>public/images/logo.png" /></a>

            </div>
          </div>
          <div class="col-md-1 col-sm-3 col-3" id="basket-part">
            <div class="basket-icon" onclick="openNav1()" style="cursor:pointer">
              <img src="<?= base_url() ?>public/images/partners/basket.png" />
              <span class="badge"></span>
            </div>
            <div id="basketShadow" class="shadow"></div>
            <div id="basketSidenav" class="sidenav">
              <div class="side-header">
                <span class="arrowbtn" onclick="closeNav1()" style="cursor:pointer">&#8250;</span>
                <h5 class="subject"> Զամբյուղ </h5>
              </div>
              <ul class="cart-panel">
              <?php if (count($baskets)) :
              foreach ($baskets as $item) : ?>
                  <li class="basket" id="<?= $item->product_id ?>_goods">
                    <div class="basket-wrapper">
                      <div class="title">
                        <img src="<?= base_url('public/images/'.$item->filename) ?>" alt="" class="cart_img">
                        <span><?= $item->name ?></span>
                      </div>
                      <div id="basketCounter">
                        <span class="minus fa fa-minus" style="cursor:pointer" onclick="counting(<?= $item->product_id ?>, -1)"></span>
                        <input type="text" value="<?= $item->count ?>" name="count" class="<?= $item->product_id ?>_count">
                        <span class="plus fa fa-plus" style="cursor:pointer" onclick="counting(<?= $item->product_id ?>, 1)"></span>                   
                        <b class="price" id="<?= $item->product_id ?>_price">֏ <i><?#= $item->price ?></i> AMD</b>     
                      </div>
                    </div>
                    <div class="basket-dismiss"><span style="font-size:15px;cursor:pointer" class="fa fa-close" onclick="delete_basket(this, <?= $item->product_id ?>)"></span></div> 
                  </li>
              <?php endforeach; endif; ?>
              </ul>
              <div class="side-bottom">
                <h5 class="total-subject"> Ընդհանուր: </h5>
                <h5 class="total-price"> ֏ <span>0</span> AMD</h5>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
    <div class="nav-bar">
      <nav>

        <ul class="scrollmenu">

          <li><a href="<?= site_url()?>">Գլխավոր</a></li>
          

          <li><a href="<?= site_url()?>category/1">Փուչիկներով ձևավորումներ</a>

            <ul>

              <li><a href="<?= site_url()?>subcategory/1">Սիրո խոստովանություններ</a></li>

              <li><a href="<?= site_url()?>subcategory/2">Ծննդյան ձևավորումներ</a></li>

              <li><a href="<?= site_url()?>subcategory/3">Մուտքերի, բանկետների ձևավորումներ</a>

              </li>

            </ul>

          </li>

          <li><a href="<?= site_url()?>category/2">Տորթեր</a>

            <ul>

              <li><a href="<?= site_url()?>subcategory/4">Հարսանյաց տորթեր</a></li>

              <li><a href="<?= site_url()?>subcategory/5">Ծննդյան տորթեր</a></li>

              <li><a href="<?= site_url()?>subcategory/6">Ամենորյա տորթեր</a></li>

            </ul>

          </li>

          <li><a href="<?= site_url()?>category/3">Մուլտհերոսներ</a>



          </li>

          <li><a href="<?= site_url()?>category/4">Գիֆթ բոքսեր</a>

            <ul>

              <li><a href="<?= site_url()?>subcategory/7">Ամանորյա գիֆթ բոքսեր</a></li>

              <li><a href="<?= site_url()?>subcategory/8">Երեխաների գիֆթ բոքսեր</a></li>

              <li><a href="<?= site_url()?>subcategory/9">Գիֆթ բոքսեր</a></li>

            </ul>

          </li>

          <li><a href="<?= site_url()?>category/5">Հրավառություն</a>
          </li>

        </ul>

      </nav>
    </div>
  </header>
