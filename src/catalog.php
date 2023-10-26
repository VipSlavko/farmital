<?php
/*
Template Name: Catalog 
*/ 
?>
<!DOCTYPE html>
<?php echo get_header(); ?>
    <div class="wrapper">
      <div class="crumbs">
        <p><a href="/docs/">Головна</a></p>
        <p><a href="/docs/catalog.html">Каталог</a></p>
      </div>
      <div class="main-filter">
        <div class="filter">
          <h1 class="h1-filter">Фільтр</h1>
          <main>
            <form action=""></form>
            <div class="price-catalog">
              <h2 class="h2-price">Ціна</h2>
              <input class="price-num" type="text" name=""><span class="price-line">-</span>
              <input class="price-num" type="text" name="">
            </div>
            <div class="form-release"> 
              <h3 class="h3-release">Форма випуску</h3>
              <table> 
                <tr>
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check1">
                    <label class="checkbox-text" for="check1">таблетки</label>
                  </td>
                </tr>
                <tr>
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check2">
                    <label class="checkbox-text" for="check2">порошок</label>
                  </td>
                </tr>
                <tr>
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check3">
                    <label class="checkbox-text" for="check3">капсули</label>
                  </td>
                </tr>
                <tr>
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check4">
                    <label class="checkbox-text" for="check4">розчин</label>
                  </td>
                </tr>
                <tr>
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check5">
                    <label class="checkbox-text" for="check5">сироп</label>
                  </td>
                </tr>
                <tr>
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check5">
                    <label class="checkbox-text" for="check5">гранули</label>
                  </td>
                </tr>
              </table>
            </div>
            <div class="recept"> 
              <h4 class="h4-catalog">Рецептурний відпуск</h4>
              <table> 
                <tr> 
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check6">
                    <label class="checkbox-text" for="check6">без рецепту</label>
                  </td>
                </tr>
                <tr> 
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check7">
                    <label class="checkbox-text" for="check7">за рецептом</label>
                  </td>
                </tr>
              </table>
            </div>
            <div class="for-what"> 
              <h5 class="h5-catalog">Призначення</h5>
              <table> 
                <tr> 
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check8">
                    <label class="checkbox-text" for="check8">антибактеріальний</label>
                  </td>
                </tr>
                <tr> 
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check9">
                    <label class="checkbox-text" for="check9">від алергії</label>
                  </td>
                </tr>
                <tr> 
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check10">
                    <label class="checkbox-text" for="check10">від кашлю</label>
                  </td>
                </tr>
                <tr> 
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check11">
                    <label class="checkbox-text" for="check11">від болю у горлі</label>
                  </td>
                </tr>
                <tr> 
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check12">
                    <label class="checkbox-text" for="check12">від нежитю</label>
                  </td>
                </tr>
                <tr> 
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check13">
                    <label class="checkbox-text" for="check13">вітаміни</label>
                  </td>
                </tr>
                <tr> 
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check14">
                    <label class="checkbox-text" for="check14">для судин</label>
                  </td>
                </tr>
                <tr> 
                  <td class="section">
                    <input class="checkbox-catalog" type="checkbox" name="check15">
                    <label class="checkbox-text" for="check15">заспокійливе</label>
                  </td>
                </tr>
              </table>
            </div>
            <div class="buttons-catalog">
              <input class="submit-catalog" type="submit" value="застосувати">
              <input class="def-catalog" type="submit" value="скинути">
            </div>
          </main>
        </div>
        <div class="cards-catalog">
          <div class="cardwrap"> 
            <div class="line-cards">
              <figure class="card">
                <figcaption> 
                  <div class="cardimg">
                    <div class="images"><img class="card-image" src="img/nicetile.jpg" alt="nicetile"/></div>
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
            <div class="line-cards">
              <figure class="card">
                <figcaption> 
                  <div class="cardimg">
                    <div class="images"><img class="card-image" src="img/nicetile.jpg" alt="nicetile"/></div>
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
            <div class="line-cards">
              <figure class="card">
                <figcaption> 
                  <div class="cardimg">
                    <div class="images"><img class="card-image" src="img/nicetile.jpg" alt="nicetile"/></div>
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
            <div class="line-cards">
              <figure class="card">
                <figcaption> 
                  <div class="cardimg">
                    <div class="images"><img class="card-image" src="img/nicetile.jpg" alt="nicetile"/></div>
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
            <div class="line-cards">
              <figure class="card">
                <figcaption> 
                  <div class="cardimg">
                    <div class="images"><img class="card-image" src="img/nicetile.jpg" alt="nicetile"/></div>
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
            <div class="line-cards">
              <figure class="card">
                <figcaption> 
                  <div class="cardimg">
                    <div class="images"><img class="card-image" src="img/nicetile.jpg" alt="nicetile"/></div>
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
            <div class="line-cards">
              <figure class="card">
                <figcaption> 
                  <div class="cardimg">
                    <div class="images"><img class="card-image" src="img/nicetile.jpg" alt="nicetile"/></div>
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
            <div class="line-cards">
              <figure class="card">
                <figcaption> 
                  <div class="cardimg">
                    <div class="images"><img class="card-image" src="img/nicetile.jpg" alt="nicetile"/></div>
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
            <div class="line-cards">
              <figure class="card">
                <figcaption> 
                  <div class="cardimg">
                    <div class="images"><img class="card-image" src="img/nicetile.jpg" alt="nicetile"/></div>
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
      </div>
    </div>
<?php echo get_footer(); ?>