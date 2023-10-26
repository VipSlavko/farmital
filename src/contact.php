<?php
/*
Template Name: Contact 
*/ 
?>
<?php echo get_header(); ?>
    <main> 
      <div class="wrapper"> 
        <div class="contacts-h1-block">
          <h1 class="contacts-h1">Контакти</h1>
        </div>
        <div class="contact-block">
          <div class="left-block">
            <div class="background-left-block">
              <p class="contacts-people">Контактні особи:</p>
              <p class="volodya-i-katuha">Володимир та Катерина</p>
              <p class="hours-of-work">Години роботи:</p>
              <p class="hours">ПН-НД 8:00-18:00</p>
              <p class="telephones">Телефони:
                <ul class="con-list">
                  <li>+38(097) 930-17-88</li>
                  <li>+38(095) 937-16-99</li>
                  <li>+38(063) 129-40-99</li>
                </ul>
              </p>
              <p class="email-text">Електронна пошта:</p>
              <p class="emails">likital687@gmail.com</p>
              <p class="mesengers">Месенджери:</p><img class="con-logo" src="./img/viber.png" alt="logo"><img class="con-logo" src="./img/tel.png" alt="logo"><img class="con-logo" src="./img/whats up.png" alt="logo">
            </div>
          </div>
          <!--.right-block
          h2.con-h2 Напишіть нам
          form.con-form(action="")
              p.your-name Ваше імʼя 
              input.form-text(type="text", name="name")
              p.your-email Електронна пошта
              input.email-form(type="email", name="name")
              p.com Коментар
              textarea.textarea(name="description", cols="30", rows="10") 
              input.sub-con(type="submit", value="відправити")
          -->
        </div>
      </div>
    </main>
<?php echo get_footer(); ?>