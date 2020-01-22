<?

require_once('page-6.php');

class OrderFormPage extends Page {

   function Display() {

      ?>

      <!DOCTYPE html>
      <html lang="en">
      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <link rel="stylesheet" href="./css/style.min.css">

      <?

      $this -> DisplayTitle();
      $this -> DisplayKeywords();

      ?>

      </head>
      <body>

      <?

      $this -> DisplayHeader();

      ?>

         <main class="content container">
         
            <? require_once('nav.php');  ?>
         
            <div class="interface box interface__box">
            
            <?

            $this -> DisplayMenu($this -> buttons);

            echo $this -> content;

            $this -> register();

            ?>
            
            </div>
         </main>

      <?

      $this -> DisplayFooter();

   }

}

$services = new OrderFormPage();

$content = '

   <div class="form-wrapper">
   <form class="form" id="register" action="" method="POST">
      <div class="form__row">
         <label class="form__label" for="login">Логин</label>
         <div class="form__input-wrapper">
            <input class="form__input login-js form__input_text" type="text" name="login">
         </div>
      </div>
      <div class="form__row">
         <label class="form__label" for="fio">ФИО</label>
         <div class="form__input-wrapper">
            <input class="form__input form__input_text" type="text" name="fio">
         </div>
      </div>
      <div class="form__row">
         <label class="form__label" for="email">E-mail</label>
         <div class="form__input-wrapper">
            <input class="form__input form__input_text" type="email" name="email">
         </div>
      </div>
      <div class="form__row">
         <label class="form__label" for="password">Пароль</label>
         <div class="form__input-wrapper">
            <input class="form__input form__input_text" type="password" name="password">
         </div>
      </div>
      <div class="form__row">
         <label class="form__label" for="doublepassword">Повторите пароль</label>
         <div class="form__input-wrapper">
            <input class="form__input form__input_text" type="password" name="doublepassword">
         </div>
      </div>
      <div class="form__row">
         <input type="submit" class="btn btn_green form__btn submit" value="Зарегистрироваться" name="reg">
      </div>
   </form>
   </div>

';

if (isset($_SESSION['login'])) {

   header("Location: index-6.php");

} else {

   $services -> SetContent($content);

   $services -> SetTitle('Лабораторная работа №6 по теме: Работа с сессиями в РНР');
   
   $services -> SetName('Работа с сессиями в РНР.');
   
   $services -> Display();

}

?>