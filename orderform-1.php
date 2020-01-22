<h1 class="interface-title interface__title">Форма заказа</h1>
<div class="form-wrapper">
   <form class="form" id="suborder-1" action="" method="POST">
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
         <label class="form__label" for="wheel">Как Вы нашли наш магазин?</label>
         <select name="searchshop" id="searchshop">
            <option value="Я регулярный клиент">Я регулярный клиент</option>
            <option value="В телевизионной рекламе">В телевизионной рекламе</option>
            <option value="В телефонном справочнике">В телефонном справочнике</option>
            <option value="Кто-то порекомендовал">Кто-то порекомендовал</option>
         </select>
      </div>
      <div class="form__row">
         <input type="submit" class="btn btn_green form__btn submit" value="Отправить заказ">
      </div>
   </form>
</div>