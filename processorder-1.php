<?

   $data = $_POST;

   $shirt = $data['shirt'];
   $trainers = $data['trainers'];
   $scooter = $data['scooter'];
   $wheel = $data['wheel'];
   $searchshop = $data['searchshop'];

?>

<h1 class="interface-title interface__title">Результаты заказа</h1>
<span class="interface__datetime">Заказ обработан в <? echo date('H:i, j.m.Y'); ?></span>
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
         <?
            $taxRate = 1.1;

            $totalPrice = $totalPrice * $taxRate;

         ?>
            <li class="goods__total">Итого, включая налог с продаж: <? echo $totalPrice; ?> руб.</li>
            <li class="goods__item">На вопрос "Как Вы нашли наш магазин?" был получен ответ: <span class="goods__find"> <? echo $searchshop; ?></span></li>
         <?

      }
   ?>
</ul>