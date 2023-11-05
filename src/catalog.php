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
$filter_cat = array(
  "all"
);
$min = 0; 
$max = 0;
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
  $filter_cat[$i] = $param;
  $i++;
}
if(!isset($_GET['max-price'])){
  $max = 100000000000;
}
if($min < 0) {
  $min = 0;
}
if($max <= $min) {
  $max = $min + 1;
}
?>
<?php echo get_header(); ?>
    <main>
      <div class="main-filter">
        <div class="filter">
          <h1 class="h1-filter"><?php echo $name; ?></h1>
            <form action="<?php echo esc_url(home_url("catalog")); ?>" method="get">
            <div class="price-catalog">
              <h2 class="h2-price">Ціна</h2>
              <input class="price-num" type="number" name="min-price" value="<?php echo $min; ?>">
              <span class="price-line">-</span>
              <input class="price-num" type="number" name="max-price" value="<?php echo $max; ?>">
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
              <!-- <input class="def-catalog" type="reset" value="скинути"> -->
              <a href="<?php echo esc_url(home_url("/catalog")) ?>" class="def-catalog">скинути</a>
            </div>
            </form>
        </div>
        <?php echo get_products($filter_cat); ?>
      </div>
    </div>
<?php echo get_footer(); ?>