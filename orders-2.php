<? require_once('header.php'); ?>

<main class="content container">
         
   <? require_once('nav.php'); ?>

   <div class="interface box interface__box">
   
   <?
   
      $fp = fopen("orders.txt", 'r');

      if (!$fp) {

         echo '<span class="message message_error">Нет ожидающих заказов. Пожалуйста, попытайтесь позже.</span>';

         exit;

      }

   ?>

      <ul class="interface__list">

   <?

      while (!feof($fp)) {

         $order = fgets($fp, 999);

         if (!empty($order)) {

         ?>

         <li class="interface__item"> <? echo $order; ?> </li>

         <?

         } 

      }

   ?>

      </ul>

   <?

      fclose($fp);
   
   ?>

   </div>
</main>

<? require_once('footer.php'); ?>