<?php
/*
Template Name: Catalog 
*/ 
?>
<?php echo get_header(); ?>
      <div class="main-filter">
        <div class="filter">
          <h1 class="h1-filter">Фільтр</h1>
          <main>
            <form action="">
            <div class="price-catalog">
              <h2 class="h2-price">Ціна</h2>
              <input class="price-num" type="number" name="min-price" value="0">
              <span class="price-line">-</span>
              <input class="price-num" type="number" name="max-price" value="0">
            </div>
            <?php
            $filters = get_field("filters_list");
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
                    <input class="checkbox-catalog" value="<?php echo $item["filter_value"] ?>" type="checkbox" name="<?php echo $filter["filter_name"]; ?>" id="<?php echo $i; ?>">
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
              <button class="submit-catalog" type="submit" value="застосувати">
              <button class="def-catalog" type="reset" value="скинути">
            </div>
            </form>
          </main>
        </div>
        <?php echo get_products(); ?>
      </div>
    </div>
<?php echo get_footer(); ?>