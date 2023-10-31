<?php
/*
Template Name: Contact 
*/ 
?>
<?php echo get_header(); ?>
        <div class="contacts-h1-block">
          <h1 class="contacts-h1">Контакти</h1>
        </div>
        <div class="contact-block">
          <div class="left-block">
            <div class="background-left-block">
              <p class="contacts-people">Контактні особи:</p>
              <p class="volodya-i-katuha"><?php echo get_field("contacts_person"); ?></p>
              <p class="hours-of-work">Години роботи:</p>
              <p class="hours"><?php echo get_field("contacts_time"); ?></p>
              <p class="telephones">Телефони:
                <?php echo get_phones_list(); ?>
              </p>
              <p class="email-text">Електронна пошта:</p>
              <p class="emails"><?php echo get_email(); ?></p>
              <p class="mesengers">Месенджери:</p>
              <?php echo get_sociables(); ?>
            </div>
          </div>
          <div class="right-block" >
            <h2 class="con-h2"><?php echo get_field("contact_title"); ?></h2>
            <?php echo do_shortcode('[contact-form-7 id="6d8944a" title="Форма контакту"]'); ?>
          </div>
        </div>
      </div>
    </main>
<?php echo get_footer(); ?>