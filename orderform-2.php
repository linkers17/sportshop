<h1 class="interface-title interface__title">Форма заказа</h1>
<div class="form-wrapper">
   <form class="form" id="suborder-2" action="" method="POST">
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