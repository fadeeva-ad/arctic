<!DOCTYPE html>
<html lang="ru">
<?php include 'blocks/head.php' ?>

<body class="page">
    <?php 
        include 'blocks/header.php';
    ?>
    <div class="contacts contacts_page">
        <div class="container container_m">
            <h1 class="h1">контакты</h1>
            <div class="contacts__wrapper">
                <div class="contacts__list">
                    <div class="contacts__list-item">
                        <div class="contacts__icon-wrapper">
                            <img class="contacts__icon" src="production/img/icons/phone.svg" alt="">
                        </div>
                        <a href="tel:8-911-912-8108" class="contacts__text">8-911-912-8108</a>
                    </div>
                    <div class="contacts__list-item">
                        <div class="contacts__icon-wrapper">
                            <img class="contacts__icon" src="production/img/icons/p-plane.svg" alt="">
                        </div>
                        <a href="mailto:arcticschool@gmail.com" class="contacts__text">arcticschool@gmail.com</a>
                    </div>
                    <div class="contacts__list-item">
                        <div class="contacts__icon-wrapper">
                            <img class="contacts__icon" src="production/img/icons/geo(s).svg" alt="">
                        </div>
                        <a target="blank" href="index.php" class="contacts__text">город Новый уренгой</a>
                    </div>
                </div>
                <div class="contacts__map">
                    <img src="production/img/map-mask.svg" alt="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30770.024497883976!2d76.65250630228985!3d66.08886488773369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4361a9789ba0e779%3A0x7f504711bce05cd0!2z0J3QvtCy0YvQuSDQo9GA0LXQvdCz0L7QuSwg0K_QvNCw0LvQvi3QndC10L3QtdGG0LrQuNC5INCw0LLRgtC-0L3QvtC80L3Ri9C5INC-0LrRgNGD0LM!5e0!3m2!1sru!2sru!4v1545064327830"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php include 'blocks/footer.php';?>
</body>

</html>