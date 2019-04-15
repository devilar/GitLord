<?php echo $header; ?>
<div class="container">
  <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="category-con <?php echo $class; ?>"><?php echo $content_top; ?>
      <h1><?php echo $heading_title; ?></h1> 



<?
if (preg_match('~\/stellagi\/stellagi-polochnye-i-arhivnie\/.*~', $_SERVER['REQUEST_URI'])) { ?>
<a class="calc-button-enter" href="/kalkulyator-stellazhej-stf-stfu">Калькулятор стеллажей</a>
<style>h1:first-child {margin-top: 0;width: 70%;display: inline-block;}</style>
<?}?>


      


         <?php if ($categories) { ?>
         <a class="cat_filter_btn hide-cf" href="#">Скрыть виды продукции</a>
      <div class="cat_filter">
      
      <div class="row">
          <ul>
            <?php foreach ($categories as $category) { ?>

            <li class="col-xs-6 col-sm-6 col-md-4 col-lg-3 flex-h-stretch">
            <a href="<?php echo $category['href']; ?>" title="<?php echo $category['name']; ?>">
            <img src="<?php echo $category['thumb']; ?>" alt="<?php echo $category['name']; ?>" title="<?php echo $category['name']; ?>">
            <span class="pod_cat_name">
            <?php echo $category['name']; ?>
            </span>
            </a>
            </li>
            <?php } ?>
          </ul>
      </div>
    </div>
      <?php } ?>

      <?php if ($products) { ?>
      <p><a href="<?php echo $compare; ?>" id="compare-total"><?php echo $text_compare; ?></a></p>
      <div class="row">
        <div class="col-md-3">
          <div class="btn-group hidden-xs">
            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="<?php echo $button_list; ?>"><i class="fa fa-th-list"></i></button>
            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="<?php echo $button_grid; ?>"><i class="fa fa-th"></i></button>
          </div>
        </div>
        <div class="col-md-2 text-right">
          <label class="control-label" for="input-sort"><?php echo $text_sort; ?></label>
        </div>
        <div class="col-md-3 text-right">
          <select id="input-sort" class="form-control" onchange="location = this.value;">
            <?php foreach ($sorts as $sorts) { ?>
            <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
            <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
            <?php } else { ?>
            <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
            <?php } ?>
            <?php } ?>
          </select>
        </div>
        <div class="col-md-2 text-right">
          <label class="control-label" for="input-limit"><?php echo $text_limit; ?></label>
        </div>
        <div class="col-md-2 text-right">
          <select id="input-limit" class="form-control" onchange="location = this.value;">
            <?php foreach ($limits as $limits) { ?>
            <?php if ($limits['value'] == $limit) { ?>
            <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
            <?php } else { ?>
            <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
            <?php } ?>
            <?php } ?>
          </select>
        </div>
      </div>
      <br />
      <div class="row">
        <?php foreach ($products as $product) { ?>
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image"><a href="<?php echo $product['href']; ?>" title="<?php echo $product['name']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
            <div class="text_info">
              <div class="caption">
              <a href="<?php echo $product['href']; ?>" title="<?php echo $product['name']; ?>">
                <div class="h4"><?php echo $product['name']; ?></div>
                <!--<p class="product_code">Код товара: <?php echo $product['sku']; ?></p>-->
              </a>

              <!-- Выводим характеристики -->

            <? if($_SERVER['REQUEST_URI'] == "/stellagi/stellazhi-ms/"){ ?>


            <div class="tech-pro">

            <?php if($product['attribute_groups']) { ?>
            <?php foreach($product['attribute_groups'] as $attribute_group) { ?>
            <? $limiterpro = 0; ?>
            <?php foreach($attribute_group['attribute'] as $attribute) { ?>
            <?$limiterpro++;if($limiterpro >=4){break;} ?>
                    <div class="tech-item">
                    <span><?php echo $attribute['name']; ?>: </span>
                    <span><?php echo $attribute['text']; ?></span>
                    </div>

            <?php } ?>
            <?php } ?>
            <?php } ?>
            </div>
            <?php } ?>
        




              <!-- FIN -->



                <?php if ($product['price'] !=0) { ?>
                <p class="price">
                  <?php if (!$product['special']) { ?>
                  <?php echo $product['price']; ?>
                  <?php } else { ?>
                  <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
                  <?php } ?>
                  <?php if ($product['tax']) { ?>
                  <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                  <?php } ?>
                </p>
                <?php } ?>
                <p class="desc">
                  <?php //echo $product['description']; ?>
                  <button type="button" class="mez-btn mez-btn-category" data-toggle="modal" data-target="#myModal" id="form-btn" >Купить в 1 клик</button>
                  <button type="button" id="button-cart" onclick="cart.add('<?php echo $product['product_id']; ?>', '<?php echo $product['minimum']; ?>');" class="mez-btn mez-btn-category"> <?php echo $button_cart; ?></button>
                   <button type="button" data-toggle="tooltip" title="<?php echo $button_compare; ?>" style="display: inline-block;margin-top:3px;" onclick="compare.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-exchange"></i></button>                  
                </p>
                <?php if ($product['rating']) { ?>
                <div class="rating">
                  <?php for ($i = 1; $i <= 5; $i++) { ?>
                  <?php if ($product['rating'] < $i) { ?>
                  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                  <?php } else { ?>
                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                  <?php } ?>
                  <?php } ?>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="row">
        <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
        <div class="col-sm-6 text-right"><?php echo $results; ?></div>
      </div>
      <?php } ?>

      <?php if ($thumb || $description) { ?>
      <div class="row">
        <?php if ($description) { ?>
        <div class="col-sm-12">
         <?php if (!$categories) { ?>
        <?php if ($thumb && !isset($_GET['page'])) { ?>
        <img src="<?php echo $thumb; ?>" alt="<?php echo $heading_title; ?>" title="<?php echo $heading_title; ?>" class="img-thumbnail" />
        <?php } ?>
        <?php } ?>
        
		<?php if(!isset($_GET['page'])) { ?>
			
        <?php 

            $what_to = array('<strong>', '</strong>');
            $replace_to = array('<span style="font-weight:bold;">', '</span>');

            $description = str_replace($what_to, $replace_to, $description);

          echo $description; ?>
        
        <?php } ?>

        </div>
        <?php } ?>
      </div>
      <hr>
      <?php } ?>      
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<script>
jQuery(document).ready(function(){

  jQuery('button.mez-btn-category').click(function(){
    jQuery('input#form-product_id').val(jQuery(this).attr('data-name'));
  });


  jQuery('a.cat_filter_btn').click(function(event){

    event.preventDefault();
    if(jQuery(this).hasClass('hide-cf')){
      jQuery(".cat_filter").fadeOut();
      jQuery(".cat_filter_btn").text("Показать виды продукции");
      jQuery(this).removeClass("hide-cf"); 
    }else{
      jQuery(".cat_filter").fadeIn();
      jQuery(".cat_filter_btn").text("Скрыть виды продукции");
      jQuery(this).addClass("hide-cf"); 
    }  
   



  });

  var mh = 0;
   $(".product-thumb .caption").each(function () {
       var h_block = parseInt($(this).height());
       if(h_block > mh) {
          mh = h_block;
       };
   });
   $(".product-thumb .caption").height(mh);



});

</script>
<div class="container">
<div class="h2">Наши поставщики</div>

<div class="postav-block"><a href="/image/postav/1.png"><img src="/image/postav/1.png" /></a><a href="/image/postav/2.png"><img src="/image/postav/2.png" /></a><a href="/image/postav/3.png"><img src="/image/postav/3.png" /></a><a href="/image/postav/4.png"><img src="/image/postav/4.png" /></a><a href="/image/postav/5.png"><img src="/image/postav/5.png" /></a><a href="/image/postav/6.png"><img src="/image/postav/6.png" /></a><a href="/image/postav/7.png"><img src="/image/postav/7.png" /></a><a href="/image/postav/8.png"><img src="/image/postav/8.png" /></a><a href="/image/postav/9.png"><img src="/image/postav/9.png" /></a></div>
</div>
<?php echo $footer; ?>
