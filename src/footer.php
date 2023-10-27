<footer>
      <div class="wrapper">
        <div class="footer">
          <div class="footer-menu footer-el">
            <?php echo get_menu(false); ?>
          </div>
          <div class="phone footer-el">
            <p>
              <a href="tel:+380979301788"><b>+38(097) 930-17-88</b></a>
            </p>
            <p class="mob"><a href="tel:+380959371699"><b>+38(095) 937-16-99</b></a></p>
            <p><a href="tel:+380631294099"><b>+38(063) 129-40-99</b></a></p>
          </div>
          <div class="messengers footer-el">
            <div class="messenger">
              <a class="icon viber" href="viber://chat?number=%2B380979301788"></a>
              <a class="icon telegram" href="https://t.me/chatFarmital"></a>
            </div>
            <div class="mail">
              <a class="url" href="mailto:<?php echo get_email(); ?>"><?php echo get_email(); ?></a>
            </div>
          </div>
          <div class="copyright footer-el">
          <?php echo get_custom_logo(); ?>
            <p class="copy">&copy Інтернет Аптека FarmItal 2021-2023</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <?php wp_footer(); ?>
</html>