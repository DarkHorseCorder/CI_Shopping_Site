  <!-- start detail Section -->

  <section style="margin-top:170px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0">
              <li class="breadcrumb-item"><a href="<?= site_url(''); ?>">Գլխավոր</a></li>
              <li class="breadcrumb-item"><a href="<?= site_url('category/'.$product->type); ?>">Փուչիկներ</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $product->name; ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="exzoom hidden" id="exzoom" style="max-width:100% !important;">
            <div class="exzoom_img_box" style="max-width:100% !important;">
              <ul class='exzoom_img_ul'>
              <?php if (count($products)) :
              foreach ($img as $item) : 
              if($item->ID_ == $product->id) : ?>
                <li><img src="<?= base_url().'/public/images/'.$item->img ?>" /></li>
              <?php endif; endforeach; endif; ?>
              </ul>
            </div>
            <div class="exzoom_nav"></div>
            <p class="exzoom_btn">
              <a href="javascript:void(0);" class="exzoom_prev_btn">
                < </a>
                  <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
            </p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="">
            <div class="name-info">
              <h2><?= $product->name ?> </h2>
              <p><?= $product->comment ?> </p>
              <div class="card-detail w-100 float-left">
                <span class="card-title first-box">֏<?= $product->price ?> AMD</span>
              </div>

              <div class="handle-counter" id="handleCounter">
                <button class="counter-minus btn btn-primary">-</button>
                <input type="text" value="1" name="count" class="count">
                <button class="counter-plus btn btn-primary">+</button>
              </div>
            </div>
          </div>

          <div class="w-100 float-left mt-4">
            <div class="w-60 float-left">
              <button type="button" class="basket-btn" onclick="put_baskets('<?= $product->id ?>', '<?= $product->name ?>', '<?= $product->price ?>','<?= $product->filename?>')">Ավելացնել զամբյուղ</button>
              <a href="#">
                <span class="heart-icon"><img src="<?= base_url().'public/images/partners/heart.png' ?>" /></span>
              </a>
            </div>

            <div class="w-25 float-left">
              <div class="purches-sm">
             <p><img style="width:25px" src="<?= base_url().'public/images/7.png' ?>" />
                  <span><img style="width:25px" src="<?= base_url().'public/images/11.png' ?>" /></span>
                </p>
              </div>
            </div>
          </div>

          <div class="w-100 float-left">
            <div class="accordion" id="accordionExample">
              <div class="card bg-none brdr-0">
                <div class="card-header accordion bg-none pl-0" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                      data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Տեսնել ավելին<span class="float-right"><img src="<?= base_url().'public/images/partners/arrow.png' ?>" /></span>

                    </button>
                  </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                  data-parent="#accordionExample">

                  <div class="card-body pl-3">
                    <?= $product->text ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- End detail Section -->
  <section class="pdng-all">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="text-center related-heading">
                    <h2>Այլ ծառայություններ</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

      <div class="row">
      <?php
      if(count($products)) :
        $num = 0;
        foreach($products as $item) :
          if($item->type == $product->type) :
            $num++;
      ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="mt-10">
            <div id="card_<?= $item->id ?>" class="card">
              <a href="<?=base_url().'single/'.($item->id)?>"><img src="<?= base_url().'public/images/'.$item->filename ?>" id="product_image" class="card-img-top" alt="<?= $item->filename ?>"></a>
              <div class="card-body category-card pdng-full">
                <p><a href="<?=base_url().'single/'.($item->id)?>" class="product_name"><?= $item->name ?></a></p>
                <div class="card-detail ">
                  <span class="card-title first-box product_price" id=<?= $item->price ?>>֏<?= $item->price?> AMD</span>
                  <span class="second-box">
                    <a onclick="put_basket(<?= $item->id ?>, 1)" class="basket-clr"><img src="<?= base_url().'/public/images/bas.png' ?>" /></a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php 
          if ($num == 4) break;
          endif; 
        endforeach; 
      endif;
      ?>
      </div>
    </div>
  </section>

  <!-- Start FOOTER Section -->