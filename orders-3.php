<? require_once('header.php'); ?>

<main class="content container">
         
   <? require_once('nav.php'); ?>

   <div class="interface box interface__box">
   
      <?

      if (!$connect) {

         ?>

         <span class="message message_error">Не могу соединиться с сервером базы данных</span>

         <?

         exit;

      }

      ?>

      <span class="message message_success">Соединение с сервером базы данных прошло успешно.</span>

      <?

      $orders = $connect -> query("SELECT `orders_id`, `fio`, `address`, `date`, `shirt`, `trainers`, `scooter`, `wheel` FROM orders o, goods g WHERE `orders_id` = `goods_id`");

      ?>

      <div class="interface-table interface__table">
         <div class="interface-table__title">Заказы клиентов</div>
         <div class="interface-table__head">
            <div class="interface-table__col interface-table__col_sm">№</div>
            <div class="interface-table__col">ФИО</div>
            <div class="interface-table__col">Адрес</div>
            <div class="interface-table__col">Дата заказа</div>
            <div class="interface-table__col interface-table__col_sm">Фут.</div>
            <div class="interface-table__col interface-table__col_sm">Крос.</div>
            <div class="interface-table__col interface-table__col_sm">Сам.</div>
            <div class="interface-table__col interface-table__col_sm">Вел.</div>
         </div>

         <?
         
         $orders = $orders -> fetchAll(PDO::FETCH_ASSOC);

         foreach($orders as $order) {

            ?>

            <div class="interface-table__row">
               <div class="interface-table__col interface-table__col_sm"><? echo $order['orders_id'] ?></div>
               <div class="interface-table__col"><? echo $order['fio'] ?></div>
               <div class="interface-table__col"><? echo $order['address'] ?></div>
               <div class="interface-table__col"><? echo $order['date'] ?></div>
               <div class="interface-table__col interface-table__col_sm"><? echo $order['shirt'] ?></div>
               <div class="interface-table__col interface-table__col_sm"><? echo $order['trainers'] ?></div>
               <div class="interface-table__col interface-table__col_sm"><? echo $order['scooter'] ?></div>
               <div class="interface-table__col interface-table__col_sm"><? echo $order['wheel'] ?></div>
            </div>

            <?

         }
         
         ?>

      </div>

   </div>
</main>

<? require_once('footer.php'); ?>