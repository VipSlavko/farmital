<footer>
      <div class="wrapper">
        <div class="footer">
          <div class="footer-menu footer-el">
            <?php echo get_menu(false); ?>
          </div>
          <?php echo get_phones(); ?>
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