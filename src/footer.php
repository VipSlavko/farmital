<div class="popup" id="popup">
  <div class="popup-body"> 
    <div class="popup-content"> <a class="popup-close close-popup" href="#">+</a>
      <p class="popup-h">Оформлення замовлення</p>
      <p class="popup-text">Щоб замовити продукт поздвоніть на данні номери:</p>
      <?php echo get_phones_list(); ?>
    </div>
  </div>
</div>
</div>
</main>
<footer>
      <div class="wrapper">
        <div class="footer">
          <div class="footer-menu footer-el">
            <?php echo get_menu(false); ?>
          </div>
          <?php echo get_phones(); ?>
          <div class="messengers footer-el">
            <?php echo get_sociables(); ?>
            <div class="mail">
              <a class="url" href="mailto:<?php echo get_email(); ?>"><?php echo get_email(); ?></a>
            </div>
          </div>
          <div class="copyright footer-el">
          <?php echo get_logo(); ?>
            <p class="copy">&copy <?php echo get_copyright(); ?></p>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <?php wp_footer(); ?>
</html>