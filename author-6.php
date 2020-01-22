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

            if (isset($_SESSION['error'])) {

               ?>

               <span class="message message_error"><? echo $_SESSION['error'] ?></span>

               <?

               unset($_SESSION['error']);

            }

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
   <form class="form" id="authorization" action="index-6.php" method="POST">
      <div class="form__row">
         <label class="form__label" for="userlogin">Введите логин</label>
         <div class="form__input-wrapper">
            <input class="form__input login-js form__input_text" type="text" name="userlogin">
         </div>
      </div>
      <div class="form__row">
         <label class="form__label" for="userpassword">Введите пароль</label>
         <div class="form__input-wrapper">
            <input class="form__input form__input_text" type="password" name="userpassword">
         </div>
      </div>
      <div class="form__row">
         <input type="submit" class="btn btn_green form__btn submit" value="Войти" name="author">
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