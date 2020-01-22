<? 

require_once('page-5.php');

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
   <form class="form" id="suborder-5" action="" method="POST">
      <div class="form__row">
         <label class="form__label" for="shirt">Футболки</label>
         <input class="form__input number-js" type="text" name="shirt" size= "3" maxlength="3">
      </div>
      <div class="form__row">
         <label class="form__label" for="trainers">Кроссовки</label>
         <input class="form__input number-js" type="text" name="trainers" size= "3" maxlength="3">
      </div>
      <div class="form__row">
         <label class="form__label" for="scooter">Самокаты</label>
         <input class="form__input number-js" type="text" name="scooter" size= "3" maxlength="3">
      </div>
      <div class="form__row">
         <label class="form__label" for="wheel">Велосипеды</label>
         <input class="form__input number-js" type="text" name="wheel" size= "3" maxlength="3">
      </div>
      <div class="form__row">
         <label class="form__label" for="fio">ФИО клиента</label>
         <div class="form__input-wrapper">
            <input class="form__input form__input_text" type="text" name="fio" size= "40" maxlength="40">
         </div>
      </div>
      <div class="form__row">
         <label class="form__label" for="address">Адрес доставки</label>
         <div class="form__input-wrapper">
            <input class="form__input form__input_text" type="text" name="address" size= "40" maxlength="40">
         </div>
      </div>
      <div class="form__row">
         <input type="submit" class="btn btn_green form__btn submit" value="Отправить заказ">
      </div>
   </form>
   </div>

   ';

$services -> SetContent($content);

$services -> SetTitle('Лабораторная работа №5 по теме: ООП на РНР');

$services -> SetName('ООП на РНР.');

$services -> Display();

?>