  <section id="slider" style="margin-top:170px;">

    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators slide-lines">
              <?php if (count($carousels)) {
                for ($i = 0; $i< count($carousels); $i++) {
                  echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$i.'" class="'.($i == 0 ? 'active' : '').'" >';
                }
              }
              ?>
            </ol>

            <div class="carousel-inner brdr-radius">             
              <?php if (count($carousels)) :
              foreach ($carousels as $key => $carousel) : ?>
                <div class="carousel-item<?= $key == 0 ? ' active' : ''; ?>">
                  <a href="#"><img src="<?= base_url().'/public/images/'.$carousel->filename ?>" class="d-block w-100" alt="<?= $carousel->alt ?>"></a>
                </div>
              <?php endforeach; endif; ?>
              
            </div>

            <button class="carousel-control-prev carousel-btn display" type="button"
              data-target="#carouselExampleCaptions" data-slide="prev">

              <span class="carousel-control-prev-icon" aria-hidden="true"></span>

              <span class="sr-only">Նախորդը</span>

            </button>

            <button class="carousel-control-next carousel-btn display" type="button"
              data-target="#carouselExampleCaptions" data-slide="next">

              <span class="carousel-control-next-icon" aria-hidden="true"></span>

              <span class="sr-only">Հաջորդը</span>

            </button>

          </div>

        </div>

      </div>

    </div>

  </section>


  <!-- End Slider Section -->



    <div class="container">

  <figure style="margin-top:20px; font-size: 1.3rem;" class="text-center">
  <blockquote class="blockquote">
    <p> Լորեմ Իպսումը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է։</p>
  </blockquote>
  <figcaption class="blockquote-footer">
   Սկսած 1500-ականներից՝ Լորեմ Իպսումը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակ
   ների գիրք ստեղծելու ջանքերի արդյունք է։ Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ՝ մնալով էապես անփոփոխ։ Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման արդյունք
   ում, իսկ ավելի ուշ համակարգչային տպագրության այնպիսի ծրագրերի թողարկման հետևանքով, ինչպիսին է Aldus PageMaker-ը, որը ներառում է  <cite title="Souitle">Լորեմ իպսումի տարատեսակներ</cite>
  </figcaption>
</figure>
</div>




  <!-- Start Small Categories Section -->

  <section class="pdng-all">

    <div class="container">
      <div class="row">
      <?php if (count($productLists)) :
      foreach ($productLists as $list) : ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 all-txt">
          <a href="category/<?=$list->order ?>">
            <div class="category-box">
              <div class="img"><img class="img-fluid" src="<?= base_url().'/public/images/'.$list->image_name ?>" /></div>
                            <div class="text" style="margin-top:5px;"><?= $list->name ?></div>

            </div>
          </a>
        </div>
      <?php endforeach; endif; ?>
      </div>
    </div>

  </section>

  <!-- End Small Categories Section -->
<div class="container">

<div class="m-4" style="font-family: Dejavue;">
  <figure style="margin-top:20px; font-size: 1.3rem;" class="text-center">
        <blockquote class="blockquote" >
            <p>TՍկսած 1500-ականներից՝ Լորեմ Իպսումը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակ
   ների գիրք ստեղծելու ջանքերի արդյունք է։ Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ՝ մնալով էապես անփոփոխ։ Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման արդյունք
   ում, իսկ ավելի ուշ համակարգչային տպագրության այնպիսի ծրագրերի թողարկման հետևանքով, ինչպիսին է Aldus PageMaker-ը, որը ներառում է  <cite title="Souitle">Լորեմ իպսումի տարատեսակներ</cite></p>
        </blockquote>
        <figcaption class="blockquote-footer">by <cite>Սա և նա</cite></figcaption>
    </figure>
</div>
</div>


  <!-- Start Categories Section -->

  <section class="pdng-all">
    <div class="container">
      <div class="row">
        <div class="col-md-12 p-0">
          <ul class="nav nav-pills tabs-heading mb-3 pl-3 pr-3" id="pills-tab" role="tablist">
          <?php if (count($productLists)) :
          foreach ($productLists as $key => $list) : ?>
            <li class="nav-item" role="presentation">
              <a class="nav-link head2<?= $key == 0 ? ' active' : ''; ?>" id="pills-home-<?= $key ?>" data-toggle="pill" href="#pills-<?= $key ?>" role="tab"
                aria-controls="pills-home" aria-selected="true"><?= strtoupper($list->name) ?></a>
            </li>
          <?php endforeach; endif; ?>
          </ul>
          <div class="tab-content" id="pills-tabContent">
          <?php if (count($productLists)) :
          foreach ($productLists as $key => $list) : ?>
            <div class="tab-pane fade<?= $key == 0 ? ' show active' : ''; ?>" id="pills-<?= $key ?>" role="tabpanel" aria-labelledby="pills-<?= $key ?>-tab">
              <div class="container">
                <div class="row">
                <?php if (count($products)) :                  
                foreach ($products as $index => $product) : 
                  if ($product->type == $list->id AND $product->first==1) : ?>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="mt-10">
                      <div id="card_<?= $product->id ?>" class="card">
                        <a href="single/<?= $product->id ?>"><img src="<?= base_url().'/public/images/'.$product->filename ?>" id="product_image" class="card-img-top"
                            alt="<?= $product->filename ?>"></a>
                        <div class="card-body category-card pdng-full">
                          <p><a href="single/<?= $product->id ?>" class="product_name"><?= $product->name ?></a></p>
                          <div class="card-detail ">
                            <span class="card-title first-box product_price" id=<?= $product->price ?>>֏ <?= $product->price ?> AMD</span>
                            <span class="second-box">
                              <a class="basket-clr" onclick="put_basket(<?= $product->id ?>, 1)"><img src="<?= base_url().'/public/images/bas.png' ?>" /></a>
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
  
  
    <div class="container">

  <figure style="margin-top:20px; font-size: 1.3rem;" class="text-center">
  <blockquote class="blockquote">
    <p> Հատուկ առաջարկ  ՍԱԼՅՈՒՏԻՑ</p>
  </blockquote>
  <figcaption class="blockquote-footer">
   Սկսած 1500-ականներից՝ Լորեմ Իպսումը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակ
   ների գիրք ստեղծելու ջանքերի արդյունք է։ Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ՝ մնալով էապես անփոփոխ։ Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման արդյունք
   ում, իսկ ավելի ուշ համակարգչային տպագրության այնպիսի ծրագրերի թողարկման հետևանքով, ինչպիսին է Aldus PageMaker-ը, որը ներառում է  <cite title="Souitle">Լորեմ իպսումի տարատեսակներ</cite>
  </figcaption>
</figure>
</div>




  <!-- Start Ads Section -->

  <section class="">
    <div class="container">
      <div class="row">
      <?php if (count($bestGoods)) :
      foreach ($bestGoods as $key => $good) : 
        if ($good->kind == 1) : ?>
        <div class="col-md-6 col-12">
          <div class="ad-imgs mt-10"><img class="w-100" src="<?= base_url().'/public/images/'.$good->filename ?>" />
            <div class="choose-btn">
              <button type="button" class="">Ընտրեք նվերը</button>
            </div>
          </div>
        </div>
      <?php endif; endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- End Ads Section -->

  <!-- Start Categories Section 

  <section class="pdng-all">
    <div class="container">
      <div class="row">
        <div class="col-md-12 p-0">
          <ul class="nav nav-pills tabs-heading mb-3 pl-3 pr-3" id="pills-tab" role="tablist">
          <?/*php if (count($productLists)) :
          foreach ($productLists as $key => $list) : ?>
            <li class="nav-item" role="presentation">
              <a class="nav-link head2<?= $key == 0 ? ' active' : ''; ?>" id="pill-home-<?= $key ?>" data-toggle="pill" href="#pill-<?= $key ?>" role="tab"
                aria-controls="pills-home" aria-selected="true"><?= strtoupper($list->name) ?></a>
            </li>
          <?php/* endforeach; endif; ?>
          </ul>
          <div class="tab-content" id="pills-tabContent">
          <?php if (count($productLists)) :
          foreach ($productLists as $key => $list) : ?>
            <div class="tab-pane fade<?= $key == 0 ? ' show active' : ''; ?>" id="pill-<?= $key ?>" role="tabpanel" aria-labelledby="pill-<?= $key ?>-tab">
              <div class="container">
                <div class="row">
                <?php if (count($products)) :                  
                foreach ($products as $index => $product) : 
                  if ($product->type == $list->id) : ?>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="mt-10">
                      <div id="card_<?= $product->id ?>" class="card">
                        <a href="single/<?= $product->id ?>"><img src="<?= base_url().'/public/images/'.$product->filename ?>" id="product_image" class="card-img-top"
                            alt="<?= $product->filename ?>"></a>
                        <div class="card-body category-card pdng-full">
                          <p><a href="single/<?= $product->id ?>" class="product_name"><?= $product->name ?></a></p>
                          <div class="card-detail ">
                            <span class="card-title first-box product_price" id=<?= $product->price ?>>$<?= $product->price ?> AMD</span>
                            <span class="second-box">
                              <a class="basket-clr" onclick="put_basket(<?= $product->id ?>, 1)"><img src="<?= base_url().'/public/images/bas.png' ?>" /></a>
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
          <?php endforeach; endif;*/ ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Categories Section -->

  <!-- Start Ads Section -->

  <section class="">
    <div class="container">
      <div class="row">
      <?php if (count($bestGoods)) :
      foreach ($bestGoods as $key => $good) : 
        if ($good->kind == 2) : ?>
        <div class="col-md-6 col-12">
          <div class="ad-imgs mt-10"><img class="w-100" src="<?= base_url().'/public/images/'.$good->filename; ?>" />
            <div class="choose-btn2">
              <button type="button" class="">Choose a gift</button>
            </div>
          </div>
        </div>
      <?php endif; endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- End Ads Section -->

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
