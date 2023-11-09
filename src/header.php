<?php
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["review"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $review = $_POST["review"];
    $category = get_category_by_slug( "reviews" );
    wp_insert_post(array(
        "post_content" => $review,
        "post_title" => $email,
        "post_category" => array($category->term_id),
        "post_excerpt" => $name
    ));
    $redirect = esc_url(home_url("/reviews"));
    wp_redirect($redirect);
    exit;
}
?>
<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?> >
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="wrapper">
        <div class="header-top">
          <div class="logo">
              <?php echo get_logo(); ?>
          </div>
          <div class="search">
            <div class="search-container">
              <?php $string = get_product_search_form(true); ?>
            </div>
          </div>
          <?php echo get_phones(); ?>
          <div class="burger-menu">
          <span>
          </span>
        </div>
        </div>
      </div>
      <div class="header-bottom">
        <?php echo get_menu(); ?>
      </div>
    </header>
    <main>
      <div class="wrapper">
        <div class="crumbs">
        <?php echo do_shortcode("[breadcrumb]"); ?>
      </div>