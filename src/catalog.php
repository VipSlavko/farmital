<?php
/*
Template Name: Catalog
*/ 
?>
<?php
$filters = get_field("filters_list");
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
          <h1 class="h1-filter">Фільтр</h1>
            <form action="<?php echo esc_url(home_url("catalog")); ?>" method="get">
            <div class="price-catalog">
              <h2 class="h2-price">Ціна</h2>
              <input class="price-num" type="number" name="min-price" value="<?php echo $min; ?>">
              <span class="price-line">-</span>
              <input class="price-num" type="number" name="max-price" value="<?php echo $max; ?>">
            </div>
            <?php
            $i = 0;
            foreach($filters as $filter) { ?>
            <div class="form-release"> 
              <h3 class="h3-release"><?php echo $filter["filter_name"]; ?></h3>
              <table> 
                <?php
                $items = $filter["filter_item"];
                foreach($items as $item) { ?>
                <tr>
                  <td>
                    <label class="checkbox-text" for="<?php echo $i; ?>">
                    <input class="checkbox-catalog" <?php if(isset($_GET[$item["filter_slug"]])) {echo 'checked'; } ?> value="<?php echo $item["filter_slug"] ?>" type="checkbox" name="<?php echo $item["filter_slug"]; ?>" id="<?php echo $i; ?>">
                    <?php echo $item["filter_value"]; ?>
                  </label>
                  </td>
                </tr>
                <?php
                $i++; 
                } ?>
              </table>
            </div>
            <?php } ?>
            <div class="buttons-catalog">
              <input class="submit-catalog" type="submit" value="застосувати">
              <input class="def-catalog" type="reset" value="скинути">
            </div>
            </form>
        </div>
        <?php echo get_products($filter_cat); ?>
      </div>
    </div>
<?php echo get_footer(); ?>