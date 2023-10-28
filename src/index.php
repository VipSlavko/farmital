<?php
/*
Template Name: Index 
*/ 
?>
<?php echo get_header(); ?>
      <div class="wrapper"> 
        <div class="banner" style="background-image: url(<?php echo get_field("banner_image"); ?>)">
          <div class="banner-content">
            <h1 class="banner-h1"><?php echo get_field("banner_title"); ?></h1>
            <p class="banner-text"><?php echo get_field("banner_text"); ?></p>
          </div>
        </div>
        <div class="info">
          <h2 class="info-h2"><?php echo get_field("benefits_title"); ?></h2>
          <?php echo get_benefits(); ?>
        </div>
        <?php echo get_top_sells(); ?>
      </div>
      <div class="popup" id="popup"><a class="popup-area" href="#">
          <div class="popup-body"> 
            <div class="popup-content">
              <a class="popup-close close-popup" href="#">+</a>
              <div class="popup-block">
                <div class="left-popup">
                  <p class="popup-h">Оформлення замовлення</p>
                  <p class="popup-text pud">Щоб оформити замовлення зателефонуйте на мобільні номери:</p>
                  <p class="popup-text pud">Або надішліть електронний лист на пошту:</p>
                  <p class="popup-text">Також можете звертатись до нас в соц-мережах:</p>
                </div>
                <div class="right-popup">
                  <div class="phone-popup pud">
                    <p><a href="tel:+380979301788"><b>+38(097) 930-17-88</b></a></p>
                    <p class="mob"><a href="tel:+380959371699"><b>+38(095) 937-16-99</b></a></p>
                    <p><a href="tel:+380631294099"><b>+38(063) 129-40-99</b></a></p>
                  </div>
                  <div class="mail-popup">
                    <a class="url" href="mailto:likital687@gmail.com">likital687@gmail.com</a>
                  </div>
                  <div class="messengers-popup">
                    <a class="icon viber" href="viber://chat?number=%2B380979301788">Viber</a>
                    <a class="icon telegram" href="https://t.me/chatFarmital">Telegram</a>
                  </div>
                </div>
              </div>
            </div>
          </div></a></div>
    </main>
<?php echo get_footer(); ?>