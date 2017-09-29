
  <!-- Start FOOTER Section -->

  <footer class="section pt-60">

    <div class="container">

      <div class="row">

        <div class="col-md-3 col-sm-6 col-xs-12 we-are">

          <h2>Ընկերության մասին</h2>

          <div class="we-are-menu">

            <ul>

              <li><a href="#">Մեր մասին</a></li>

              <li><a href="#">Salooote</a></li>

              <li><a href="#">Բլոգ</a></li>

              <li><a href="#">Կորպորատիվ առաջարկ</a></li>

            </ul>

          </div>

        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 we-are logo">

          <h2>Առաքում</h2>

          <div class="we-are-menu">

            <ul>

              <li><a href="#">Առաքման արժեք</a></li>

            </ul>

          </div>

          <div class="delivery-pickup">

            <img src="<?= base_url() ?>public/images/13.png" alt="">

            <img src="<?= base_url() ?>public/images/14.png" alt="">

            <img src="<?= base_url() ?>public/images/15.png" alt="">

            <img src="<?= base_url() ?>public/images/17.png" alt="Idram">

            <img src="<?= base_url() ?>public/images/19.png" alt="american express">

            <img src="<?= base_url() ?>public/images/18.png" alt="telcell">

          </div>

        </div>

        <div class="we-are-menu we-are col-md-3 col-sm-6 col-xs-12">

          <h2>Help</h2>

          <ul>

            <li><a href="#">FAQ's</a></li>



          </ul>

        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">

          <div class="get-tch">

            <h2>Գրեք մեզ</h2>

            <p>salooote.am</p>

            <ul>

              <div class="footer_social">

                <a href="#" target="_blank">

                  <img src="<?= base_url() ?>public/images/7.png" alt="">

                </a>

                <a href="#" target="_blank">

                  <img src="<?= base_url() ?>public/images/8.png" alt="">

                </a>

                <a href="#" target="_blank">

                  <img src="<?= base_url() ?>public/images/9.png" alt="">

                </a>

                <a href="#" target="_blank">

                  <img src="<?= base_url() ?>public/images/10.png" alt="">

                </a>

                <a href="#" target="_blank">

                  <img src="<?= base_url() ?>public/images/11.png" alt="">

                </a>

                <a href="#" target="_blank">

                  <img src="<?= base_url() ?>public/images/12.png" alt="">

                </a>

              </div>

              <li>Yerevanyan 20, Martuni, Armenia</li>

              <li><a href="callto:Tel: +374337277170>Tel: +37460727717</a></li>

              <li><a href="mailto:info@salooote.am">email: info@salooote.am</a></li>

              <li><a href="https://salooote.am/" target="_blank">https://salooote.am/</a></li>

            </ul>

          </div>

        </div>

      </div>

    </div>

    <div class="copy-div">

      <div class="container">

        <div class="row">

          <div class="col-12 copy-txt text-center">

            <span>copyright © 2021 salooote.am. Բոլոր իրավունքները պաշտպանված են.</span>

            <a href="#">Privacy Policy</a>

            <a href="#">Terms of service</a>

          </div>

        </div>

      </div>

    </div>

  </footer>
  <!-- End of FOOTER Section -->
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="<?= base_url() ?>public/js/jquery-slim.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>public/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>public/js/jquery.exzoom.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>public/js/imagesloaded.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>public/js/handleCounter.js" type="text/javascript"></script> 

  <script type="text/javascript">
    //localStorage.setItem('basket_obj',basket);
    $(window).load(function () {
      $("#rcbrand1").rcbrand({
        visibleItems: 5,
        itemsToScroll: 5,
        animationSpeed: 200,
        infinite: true,
        navigationTargetSelector: null,
        autoPlay: {
          enable: false,
          interval: 5000,
          pauseOnHover: true
        },
        responsiveBreakpoints: {
          portrait: {
            changePoint: 480,
            visibleItems: 1,
            itemsToScroll: 1
          },
          landscape: {
            changePoint: 640,
            visibleItems: 2,
            itemsToScroll: 2
          },
          tablet: {
            changePoint: 768,
            visibleItems: 3,
            itemsToScroll: 3
          }
        }
      });
      $("#rcbrand2").rcbrand({
        visibleItems: 6,
        itemsToScroll: 1,
        autoPlay: {
          enable: true,
          interval: 3000,
          pauseOnHover: true
        }
      });
      $("#rcbrand3").rcbrand({
        infinite: false
      });
      var badge = 0;
      var basket = localStorage.getItem('products');
      if (String(basket) != 'null') {
        var basket = JSON.parse(basket);
        for (let i = 0; i < basket.length; i++) {
          badge += basket[i]['count'];
        }
      }      
      $('.basket-icon span').text(badge == 0 ? '':badge);
    });
    $(window).unload(function() {
      //localStorage.removeItem('products');
    })
    $(function ($) {
			var options = {
			minimum: 1,
			maximize: 100,
			onChange: valChanged,
			onMinimum: function (e) {
			},
			onMaximize: function (e) {
			}
			}
			$('#handleCounter').handleCounter(options)
			$('#handleCounter2').handleCounter(options)
			$('#handleCounter3').handleCounter({ maximize: 100 })
    })
    function valChanged(d) {
    //            console.log(d)
    }
    $('.container').imagesLoaded(function() {
      if($("#exzoom").length > 0) {
        $("#exzoom").exzoom({
          
            "navWidth": 60,//列表每个宽度,该版本中请把宽高填写成一样
            "navHeight": 60,//列表每个高度,该版本中请把宽高填写成一样
            autoPlay: false,
        });
        $("#exzoom").removeClass('hidden')
      }
    });
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    function openNav1() {
      var basket = JSON.parse(localStorage.getItem('products'));
      var basket_div = '<div class="side-header"><span class="arrowbtn" onclick="closeNav1()" style="cursor:pointer">&#8250;</span><h5 class="subject"> Զամբյուղ </h5></div><ul class="cart-panel">';
      var total_price = 0;
      if (basket.length > 0) {
        var count = 0;        
        for (let i = 0; i < basket.length; i++) {
          total_price += basket[i]["count"] * basket[i]["price"];

          basket_div += '<li class="basket" id="'+basket[i]["id"]+'_goods">';
          basket_div += '<div class="basket-wrapper"><div class="title">';
          basket_div += '<img src="<?= base_url('public/images') ?>/'+basket[i]["image"]+'" alt="" class="cart_img">';
          basket_div += '<span>'+basket[i]["name"]+'</span>';
          basket_div += '</div><div id="basketCounter"><span class="minus fa fa-minus" style="cursor:pointer" onclick="counting('+basket[i]["id"]+', -1)"></span>';
          basket_div += '<input type="text" value="'+ basket[i]["count"]+'" name="count" class="'+basket[i]["id"]+'_count">';
          basket_div += '<span class="plus fa fa-plus" style="cursor:pointer" onclick="counting('+basket[i]["id"]+', 1)"></span>';
          basket_div += '<b class="price" id="'+basket[i]["id"]+'_price">֏ <i>'+basket[i]["price"]+'</i> AMD</b>';
          basket_div += '</div></div><div class="basket-dismiss"><span style="font-size:15px;cursor:pointer" class="fa fa-close" onclick="delete_basket(this, '+basket[i]["id"]+')"></span></div>';
          basket_div += '</li>';
        }
      }
      basket_div += '</ul><div class="side-bottom"><h5 class="total-subject"> Ընդհանուր: </h5><h5 class="total-price"> ֏ <span>'+total_price.toFixed(2)+'</span> AMD</h5>';
      basket_div += '</div>';
      $('div#basketSidenav').html(basket_div);
      document.getElementById("basketShadow").style.display = 'block';
      document.getElementById("basketSidenav").style.width = "300px";  

      // $.post("<?= site_url('home/index') ?>",
      // {
      //   basket: 'on',
      // },
      // function(data){
      //   if(data != "") {     
      //     $('div#basket-part').html(data);
      //     document.getElementById("basketShadow").style.display = 'block';
      //     document.getElementById("basketSidenav").style.width = "300px";
      //   }
      // });           
    }
    function closeNav1() {
      document.getElementById("basketShadow").style.display = 'none';
      document.getElementById("basketSidenav").style.width = "0";
    }
    function put_basket(id, num) {

      var badge = Number($('.basket-icon span').text());
      $('.basket-icon span').text(badge + 1);
      var name = $('#card_'+id+' .product_name').html();
      var price = $('#card_'+id+' .product_price').attr('id');
      var image = $('#card_'+id+' #product_image').attr('alt');
      const item = {'id':id, 'name':name, 'price':price, 'image':image, 'count':1};
      add_storage(id, 1, item);
    }
    function add_storage(id, count, item=null) {
      var basket = localStorage.getItem('products');
      if (String(basket) != 'null') {
        var basket = JSON.parse(basket);
        var flag = 1;
        for (let i = 0; i < basket.length; i++) {
          if(basket[i]['id'] == id) {
            if(count == 0) {
              basket.splice(i, 1);
              flag = 0; break;
            } else {
              basket[i]['count'] += count;
              flag = 0; break;
            } 
          }
        }
        if (flag == 1) {
          basket.push(item);
        }
        localStorage.setItem('products', JSON.stringify(basket)); 
      } else {
        var items = [];
        items.push(item)        
        localStorage.setItem('products', JSON.stringify(items)); 
      }
    }
    function put_baskets(id, name, price, filename) {
      var num = Number($('.count').val());
      var badge = Number($('.basket-icon span').text());
      $('.basket-icon span').text(badge + num);
      const item = {id:id, name:name, price:price, image:filename, count:num};

      add_storage(id, num, item);
    } 
    function counting(id, con) {
      var num = $('.'+id+'_count').val();
      var count = Number(num) + Number(con);     
      $('.'+id+'_count').val(count); 
      var price = Number($('#'+id+'_price i').text()); 
      var total_price = Number($('.total-price span').text());
      total_price = total_price + price * Number(con)
      $('.total-price span').text(total_price.toFixed(2))    
      var badge = Number($('.basket-icon span').text());
      $('.basket-icon span').text(badge+Number(con)==0 ? '':badge+Number(con));     
      if(count != 0) {
        add_storage(id, Number(con)); 
      } else {
        $('li#'+id+'_goods').remove();
        add_storage(id, 0); 
      }
         
      // $.post("<?= site_url('home/count_basket') ?>",
      // {
      //   product_id: id,
      //   count: Number(con),
      // },
      // function(data){
      //   if(data != "") {
      //     openNav1();
      //   }
      // });      
    } 
    function delete_basket(item, product_id) {      
      var price = Number($('#'+product_id+'_price i').text()); 
      var count = Number($('.'+product_id+'_count').val());
      var total_price = Number($('.total-price span').text());
      total_price = total_price - price * count
      $('.total-price span').text(total_price.toFixed(2))  
      var badge = Number($('.basket-icon span').text());
      $('.basket-icon span').text(badge-count == 0 ? '': badge-count);    
      $(item).parents('li').remove();
      add_storage(product_id, 0);            
    }  
  </script>
  <script type="text/javascript" src="<?= base_url() ?>public/js/jquery.rcbrand.js"></script>

</body>

</html>