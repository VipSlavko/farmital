<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?> >
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="wrapper">
        <div class="burger-menu">
          <span>
          </span>
        </div>
        <div class="header-top">
          <div class="logo">
              <?php echo get_custom_logo(); ?>
          </div>
          <div class="search">
            <div class="search-container">
              <form action="">
                <label class="search-label">
                  <input class="text-head" type="text" placeholder="Пошук препарату">
                  <button class="sub-head" type="submit">Пошук</button>
                </label>
              </form>
            </div>
          </div>
          <div class="phone">
            <p><a href="tel:+380979301788"><b>+38(097) 930-17-88</b></a></p>
            <p class="mob"><a href="tel:+380959371699"><b>+38(095) 937-16-99</b></a></p>
            <p><a href="tel:+380631294099"><b>+38(063) 129-40-99</b></a></p>
          </div>
        </div>
      </div>
      <div class="header-bottom">
        <?php echo get_menu(); ?>
      </div>
    </header>
    <main> 