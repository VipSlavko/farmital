<?php
/*
Template Name: Catalog
*/ 
?>
<?php
$filters_cat = get_term_by("slug", "filters", "product_cat");
$cat_args = array(
  'orderby'    => 'ID',
  'order'      => 'ASC',
  'hide_empty' => false,
  'parent'     => $filters_cat->term_id, // set your parent term id
  'taxonomy' => 'product_cat'
);
$filters = get_terms($cat_args);
$name = $filters_cat->name;
$filter_cat = array();
$min = (int)get_field("min-price"); 
$max = (int)get_field("max-price");
$i = 0;
foreach ($_GET as $param) {
  if((isset($_GET["min-price"]) && $param == $_GET["min-price"])) {
    $min = $param;
    continue;
  }
  if((isset($_GET["max-price"]) && $param == $_GET["max-price"])) {
    $max = $param;
    continue;
  }
  if(isset($_GET['all-page'])) {
    continue;
  }
  if((isset($_GET["current-page"]) && $param == $_GET["current-page"])) {
    continue;
  }
  $filter_cat[$i] = $param;
  $i++;
}
if($min < 0) {
  $min = 0;
}
if($max <= $min) {
  $max = $min + 1;
}
?>
<?php echo get_header(); ?>
      <div class="main-filter">
          <div class="filter-head mobile">
            <img src="<?php echo get_path("/assets/img/option.svg") ?>" alt="">
            <h2 class="h1-filter"><?php echo $name; ?></h2>
          </div>
        <div class="filter">
          <div class="filter-head">
            <h1 class="h1-filter"><?php echo $name; ?></h1>
          </div>
            <form action="<?php echo esc_url(home_url("catalog")); ?>" method="get">
            <div class="price-catalog">
              <h2 class="h2-price">Ціна</h2>
              <div class="filter-price">
                <input class="price-num" type="number" id="min-input" name="min-price" value="<?php echo $min; ?>">
                <span class="price-line"></span>
                <input class="price-num" type="number" id="max-input" name="max-price" value="<?php echo $max; ?>">
              </div>
              <div class="ranges">
                <input type="range" name="min" id="min-range" value="<?php echo $min; ?>">
                <input type="range" name="max" id="max-range" min="<?php echo $min ?>" value="<?php echo $max; ?>">
              </div>
            </div>
            <?php
            $i = 0;
            foreach($filters as $filter_item) { 
              $cat_args = array(
                'orderby'    => 'ID',
                'order'      => 'ASC',
                'hide_empty' => false,
                'parent'     => $filter_item->term_id, // set your parent term id
                'taxonomy' => 'product_cat'
              );
              $filter = get_terms($cat_args);
              ?>
            <div class="form-release"> 
              <h3 class="h3-release"><?php echo $filter_item->name; ?></h3>
              <table> 
                <?php
                foreach($filter as $item) {
                  ?>
                <tr>
                  <td>
                    <label class="checkbox-text" for="<?php echo $i; ?>">
                    <input class="checkbox-catalog" <?php if(isset($_GET[$item->slug])) {echo 'checked'; } ?> value="<?php echo $item->slug ?>" type="checkbox" name="<?php echo $item->slug; ?>" id="<?php echo $i; ?>">
                    <?php echo $item->name; ?>
                  </label>
                  </td>
                </tr>
                <?php
                $i++; 
                } ?>
              </table>
            </div>
            <?php
          } ?>
            <div class="buttons-catalog">
              <input class="submit-catalog" type="submit" value="застосувати">
              <a href="<?php echo esc_url(home_url("/catalog")) ?>" class="def-catalog">скинути</a>
            </div>
            </form>
        </div>
        <div class="filter mobile">
          <div class="filter-content">
            <div class="filter-head">
              <h2 class="h1-filter"><?php echo $name; ?></h2>
            </div>
            <form action="<?php echo esc_url(home_url("catalog")); ?>" method="get">
            <div class="price-catalog">
              <div class="filter-header">
                <h2 class="h2-price">Ціна</h2>
                <img src="<?php echo get_path("/assets/img/arrow2.svg"); ?>">
              </div>
              <div class="filter-body">
                <div class="filter-price">
                  <input class="price-num" type="number" id="min-input" name="min-price" value="<?php echo $min; ?>">
                  <span class="price-line">-</span>
                  <input class="price-num" type="number" id="max-input" name="max-price" value="<?php echo $max; ?>">
                </div>
                <div class="ranges">
                  <input type="range" name="min" id="min-range" value="<?php echo $min; ?>">
                  <input type="range" name="max" id="max-range" min="<?php echo $min ?>" value="<?php echo $max; ?>">
                </div>
              </div>
            </div>
            <?php
            $i = $i + 1;
            foreach($filters as $filter_item) { 
              $cat_args = array(
                'orderby'    => 'ID',
                'order'      => 'ASC',
                'hide_empty' => false,
                'parent'     => $filter_item->term_id, // set your parent term id
                'taxonomy' => 'product_cat'
              );
              $filter = get_terms($cat_args);
              ?>
            <div class="form-release"> 
              <div class="filter-header">
                <h3 class="h3-release"><?php echo $filter_item->name; ?></h3>
                <img src="<?php echo get_path("/assets/img/arrow2.svg"); ?>">
              </div>
              <div class="filter-body">
                <table>
                  <?php
                  foreach($filter as $item) {
                    ?>
                  <tr>
                    <td>
                      <label class="checkbox-text" for="<?php echo $i; ?>">
                      <input class="checkbox-catalog" <?php if(isset($_GET[$item->slug])) {echo 'checked'; } ?> value="<?php echo $item->slug ?>" type="checkbox" name="<?php echo $item->slug; ?>" id="<?php echo $i; ?>">
                      <?php echo $item->name; ?>
                    </label>
                    </td>
                  </tr>
                  <?php
                  $i++;
                  } ?>
                </table>
              </div>
            </div>
            <?php
          } ?>
            <div class="buttons-catalog">
              <input class="submit-catalog" type="submit" value="застосувати">
              <a href="<?php echo esc_url(home_url("/catalog")) ?>" class="def-catalog">скинути</a>
            </div>
            </form>
          </div>
        </div>
        <?php $limit = (int)get_field("limit"); ?>
        <?php echo get_products($filter_cat, $limit); ?>
      </div>
    </div>
<?php echo get_footer(); ?>