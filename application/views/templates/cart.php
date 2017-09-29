<div class="basket-icon" onclick="openNav1()" style="cursor:pointer">
  <img src="<?= base_url() ?>public/images/partners/basket.png" />
  <span class="badge"><?= $total_count ?></span>
</div>
<div id="basketSidenav" class="sidenav">
  <div class="side-header">
    <span class="arrowbtn" onclick="closeNav1()" style="cursor:pointer">&#8250;</span>
    <h5 class="subject"> Basket </h5>
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
            <b class="price">֏ <?#= $item->price?> AMD</b>     
          </div>
        </div>
        <div class="basket-dismiss"><span style="font-size:15px;cursor:pointer" class="fa fa-close" onclick="delete_basket(<?= $item->product_id.','.$item->price.','.$item->count ?>)"></span></div> 
      </li>
  <?php endforeach; endif; ?>
  </ul>
  <div class="side-bottom">
    <h5 class="total-subject"> Total: </h5>
    <h5 class="total-price">֏ <span><?= $total_price = "" ? "0": $total_price ?></span> AMD</h5>
  </div>
</div>