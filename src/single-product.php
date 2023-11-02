<?php
/*
Template Name: Product 
*/ 
global $product;
?>
<?php echo get_header(); ?>
        <div class="top-info-nicetile"> 
          <div class="left-image-nicetile">
            <?php $image_url = wp_get_attachment_url( $product->get_image_id() ); ?>
            <img class="image-nicetile" src="<?php echo $image_url; ?>" alt="<?php echo the_title(); ?>">
          </div>
          <div class="right-info-nicetile">
            <h1 class="h1-nicetile"><?php echo the_title(); ?></h1>
            <p class="price-nicetile"><?php echo $product->get_price_html(); ?></p>
            <p class="producer-nicetile">Виробник: <?php echo $product->get_attribute( "producer" ); ?></p>
            <p class="code-nicetile">Товар: в наявності</p>
            <p class="response">15 відгуків</p>
            <a class="view-all" href="#">переглянути усі</a>
            <p class="top-h-nicetile">Склад та форма випуску:</p>
            <p class="top-text-nicetile">Таблетки, покриті кишковорозчинною оболонкою	1 табл.</p>
            <p class="top-text-nicetile">L-ацетилкарнітину гідрохлорид	590 мг</p>
            <p class="top-text-nicetile">допоміжні речовини: ПВП — 56 мг; МКЦ – 47 мг; магнію стеарат – 7 мг; целюлози ацетофталат – 22,5 мг; діетилфталат – 9,4 мг; диметикон — 3,1 мг	</p>
            <p class="top-text-nicetile">у блістері 10 шт.; в коробці 3 блістери.</p>
            <div class="buy-block">
              <select class="select-nicetile" name="form"> 
                <option value="Таблетки">Таблетки</option>
                <option value="Саше(Порошок)">Саше(Порошок)</option>
              </select>
              <a class="a-nicetile popup-link" href="#popup">купити</a>
            </div>
          </div>
        </div>
        <div class="main-info-block-nicetile"> 
          <h2 class="h-nicetile">Купити Ніцетіл / Nicetile / Ницетил таблетки:</h2>
          <p class="text-nicetile">Саме в FarmItal ви можете купити Ніцетіл, Nicetile, Ницетил таблетки в Україні. Гарантовано якісні! Доставка Nicetile таблетки здійснюється транспортними компаніями, терміни виконання замовлення обумовлюються менеджером Фармітал. Ви можете замовити Ніцетіл, Nicetile, Ницетил таблетки у містах: Одеса, Херсон, Чернігів, Сєверодонецьк, Бердянськ, Бровари, Дніпро, Вінниця, Київ, Слов'янськ, Полтава, Краматорськ, Біла Церква, Кам'янське, Маріуполь, Чернівці, Олександрія, Кам'янець-Подільський, Львів, Запоріжжя, Кропивницький, Житомир, Івано-Франківськ, Суми, Черкаси, Костянтинівка, Мелітополь, Кривий Ріг, Рівне, Луцьк, Нікополь, Павлоград, Ужгород, Кременчук, Лисичанськ, Хмельницький, Тернопіль, Харків, Миколаїв, а також в інших населених пунктах України.</p>
          <h3 class="h-nicetile">Фармакологічні властивості:</h3>
          <p class="text-nicetile">Ніцетил відноситься до групи ноотропних препаратів. L-ацетилкарнітину гідрохлорид є синтетичним аналогом ацетилкарнітину – речовини, яка у здорових людей синтезується мозковою тканиною, печінкою та нирками. Ацетилкарнітин впливає на життєво важливі функції організму, які страждають при його нестачі:</p>
          <p class="text-nicetile">Мітохондріальна функція (вироблення енергії всередині клітини) антиоксидартна активність у нейронах центральної та периферичної нервової системи (відновлення та захист нервових клітин та нервових закінчень) вплив на синтез ІФР (інсуліноподібний фактор росту), що впливає на всі обмінні процеси в організмі, в т.ч. підвищується стійкість мозкової тканини до ушкоджуючих факторів, усувається киснева недостатність, покращуються обмінні процеси у серцевому м'язі.</p>
          <p class="text-nicetile">Підвищує енергетичну вироблення, потрібну для регенераційних процесів, удосконалює фосфоліпідний синтез для мембранної побудови. Ніцетил, як і інші ноотропні засоби, не викликає звикання та має мінімальну кількість побічних ефектів, відновлює структуру нервових клітин (тобто препарат має нейропротекторну дію). Також він сприяє відновленню балансу між гальмівними та збуджуючими реакціями мозку. Таким чином, препарат чинить не тільки симптоматичне лікування, але й діє на джерело захворювання.</p>
          <h4 class="h-nicetile">Показання до застосування:</h4>
          <p class="text-nicetile">Препарат може рекомендуватися для лікування різноманітних уражень нервової системи. Це можуть бути різні психози, що виникають на тлі судинної енцефалопатії. Також Ніцетил показаний при механічних, стовбурових, запальних, радикулярних ушкодженнях периферичного нерва, інволюційному синдромі на фоні судинної енцефалопатії, при діабетичній нейропатії.</p>
          <h5 class="h-nicetile">Спосіб застосування:</h5>
          <p class="text-nicetile">Всередину, таблетки, порошок, гранули для прийому всередину - 0,5-1,5 г на день в 2-3 прийоми за призначенням лікаря.</p>
          <h6 class="h-nicetile">Дозування та спосіб введення:</h6>
          <p class="text-nicetile">Таблетки, вкриті оболонкою, розчинної в кишечнику 500 мг; блістер 10, коробка (коробочка) 3</p>
          <h6 class="h-nicetile">Умови зберігання:</h6>
          <p class="text-nicetile">Зберігати Ніцетил рекомендується у сухому місці до +25°C без прямих променів сонця.</p>
        </div>
        <div class="similar-products"> 
          <h6 class="top-of-sells-h4">Схожі товари</h6>
          <div class="cardwrap"> 
            <figure class="card">
              <figcaption> 
                <div class="cardimg">
                  <div class="images"><img class="card-image" src="<?php echo get_path("/assets/img/nicetile.jpg"); ?> alt="nicetile"/></div>
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
                  <div class="images"><img class="card-image" src="<?php echo get_path("/assets/img/nicetile.jpg"); ?>" alt="nicetile"/></div>
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
                  <div class="images"><img class="card-image" src="<?php echo get_path("/assets/img/nicetile.jpg"); ?>" alt="nicetile"/></div>
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
        </div>
      </div>
      <div class="popup" id="popup">
        <div class="popup-body"> 
          <div class="popup-content"> <a class="popup-close close-popup" href="#">+</a>
            <p class="popup-h">Оформлення замовлення</p>
            <p class="popup-text">Щоб замовити продукт поздвоніть на данні номери:    </p>
          </div>
        </div>
      </div>
    </main>
<?php echo get_footer(); ?>