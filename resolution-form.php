<!DOCTYPE html>
<html lang="ru">
<?php include 'blocks/head.php' ?>

<body class="page">
    <?php 
      include 'blocks/header.php';
    ?>
		<div class="form">		
      <div class="container container_m">
        <h1 class="h1">резолюция</h1>
        <h2 class="form__subtitle">
Ждем Ваших предложений для формирования ежегодной общественной резолюции.</h2>
      <form id="key1" action="">
        <div class="form__block">
          <label for="" class="form__label form__label_s">
            <span class="form__txt  form__required-dot">фио</span>
          <input type="text" class="form__input" required>
        </label>
        <label for="" class="form__label">
          <span class="form__txt ">организация</span>
          <input type="text" class="form__input">
        </label>
      </div>
      <div class="form__block">
        <label for="" class="form__label form__label_s">
          <span class="form__txt  form__required-dot">телефон</span>
          <input type="tel" name="phone" class="form__input" required>
        </label>
        <label for="" class="form__label">
          <span class="form__txt">должность</span>
          <input type="text" class="form__input">
        </label>
      </div>
      <div class="form__block">
        <label for="" class="form__label form__label_s">
          <span class="form__txt  form__required-dot">почта</span>
          <input type="email" class="form__input" required>
        </label>
        <label for="" class="form__label">
          <span class="form__txt">адрес сайта</span>
          <input type="url" name="url" class="form__input">
        </label>
      </div>
      <div class="form__block">
        <label for="" class="form__label">
          <span class="form__txt  form__required-dot">проблема, на решение которой направлено предложение</span>
        <textarea class="form__input form__input_big" required></textarea>
        </label>
      </div>
      <div class="form__block">
        <label for="" class="form__label">
          <span class="form__txt  form__required-dot">формулировка предложения</span>
          <textarea class="form__input form__input_big" required></textarea>
        </label>
      </div>

      <p class="form__footnote form__required-dot">Обязательно для заполнения</p>
      <button href="resolution-form.php" form="key1" role="button" class="btn btn_send">отправить</button>
      </form>


			</div>
		</div>
    <?php include 'blocks/footer.php';?>
</body>

</html>