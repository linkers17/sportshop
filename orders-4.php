<? require_once('header.php'); ?>

<main class="content container">
         
   <? require_once('nav.php'); ?>

   <div class="interface box interface__box">

   <?
   
      // Считывание всего файла
      // Каждый заказ становится элементом массива

      $orders = file('orders_4.txt');

      // Подсчет кол-ва заказов, хранящихся в массиве

      $countOrders = count($orders);

      if ($countOrders == 0) {

         echo '<span class="message message_error">Нет ожидающих заказов. Пожалуйста, попытайтесь позже.</span>';

         exit;

      }

      ?>

      <div class="interface-table interface__table">
         <div class="interface-table__title">Заказы клиентов</div>
         <div class="interface-table__head">
            <div class="interface-table__col">Дата заказа</div>
            <div class="interface-table__col interface-table__col_sm">Фут.</div>
            <div class="interface-table__col interface-table__col_sm">Крос.</div>
            <div class="interface-table__col interface-table__col_sm">Сам.</div>
            <div class="interface-table__col interface-table__col_sm">Вел.</div>
            <div class="interface-table__col interface-table__col_sm">Всего</div>
            <div class="interface-table__col">Адрес</div>
            <div class="interface-table__col">ФИО</div>
         </div>

      <?

      for ($i = 0; $i < $countOrders; $i++) {

         // Разбиение строк

         $line = explode("\t", $orders[$i]);

         // Сохранение только количества заказанных товаров

         $line[1] = intval($line[1]);
         $line[2] = intval($line[2]);
         $line[3] = intval($line[3]);
         $line[4] = intval($line[4]);

         // Вывод заказов

         ?>

         <div class="interface-table__row">
            <div class="interface-table__col"><? echo $line[0]; ?></div>
            <div class="interface-table__col interface-table__col_sm"><? echo $line[1]; ?></div>
            <div class="interface-table__col interface-table__col_sm"><? echo $line[2]; ?></div>
            <div class="interface-table__col interface-table__col_sm"><? echo $line[3]; ?></div>
            <div class="interface-table__col interface-table__col_sm"><? echo $line[4]; ?></div>
            <div class="interface-table__col interface-table__col_sm"><? echo $line[5]; ?></div>
            <div class="interface-table__col"><? echo $line[6]; ?></div>
            <div class="interface-table__col"><? echo $line[7]; ?></div>
         </div>

         <?

      }
   
      ?>

      </div>
   </div>
</main>

<? require_once('footer.php'); ?>