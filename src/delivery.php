<?php
/*
Template Name: Delivery 
*/ 
?>
<?php echo get_header(); ?>
    <main> 
      <div class="wrapper">
        <h1 class="h-del">Доставка</h1>
        <div class="new-postal-block"> 
          <div class="image-left">
            <img class="del-image" src="<?php echo get_field('delivery_image'); ?>" alt="<?php echo get_field("delivery_alt"); ?>">
          </div>
          <div class="text-right">
            <?php echo get_field("delivery_text"); ?>
          </div>
        </div>
        <div class="payment">
          <?php echo get_field("payment_text"); ?> 
          <!-- <h3 class="h-del">Оплата</h3>
          <p class="pay-text">Замовлення можна оплатити при оформленні банківською карткою, , а також можна обрати Післяоплату при отриманні на останньому кроці оформлення замовлення. Додаткових доплат та комісій за переказ коштів Ви не сплачуєте – лише суму замовлення.</p>
          <p class="pay-text">Оплата готівкою (накладений платіж) в пункті самовивозу транспортної компанії, або кур'єру служби доставки.</p>
          <p class="pay-text">Оплата на рахунок у банку (після оформлення замовлення через сайт, ми уточнимо наявність всього товару і відправимо на вказаний Вами номер телефону номер рахунку і точну суму до оплати).</p> -->
        </div>
      </div>
    </main>
<?php echo get_footer(); ?>