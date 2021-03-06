<?

session_start();

class Page {

   // Атрибуты класса

   var $content;
   var $name;
   var $title = "TLA Consulting Pty Ltd";
   var $keywords = "'TLA Consulting, Three Letter Abbreviation, some of my best friends are search engines";
   var $buttons = array (

      'Форма заказа' => 'orderform-6.php',
      'Услуги' => 'services.php',
      'Регистрация' => 'register-6.php',
      'Авторизация' => 'author-6.php'

   );

   var $buttonsAuth = array (

      'Форма заказа' => 'orderform-6.php',
      'Услуги' => 'services.php',
      'Карта сайта' => 'map.php',
      'Выйти' => 'quot.php'

   );

   // Операции класса Page

   function SetContent($newContent) {

      $this -> content = $newContent;

   }

   function SetTitle($newTitle) {

      $this -> title = $newTitle;

   }

   function SetKeywords($newKeywords) {

      $this -> keywords = $newKeywords;

   }

   function SetButtons($newButtons) {

      $this -> buttons = $newButtons;

   }

   function SetName($newName) {

      $this -> name = $newName;

   }

   function Display() {

      $this -> authorization();

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

            if (isset($_SESSION['login'])) {

               $this -> DisplayMenu($this -> buttonsAuth);

            } else {

               $this -> DisplayMenu($this -> buttons);

            }

            echo $this -> content;

            ?>
            
            </div>
         </main>

      <?

      $this -> DisplayFooter();

   }

   function DisplayTitle() {

      echo '<title>' . $this -> title . '</title>';

   }

   function DisplayName() {

      echo $this -> name;

   }

   function DisplayKeywords() {

      echo '<meta name=\'keywords\' content=\''. $this->keywords . '\'>';

   }

   function DisplayHeader() {

      ?>

      <header class="header container">
         <div class="box header__box">
            <span class="lab">Лабораторная работа №6 по теме:</span>
            <span class="theme">"<? echo $this -> DisplayName(); ?>"</span>
            <span class="shop-name">Магазин спорттоваров 
               <div class="logo">
                  <svg viewBox="0 0 281 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g clip-path="url(#clip0)">
                     <g clip-path="url(#clip1)">
                     <path d="M54.3967 34.3056V37.9167H38.5923V46.2222H34.9168V34.3056H54.3967Z" fill="#1178F0"/>
                     <path d="M34.9168 65H66.1582V34.3056H59.5424V37.9167H62.4827V61.3889H38.5923V51.2778H34.9168V65Z" fill="#1178F0"/>
                     <path d="M31.2414 30.6944V18.7778H27.5659V27.0833H11.7747V30.6944H31.2414Z" fill="#1178F0"/>
                     <path d="M27.5659 13.7222H31.2414V0H0V30.6944H6.62905V27.0833H3.67545V3.61111H27.5659V13.7222Z" fill="#1178F0"/>
                     <path d="M13.9667 37.9167V34.3056H0V65H31.2414V58.5H27.5659V61.3889H3.67545V37.9167H13.9667Z" fill="#1178F0"/>
                     <path d="M31.2414 53.4632H27.5659V37.9167H19.1124V34.3056H31.2414V53.4632Z" fill="#1178F0"/>
                     <path d="M66.1582 30.6944V0H34.9168V6.52744H38.5923V3.61111H62.4827V27.0833H52.1914V30.6944H66.1582Z" fill="#1178F0"/>
                     <path d="M34.9168 30.6944H47.0458V27.0833H38.5923V11.5556H34.9168V30.6944Z" fill="#1178F0"/>
                     <path d="M34.2192 57.7778V54.1667H11.0264V38.6389H7.35092V57.7778H34.2192Z" fill="#1178F0"/>
                     <path d="M11.0264 10.8333H26.8308V7.22222H7.35092V33.5833H11.0264V10.8333Z" fill="#1178F0"/>
                     <path d="M55.1318 54.1667H39.3274V57.7778H58.8073V31.4167H55.1318V54.1667Z" fill="#1178F0"/>
                     <path d="M55.1318 10.8333V26.3611H58.8073V7.22222H31.9764V10.8333H55.1318Z" fill="#1178F0"/>
                     <path d="M47.7809 33.5833H51.4564V14.4444H39.3274V18.0556H47.7809V33.5833Z" fill="#1178F0"/>
                     <path d="M14.7018 50.5556H26.8308V46.9444H18.3773V31.4167H14.7018V50.5556Z" fill="#1178F0"/>
                     <path d="M47.7809 46.9444V38.6389H51.4564V50.5556H31.9764V46.9444H47.7809Z" fill="#1178F0"/>
                     <path d="M34.1817 14.4444V18.0556H18.3773V26.3611H14.7018V14.4444H34.1817Z" fill="#1178F0"/>
                     </g>
                     </g>
                     <path d="M96.489 29.3474H100.699C104.08 29.3474 105.771 31.5869 105.771 36.0659V38.7046C105.771 43.1836 104.08 45.4231 100.699 45.4231H96.1566C92.7757 45.4231 91.0852 43.1836 91.0852 38.7046V37.1256H96.1566V39.3722C96.1566 39.6406 96.2333 39.8773 96.3867 40.0822C96.5344 40.2871 96.7163 40.3895 96.9322 40.3895H100.29C100.506 40.3895 100.691 40.2871 100.844 40.0822C100.992 39.8773 101.066 39.6406 101.066 39.3722V36.3202C101.066 36.0447 100.992 35.8045 100.844 35.5996C100.691 35.4018 100.506 35.3029 100.29 35.3029H96.0798C92.6933 35.3029 91 33.0634 91 28.5844V26.2954C91 21.8164 92.6933 19.5769 96.0798 19.5769H100.376C103.756 19.5769 105.447 21.8164 105.447 26.2954V27.2068H100.376V25.6384C100.376 25.3629 100.299 25.1227 100.145 24.9178C99.9977 24.72 99.813 24.6211 99.5914 24.6211H96.489C96.2674 24.6211 96.0827 24.72 95.935 24.9178C95.7815 25.1227 95.7048 25.3629 95.7048 25.6384V28.3301C95.7048 28.5985 95.7815 28.8352 95.935 29.0401C96.0827 29.2449 96.2674 29.3474 96.489 29.3474ZM118.701 45.4231H117.84C116.448 45.4231 115.331 45.0169 114.49 44.2044V53H109.001V20.0856H113.629V21.9188C114.476 20.3575 115.879 19.5769 117.84 19.5769H118.701C122.081 19.5769 123.772 21.8164 123.772 26.2954V38.7046C123.772 43.1836 122.081 45.4231 118.701 45.4231ZM114.49 25.4795V39.5205C114.49 39.789 114.564 40.0257 114.712 40.2306C114.859 40.4354 115.044 40.5379 115.266 40.5379H117.516C117.732 40.5379 117.916 40.4354 118.07 40.2306C118.218 40.0257 118.291 39.789 118.291 39.5205V25.4795C118.291 25.211 118.218 24.9743 118.07 24.7694C117.916 24.5646 117.732 24.4621 117.516 24.4621H115.266C115.044 24.4621 114.859 24.5646 114.712 24.7694C114.564 24.9743 114.49 25.211 114.49 25.4795ZM142.267 26.2954V38.7046C142.267 43.1836 140.577 45.4231 137.196 45.4231H132.568C129.187 45.4231 127.497 43.1836 127.497 38.7046V26.2954C127.497 21.8164 129.187 19.5769 132.568 19.5769H137.196C140.577 19.5769 142.267 21.8164 142.267 26.2954ZM136.787 40.1352V24.8224C136.787 24.5469 136.71 24.3102 136.557 24.1124C136.409 23.9076 136.224 23.8051 136.003 23.8051H133.753C133.537 23.8051 133.355 23.9076 133.207 24.1124C133.054 24.3102 132.977 24.5469 132.977 24.8224V40.1352C132.977 40.4036 133.054 40.6403 133.207 40.8452C133.355 41.0501 133.537 41.1525 133.753 41.1525H136.003C136.224 41.1525 136.409 41.0501 136.557 40.8452C136.71 40.6403 136.787 40.4036 136.787 40.1352ZM154.498 19.5769H155.564V26.1895H152.862C151.935 26.1895 151.472 26.7829 151.472 27.9698V44.9145H145.992V20.0856H150.978V22.4805C151.768 20.5448 152.941 19.5769 154.498 19.5769ZM165.297 40.9935H166.934V45.4231H163.09C159.709 45.4231 158.018 43.1836 158.018 38.7046V14.7022H163.499V20.0856H166.934V25.0238H163.499V38.5562C163.499 39.5029 163.649 40.1458 163.95 40.4849C164.252 40.824 164.7 40.9935 165.297 40.9935ZM195.699 19.5769H196.066C199.447 19.5769 201.137 21.8164 201.137 26.2954V44.9145H195.657V25.4795C195.657 25.211 195.58 24.9743 195.427 24.7694C195.279 24.5646 195.097 24.4621 194.881 24.4621H193.117C192.901 24.4621 192.716 24.5646 192.563 24.7694C192.415 24.9743 192.341 25.211 192.341 25.4795V44.9145H186.861V25.4795C186.861 25.211 186.784 24.9743 186.631 24.7694C186.483 24.5646 186.301 24.4621 186.085 24.4621H184.321C184.105 24.4621 183.92 24.5646 183.767 24.7694C183.619 24.9743 183.545 25.211 183.545 25.4795V44.9145H178.065V20.0856H183.051V21.3572C183.898 20.1703 185.182 19.5769 186.903 19.5769H187.27C189.287 19.5769 190.691 20.3575 191.48 21.9188C192.327 20.3575 193.733 19.5769 195.699 19.5769ZM215.252 21.9188V20.0856H219.871V44.9145H215.252V43.0812C214.405 44.6425 213.002 45.4231 211.041 45.4231H210.18C206.8 45.4231 205.109 43.1836 205.109 38.7046V26.2954C205.109 21.8164 206.8 19.5769 210.18 19.5769H211.041C213.002 19.5769 214.405 20.3575 215.252 21.9188ZM214.391 39.5205V25.4795C214.391 25.211 214.317 24.9743 214.169 24.7694C214.016 24.5646 213.831 24.4621 213.615 24.4621H211.365C211.149 24.4621 210.965 24.5646 210.811 24.7694C210.663 24.9743 210.59 25.211 210.59 25.4795V39.5205C210.59 39.789 210.663 40.0257 210.811 40.2306C210.965 40.4354 211.149 40.5379 211.365 40.5379H213.615C213.831 40.5379 214.016 40.4354 214.169 40.2306C214.317 40.0257 214.391 39.789 214.391 39.5205ZM232.111 19.5769H233.168V26.1895H230.474C229.542 26.1895 229.076 26.7829 229.076 27.9698V44.9145H223.596V20.0856H228.591V22.4805C229.38 20.5448 230.554 19.5769 232.111 19.5769ZM245.935 20.0856H251.339L247.248 31.7423L251.987 44.9145H246.506L242.748 34.5823H241.111V44.9145H235.622V12H241.111V28.9871H242.952L245.935 20.0856ZM259.351 19.5769H263.979C267.36 19.5769 269.05 21.8164 269.05 26.2954V34.328H259.76V39.5205C259.76 39.789 259.837 40.0257 259.99 40.2306C260.138 40.4354 260.323 40.5379 260.544 40.5379H262.794C263.01 40.5379 263.192 40.4354 263.34 40.2306C263.493 40.0257 263.57 39.789 263.57 39.5205V36.7759H269.05V38.7046C269.05 43.1836 267.36 45.4231 263.979 45.4231H259.351C255.97 45.4231 254.28 43.1836 254.28 38.7046V26.2954C254.28 21.8164 255.97 19.5769 259.351 19.5769ZM259.76 25.2781V29.856H263.57V25.2781C263.57 25.0096 263.493 24.773 263.34 24.5681C263.192 24.3632 263.01 24.2608 262.794 24.2608H260.544C260.323 24.2608 260.138 24.3632 259.99 24.5681C259.837 24.773 259.76 25.0096 259.76 25.2781ZM279.364 40.9935H281V45.4231H277.147C273.767 45.4231 272.076 43.1836 272.076 38.7046V14.7022H277.557V20.0856H281V25.0238H277.557V38.5562C277.557 39.5029 277.707 40.1458 278.008 40.4849C278.309 40.824 278.761 40.9935 279.364 40.9935Z" fill="#1178F0"/>
                     <defs>
                     <clipPath id="clip0">
                     <rect width="66.1582" height="65" fill="white"/>
                     </clipPath>
                     <clipPath id="clip1">
                     <rect width="66.1582" height="65" fill="white"/>
                     </clipPath>
                     </defs>
                  </svg>
               </div> 
            </span>
         </div>
      </header>

      <?

   }

   function DisplayMenu($buttons) {

      ?>

      <div class="interface-menu interface__menu">
         <ul class="interface-menu__list">

      <?

      while (list($text, $url) = each($buttons)) {

         $this -> DisplayButton($text, $url, !$this -> IsURLCurrentPage($url));

      }

      ?>

         </ul>
      </div>

      <?

   }

   function IsURLCurrentPage($url) {

      if (strpos($GLOBALS['SCRIPT_NAME'], $url) == false) {

         return false;

      } else {

         return true;

      }

   }

   function DisplayButton($text, $url, $active = true) {

      if ($active) {

         ?>

         <li class="interface-menu__item">
            <a href="<? echo $url; ?>" class="interface-menu__link btn btn_red"><? echo $text; ?></a>
         </li>

         <?

      } else {



      }

   }

   function DisplayFooter() {

      require_once('footer.php');

   }

   function register() {

      if (isset($_POST['reg'])) {

         $login = $_POST['login'];
         $fio = $_POST['fio'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         $doublePassword = $_POST['doublepassword'];

         if ($password != $doublePassword) {

            ?>

            <span class="message message_error">Пароли не совпадают</span>

            <?
            
         } else {

            require_once('db.php');

            $users = $connect -> query("SELECT `login` FROM users WHERE `login` = '$login'");

            $userEmail = $connect -> query("SELECT email FROM users WHERE email = '$email'");

            $users = count($users -> fetchAll(PDO::FETCH_ASSOC));

            $userEmail = count($userEmail -> fetchAll(PDO::FETCH_ASSOC));

            if ($users != 0) {

               ?>

               <span class="message message_error">Пользователь с таким логином уже зарегистрирован</span>

               <?

            } else if ($userEmail != 0) {

               ?>

               <span class="message message_error">Пользователь с таким E-mail уже зарегистрирован</span>

               <?

            } else {

               $passwordHash = password_hash($password, PASSWORD_BCRYPT, ['salt' => SALT]);

               $addUser = $connect -> query("INSERT INTO users (`login`, fio, email, `password`) VALUES ('$login', '$fio', '$email', '$passwordHash')");

               ?>

               <span class="message message_success">Вы успешно зарегестрировались</span>

               <?

            }

         }

      }

   }

   function authorization() {

      if (isset($_POST['author'])) {

         require_once('db.php');

         $userlogin = $_POST['userlogin'];
         $userpassword = $_POST['userpassword'];

         $verifyPassword = $connect -> query("SELECT `password` FROM users WHERE `login` = '$userlogin' LIMIT 1");

         $verifyPassword = $verifyPassword -> fetch(PDO::FETCH_ASSOC);

         $countUser = count($verifyPassword);

         if ($countUser != 0 && $verifyPassword) {

            if (password_verify($userpassword, $verifyPassword['password'])) {

               $_SESSION['login'] = $userlogin;

            } else {

               $_SESSION['error'] = 'Пароль введен неверно';

               header("Location: author-6.php");

            }

         } else {

            $_SESSION['error'] = 'Пользователь с таким логином не найден';

            header("Location: author-6.php");

         }

      }

   }

}

?>