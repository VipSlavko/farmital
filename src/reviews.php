<?php
/*
Template Name: Reviews 
*/ 
?>
<?php echo get_header(); ?>
<h1 class="reviews__title">Відгуки</h1>
<div class="reviews">
    <div class="reviews__list">
        <article class="reviews__item">
            <div class="reviews__head">
                <h3 class="reviews__author" role="author">Олександр</h3>
                <time class="reviews__time" datetime="15.06.2023">15.06.2023</time>
            </div>
            <p class="reviews__content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
            </p>
        </article>
        <article class="reviews__item">
            <div class="reviews__head">
                <h3 class="reviews__author" role="author">Олександр</h3>
                <time class="reviews__time" datetime="15.06.2023">15.06.2023</time>
            </div>
            <p class="reviews__content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
            </p>
        </article>
        <article class="reviews__item">
            <div class="reviews__head">
                <h3 class="reviews__author" role="author">Олександр</h3>
                <time class="reviews__time" datetime="15.06.2023">15.06.2023</time>
            </div>
            <p class="reviews__content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
            </p>
        </article>
    </div>
    <div class="reviews__form">
        <p>
        Для нас ДУЖЕ ЦІННИЙ ваш відгук! Що хотілося б покращити? 
        </p>
        <p>
        Ваші поради та зауваження допоможуть нам стати кращими!
        </p>
        <form action="#" method="post">
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