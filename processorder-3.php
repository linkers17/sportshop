<?

   require_once('db.php');

   $data = $_POST;

   $shirt = $data['shirt'];
   $trainers = $data['trainers'];
   $scooter = $data['scooter'];
   $wheel = $data['wheel'];
   $fio = $data['fio'];
   $address = $data['address'];

   $date = date('Y-m-d H:i:s', mktime());

   if (!$connect) {

      ?>

      <span class="message message_error">Не могу соединиться с сервером базы данных</span>

      <?

      exit;

   }

   ?>

   <span class="message message_success">Соединение с сервером базы данных прошло успешно.</span>

   <h1 class="interface-title interface__title">Результаты заказа</h1>
   <span class="interface__datetime">Заказ обработан в <? echo $date; ?></span>
   <h2 class="interface-subtitle interface__subtitle">Список Вашего заказа:</h2>
   <ul class="goods goods-list">

   <?

      if (!empty($shirt)) {

         ?> <li class="goods__item">Футболок: <? echo $shirt ?> шт.</li> <?
         
      } else {

         $shirt = 0;

      }

      if (!empty($trainers)) {

         ?> <li class="goods__item">Кроссовок: <? echo $trainers ?> шт.</li> <?

      } else {

         $trainers = 0;

      }

      if (!empty($scooter)) {

         ?> <li class="goods__item">Скутеров: <? echo $scooter ?> шт.</li> <?

      } else {

         $scooter = 0;

      }

      if (!empty($wheel)) {

         ?> <li class="goods__item">Велосипедов: <? echo $wheel ?> шт.</li> <?

      } else {

         $wheel = 0;

      }

      $totalGoods = 0;
      $totalGoods = $shirt + $trainers + $scooter + $wheel;

      if ($totalGoods == 0) {

         ?> <li class="goods__message goods__message_error">Вы ничего не заказали!</li> <?

      } else {

         ?>

            <li class="goods__message goods__message_success">Заказано товаров: <? echo $totalGoods;?> </li>

         <?

         $totalPrice = 0;

         define('SHIRTPRICE', 600);
         define('TRAINERS', 1700);
         define('SCOOTER', 4200);
         define('WHEEL', 11400);

         $totalPrice = $shirt * SHIRTPRICE + $trainers * TRAINERS + $scooter * SCOOTER + $wheel * WHEEL;

         ?>

            <li class="goods__total">Итого: <? echo $totalPrice; ?> руб.</li>
            <li class="goods__item">ФИО клиента: <? echo $fio; ?></li>
            <li class="goods__item">Адрес доставки: <? echo $address; ?></li>

         <?

         $orders = $connect -> query("INSERT INTO orders (fio, `address`, `date`) VALUES ('$fio', '$address', '$date')");
         $goods = $connect -> query("INSERT INTO goods (shirt, trainers, scooter, wheel) VALUES ('$shirt', '$trainers', '$scooter', '$wheel')");

         ?>

            <li class="goods__item message message_success">Заказ сохранен</li>

         <?

      }

?>

</ul>
<form action="orders-3.php" id="orders" method="POST">
   <input type="submit" name="orders" class="btn btn_yellow btn__submit" value="Интерфейс персонала для просмотра файла заказов">
</form>