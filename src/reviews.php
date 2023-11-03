<?php
/*
Template Name: Reviews 
*/

?>
<?php echo get_header(); ?>
<?php
$category = get_category_by_slug("reviews");
$reviews = get_posts(array(
    "category_name" => "reviews",
    "order" => "ASC",
    "order_by" => "date",
));
?>
<h1 class="reviews__title"><?php echo $category->name; ?></h1>
<div class="reviews">
    <div class="reviews__list">
        <?php foreach ($reviews as $review) : setup_postdata($review); ?>
        <article class="reviews__item">
            <div class="reviews__head">
                <h3 class="reviews__author" role="author"><?php echo get_the_title($review->ID); ?></h3>
                <time class="reviews__time" datetime="<?php echo get_post_time("d.m.Y", false, null, true) ?>"><?php echo get_post_time("d.m.Y", false, null, true) ?></time>
            </div>
            <p class="reviews__content">
            <?php echo get_the_content(); ?>
            </p>
        </article>
        <?php endforeach; ?>
    </div>
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