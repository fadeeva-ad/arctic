<!DOCTYPE html>
<html lang="ru">
<?php include 'blocks/head.php' ?>

<body class="page">
    <?php 
      include 'blocks/header.php';
    ?>
		<div class="block-10">		
      <div class="container container_m">
        <div class="block-10__header">
          <div class="block-10__menu-wrapper ">
            <h1 class="h1">Архив</h1>

            <?php
            // устанавливаем первый и последний год диапазона
              $yearArray = range(2015, 2018);
            ?>           
            <select name="year" class="year">
              <?php
              foreach ($yearArray as $year) {
                  // если вы хотите выбрать конкретный год
                  $selected = ($year == 2015) ? 'selected' : '';
                  echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
              }
              ?>
              <li class="year__main-item">
                <a href="#" class="year__link"><?php $year ?>
                
                </a>
              </li>
              <img src="production/img/icons/small-arrow.svg" alt="arrow-right" class="arrow-icon arrow-icon_rotate svg">
            </select>
 
          </div>
                       
          <ul class="block-10__list ">
            <li class="block-10__list-item ">
              <a href="#" class="block-10__link-item tab-active">программа</a>
            </li>
            <li class="block-10__list-item ">
              <a href="#" class="block-10__link-item">участники</a>
            </li>
            <li class="block-10__list-item ">
              <a href="#" class="block-10__link-item">партнеры</a>
            </li>
            <li class="block-10__list-item ">
              <a href="#" class="block-10__link-item">фотоотчет</a>
            </li>
          </ul>
        </div>
        <!-- start programm-tab -->
        <div class="tab">
          <h2 class="block-10__subtitle">Школа арктики 2018</h2>     
          <div class="block-11 ">
            <div class="block-11__item">
              <p class="block-11__title">1 день</p>
              <p class="block-11__content">Первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем</p>
            </div>
            <div class="block-11__item
            ">
              <p class="block-11__title">2 день</p>
              <p class="block-11__content">Первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем</p>
            </div>
            <div class="block-11__item">
              <p class="block-11__title">3 день</p>
              <p class="block-11__content">Первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем</p>
            </div>
            <div class="block-11__item">
              <p class="block-11__title">4 день</p>
              <p class="block-11__content">Первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем</p>
            </div>
          </div>
          <button href="resolution-form.php" role="button" class="btn btn_archive">скачать подробную <br> программу школы 2018</button>
        </div>
        <!-- start participants-tab -->
        <div class="tab">
        <h2 class="block-10__subtitle">участники школы арктики 2018</h2> 
        <div class="block-11 block-11_padd">
            <div class="block-11__item block-11__item_paricipants">
              <div class="block-11__img-container">
                <img src="production/img/archive/Ellipse.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content block-11__content_name">Петя Иванов</p>
            </div>
            <div class="block-11__item block-11__item_paricipants">
              <div class="block-11__img-container">
                <img src="production/img/archive/santa.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content block-11__content_name">Петя Иванов</p>
            </div>
            <div class="block-11__item block-11__item_paricipants">
              <div class="block-11__img-container">
                <img src="production/img/archive/Ellipse.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content block-11__content_name">Петя Иванов</p>
            </div>
            <div class="block-11__item block-11__item_paricipants">
              <div class="block-11__img-container">
                <img src="production/img/archive/Ellipse.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content block-11__content_name">Петя Иванов</p>
            </div>
            <div class="block-11__item block-11__item_paricipants">
              <div class="block-11__img-container">
                <img src="production/img/archive/santa.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content block-11__content_name">Петя Иванов</p>
            </div>
            <div class="block-11__item block-11__item_paricipants">
              <div class="block-11__img-container">
                <img src="production/img/archive/Ellipse.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content block-11__content_name">Петя Иванов</p>
            </div>
            <div class="block-11__item block-11__item_paricipants">
              <div class="block-11__img-container">
                <img src="production/img/archive/Ellipse.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content block-11__content_name">Петя Иванов</p>
            </div>
            <div class="block-11__item block-11__item_paricipants">
              <div class="block-11__img-container">
                <img src="production/img/archive/santa.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content block-11__content_name">Петя Иванов</p>
            </div>
            <div class="block-11__item block-11__item_paricipants">
              <div class="block-11__img-container">
                <img src="production/img/archive/Ellipse.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content block-11__content_name">Петя Иванов</p>
            </div>
        </div>
        <ul class="pages">
          <li class="pages__page">
            <a href="all-partners.php" class="pages__link pages__link_partners">1
          </li>
          <li class="pages__page">
            <a href="all-partners.php" class="pages__link pages__link_partners">2
          </li>
          <li class="pages__page">
            <a href="all-partners.php" class="pages__link pages__link_partners">3
          </li>
        </ul>
      </div>
      <!-- start partnets-tab -->
      <div class="tab">
          <h2 class="block-10__subtitle">партнеры школы арктики 2018</h2>     
          <div class="block-11 ">
            <div class="block-11__item">
            <div class="block-11__img-container block-11__img-container_partners">
                <img src="production/img/partners/Gazpromneft_rus.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content">Первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем</p>
            </div>
            <div class="block-11__item">
            <div class="block-11__img-container block-11__img-container_partners">
                <img src="production/img/partners/Gazpromneft_rus.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content">Первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем</p>
            </div>
            <div class="block-11__item">
            <div class="block-11__img-container block-11__img-container_partners">
                <img src="production/img/partners/Gazpromneft_rus.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content">Первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем</p>
            </div>
            <div class="block-11__item">
            <div class="block-11__img-container block-11__img-container_partners">
                <img src="production/img/partners/Gazpromneft_rus.png" alt="participant" class="block-11__img">
              </div>
              <p class="block-11__content">Первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем первая в россии школа арктики способствует достижению основных национальных интересов России в Арктике путем</p>
            </div>
 
          </div>
          <ul class="pages">
          <li class="pages__page">
            <a href="all-partners.php" class="pages__link pages__link_partners">1
          </li>
          <li class="pages__page">
            <a href="all-partners.php" class="pages__link pages__link_partners">2
          </li>
          <li class="pages__page">
            <a href="all-partners.php" class="pages__link pages__link_partners">3
          </li>
        </ul>
        </div>
        <!-- start photo-tab slider -->
        <div class="tab">
        <h2 class="block-10__subtitle">Фото школы арктики 2018</h2>
          <div class="block-11 block-11_slider ">
            <div class="block-11__item block-11__item_slider ">
              <div class="block-11__img-container block-11__img-container_slider ">
                <img src="production/img/archive/slider-archive.jpg" alt="participant" class="block-11__img">
              </div>
              <div class="block-11__img-container block-11__img-container_slider ">
                <img src="production/img/archive/slider-archive.jpg" alt="participant" class="block-11__img">
              </div>
              <div class="block-11__img-container block-11__img-container_slider ">
                <img src="production/img/archive/slider-archive.jpg" alt="participant" class="block-11__img">
              </div>
            </div>
          
            <img src="production/img/icons/arrow.svg" alt="назад" class="main-slider__arrow main-slider__arrow_prev">
            <img src="production/img/icons/arrow.svg" alt="вперед" class="main-slider__arrow main-slider__arrow_next">
        </div>
      </div>
		</div>
    <?php include 'blocks/footer.php';?>
</body>

</html>