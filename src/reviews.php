<?php
/*
Template Name: Reviews 
*/
$category = get_category_by_slug("reviews");
?>
<?php echo get_header(); ?>
<h1 class="reviews__title"><?php echo $category->name; ?></h1>
<div class="reviews">
    <?php echo get_reviews_html(); ?>
    <div class="reviews__form">
        <?php echo get_field("disklamer"); ?>
        <form action="<?php echo esc_url(home_url("/reviews")); ?>" method="post">
            <h2 class="reviews__title">Залишити відгук</h2>
            <label>
                <span>Ваше імʼя</span> 
                <input type="text" name="name">
            </label>
            <label>
                <span>Електронна пошта</span> 
                <input type="email" name="email">
            </label>
            <label>
                <span>Відгук</span> 
                <textarea name="review"></textarea>
            </label>
            <input type="submit" value="відправити">
        </form>
    </div>
</div>
<?php echo get_footer(); ?>