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
      <form  action="">
        <div class="form__block"><label for="" class="form__label form__label_dot form__label_s"><span class="form__txt form__txt_dot">фио</span>
          <input type="text" class="form__input" required>
        </label>
        <label for="" class="form__label"><span class="form__txt form__txt_dot">организация</span>
          <input type="text" class="form__input">
        </label>
      </div>
      <div class="form__block">
        <label for="" class="form__label form__label_dot form__label_s"><span class="form__txt form__txt_dot">телефон</span>
          <input type="text" class="form__input" required>
        </label>
        <label for="" class="form__label"><span class="form__txt form__txt_dot">должность</span>
          <input type="text" class="form__input">
        </label>
      </div>
      <div class="form__block">
        <label for="" class="form__label form__label_dot form__label_s"><span class="form__txt form__txt_dot">почта</span>
          <input type="text" class="form__input" required>
        </label>
        <label for="" class="form__label"><span class="form__txt form__txt_dot">адрес сайта</span>
          <input type="text" class="form__input">
        </label>
      </div>
      <div class="form__block">
        <label for="" class="form__label form__label_dot"><span class="form__txt form__txt_dot">проблема, на решение которой направлено предложение</span>
        <textarea class="form__input form__input_big" required></textarea>
        </label>
      </div>
      <div class="form__block">
        <label for="" class="form__label form__label_dot"><span class="form__txt form__txt_dot">формулировка предложения</span>
          <textarea class="form__input form__input_big" required></textarea>
        </label>
      </div>

      <p class="form__text form__label_dot">Обязательно для заполнения</p>
      <a href="resolution-form.php" role="button" class="btn btn_send">отправить</a>
      </form>


			</div>
		</div>
    <?php include 'blocks/footer.php';?>
</body>

</html>