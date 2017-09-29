

    <div class="container" style="margin-top: 150px;">
      <div class="row">
        <div class="col-md-12 col-12">
          <a href="<?= site_url()?>">Գլխավոր</a> > 
          <a href="#"><b>
          <?php
            foreach($productLists as $list) {
              if ($list->id == $id AND $list->first = 1) {echo $list->name;}
            }
          ?>
          </b></a>
        </div>
      </div>
    </div>
<!-- Start Categories Section -->

<section class="pdng-all">
<div class="container">
  <div class="row">
    <div class="col-md-12 p-0">
      <div class="tab-content">
      <?php if (count($productLists)) :
      foreach ($productLists as $key => $list) : ?>
        <div class="tab-pane fade<?= $list->id == $id ? ' show active' : ''; ?>" id="pills-<?= $key ?>" role="tabpanel" aria-labelledby="pills-<?= $key ?>-tab">
          <div class="container">
            <div class="row">
            <?php if (count($products)) :                  
            foreach ($products as $index => $product) : 
              if ($product->type == $list->id) : ?>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="mt-10">
                  <div id="card_<?= $product->id ?>" class="card">
                    <a href="<?= base_url()?>single/<?= $product->id ?>"><img src="<?= base_url().'public/images/'.$product->filename ?>" id="product_image" class="card-img-top"
                        alt="<?= $product->filename ?>"></a>
                    <div class="card-body category-card pdng-full">
                      <p><a href="<?= base_url()?>single/<?= $product->id ?>" class="product_name"><?= $product->name ?></a></p>
                      <div class="card-detail ">
                        <span class="card-title first-box product_price" id="<?= $product->price ?>">֏ <?= $product->price ?> AMD</span>
                        <span class="second-box">
                          <a class="basket-clr" onclick="put_basket(<?= $product->id ?>, 1)"><img src="<?= base_url().'public/images/bas.png' ?>" /></a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; endforeach; endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; endif; ?>
      </div>
    </div>
  </div>
</div>
</section>

<!-- End Categories Section -->

<!-- Start Partners Section -->

<section class="pdng-all">

<div class="container">

  <div class="row">

    <div class="col-md-12">

      <ul class="nav nav-pills tabs-heading mb-3" id="pills-tab" role="tablist">

        <li class="nav-item" role="presentation">

          <a class="nav-link head2 active" id="pills-home-tab" data-toggle="pill" href="#our-partners" role="tab"
            aria-controls="pills-home" aria-selected="true">OUR PARTNERS</a>

        </li>



      </ul>

      <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="our-partners" role="tabpanel" aria-labelledby="pills-home-tab">

          <div class="">

            <ul id="rcbrand2">

              <li><img src="<?= base_url().'/public/images/partners/8ElR1WUkFcFzQWvb.png' ?>" /></li>

              <li><img src="<?= base_url().'/public/images/partners/mankan.png' ?>" /></li>

              <li><img src="<?= base_url().'/public/images/partners/Moms little bakery.png' ?>" /></li>

              <li><img src="<?= base_url().'/public/images/partners/r5AM8r6RPigUfFRp.png' ?>" /></li>

              <li><img src="<?= base_url().'/public/images/partners/Reyma.png' ?>" /></li>

              <li><img src="<?= base_url().'/public/images/partners/vAGwLS8Y1lLpP9LK.png' ?>" /></li>

            </ul>

          </div>

        </div>


      </div>



    </div>

  </div>

</div>

</section>

<!-- End of Partners Section -->
