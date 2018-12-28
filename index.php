<!DOCTYPE html>
<html lang="ru">
<?php include 'blocks/head.php' ?>

<body class="page">
    <?php 
        $hMP = 'header_main-page';
        include 'blocks/header.php';
    ?>
    <div class="main-slider">
        <div class="container">
            <img src="production/img/icons/arrow.svg" alt="назад" class="main-slider__arrow main-slider__arrow_prev">
            <img src="production/img/icons/arrow.svg" alt="вперед" class="main-slider__arrow main-slider__arrow_next">
            <div class="container container_m">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="production/img/banner.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="production/img/banner.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="production/img/banner.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-1">
        <div class="container container_m">
            <a href="" class="btn">подать заявку на участие в <br> школе арктики</a>
            <div class="block-1__item">
                <img src="production/img/default.jpg" alt="" class="block-1__img">
                <div class="block-1__text-wrapper">
                    <div class="block-1__item-title">
                        <div class="block-1__line"></div>
                        <h2>Школа арктики</h2>
                    </div>
                    <div class="block-1__text">Школа Арктики – просветительский проект, направленный на популяризацию идей изучения и развития Арктики среди молодежи проводимый РОО «Ученый Совет ЯНАО» при поддержке Фонда президентских грантов.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-2">
        <div class="block-2__back">
            <div class="container container_l">
                <h2 class="block-2__title">Участие в проекте Школа Арктики дает возможность:</h2>
                <div class="block-2__text">
                Расширить свои представления и знания об Арктике;<br>
Найти единомышленников и друзей, увлеченных изучением Арктики;<br>
Построить свою карьеру в Арктике выбрав профессию и учебное заведение связанных с Арктической тематикой;<br> 
Участвовать в международных Арктических проектах по изучению и освоению Арктики;<br>
Улучшить экологическую ситуацию в Арктическом регионе приняв участие в акции по очистке; загрязненных территорий.

                </div>
            </div>
        </div>
        <div class="block-2__front">
            <div class="container container_l">
                <img src="production/img/white-bear.png" alt="" class="block-2__img hide_on-mobile hide_on-tablet">
            </div>
        </div>
    </div>
    <?php
      include 'blocks/news-content.php';
    ?>
    <div class="partners">
        <img src="production/img/partners-bg.png" alt="" class="partners__bg">
        <div class="container container_m">
            <h2 class="partners__title">наши партнеры</h2>
            <div class="partners__list">
                <div class="partners__list-item" style="background: #fff url('production/img/partners1.jpg') center no-repeat;"></div>
                <div class="partners__list-item" style="background: #fff url('production/img/partners2.jpg') center no-repeat;"></div>
                <div class="partners__list-item" style="background: #fff url('production/img/partners3.jpg') center no-repeat;"></div>
                <div class="partners__list-item" style="background: #fff url('production/img/partners3.jpg') center no-repeat;"></div>
            </div>
        </div>
    </div>
    <?php include 'blocks/contacts.php';?>
    <?php include 'blocks/footer.php';?>
</body>

</html>