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
          <h2 class="info-h2">Переваги Farmital</h2>
          <div class="info-block"> 
            <div class="car info-mini-block">
              <h3 class="info-h3">Швидка доставка ліків</h3>
              <p class="info-text">Замовивши ліки до 16:00, Ви отримаєте їх вже наступного дня.</p>
            </div>
            <div class="hands info-mini-block">
              <h3 class="info-h3">Турбота про ваше здоров'я</h3>
              <p class="info-text">Ваше здоров'я - це найважливіше. Ми готові піти на зустріч в найскладніших ситуаціях.</p>
            </div>
            <div class="plus info-mini-block">
              <h3 class="info-h3">Безпечні ліки</h3>
              <p class="info-text">Ви розраховуєтесь за ліки, після того як їх оглянете їх.</p>
            </div>
            <div class="phone-plus info-mini-block"> 
              <h3 class="info-h3">Ми завжди на зв'язку</h3>
              <p class="info-text">Кожного дня з 9:00 до 18:00 наші оператори на зв'язку і готові вам допомогти.</p>
            </div>
            <div class="europe info-mini-block"> 
              <h3 class="info-h3">Європейцські виробники</h3>
              <p class="info-text">Ліки доставляють з Європи,де вони проходять сертифікацію по найвищих стандартах</p>
            </div>
          </div>
        </div>
        <div class="top-of-sells">
          <h4 class="top-of-sells-h4">Топ продажів</h4>
          <div class="cardwrap"> 
            <figure class="card">
              <figcaption> 
                <div class="cardimg">
                  <div class="images"><img class="card-image" src="<?php echo get_path("/assets/img/nicetile.png"); ?>" alt="nicetile"/></div>
                  <p class="card-name">Ніцетіл, Ницетил - (Nicetile), саше</p>
                  <p class="text-code">код товару: 
                    <p class="code">247589</p>
                  </p>
                  <p class="text-producer">Виробник:
                    <p class="producer">Італія</p>
                  </p>
                  <div class="stick"></div>
                  <p class="price">1180 грн/уп</p><a class="btn popup-link" href="#popup">у кошик </a>
                </div>
              </figcaption>
            </figure>
            <figure class="card">
              <figcaption> 
                <div class="cardimg">
                  <div class="images"><img class="card-image" src="<?php echo get_path("/assets/img/nicetile.png"); ?>" alt="nicetile"/></div>
                  <p class="card-name">Ніцетіл, Ницетил - (Nicetile), саше</p>
                  <p class="text-code">код товару: 
                    <p class="code">247589</p>
                  </p>
                  <p class="text-producer">Виробник:
                    <p class="producer">Італія</p>
                  </p>
                  <div class="stick"></div>
                  <p class="price">1180 грн/уп</p><a class="btn popup-link" href="#popup">у кошик </a>
                </div>
              </figcaption>
            </figure>
            <figure class="card">
              <figcaption> 
                <div class="cardimg">
                  <div class="images"><img class="card-image" src="<?php echo get_path("/assets/img/nicetile.png"); ?>" alt="nicetile"/></div>
                  <p class="card-name">Ніцетіл, Ницетил - (Nicetile), саше</p>
                  <p class="text-code">код товару: 
                    <p class="code">247589</p>
                  </p>
                  <p class="text-producer">Виробник:
                    <p class="producer">Італія</p>
                  </p>
                  <div class="stick"></div>
                  <p class="price">1180 грн/уп</p><a class="btn popup-link" href="#popup">у кошик </a>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="in-katalog-block"><a class="in-katalog" href="#">у каталог</a></div>
        </div>
      </div>
      <div class="popup" id="popup"><a class="popup-area" href="#">
          <div class="popup-body"> 
            <div class="popup-content"> <a class="popup-close close-popup" href="#">+</a>
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
                  <div class="mail-popup"><a class="url" href="mailto:likital687@gmail.com">likital687@gmail.com</a></div>
                  <div class="messengers-popup"><a class="icon viber" href="viber://chat?number=%2B380979301788">Viber</a><a class="icon telegram" href="https://t.me/chatFarmital">Telegram</a></div>
                </div>
              </div>
            </div>
          </div></a></div>
    </main>
<?php echo get_footer(); ?>