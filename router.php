<?

// exit(var_dump($_SERVER['REQUEST_URI']));

$mvcPath = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL); //	Удаляет все символы, кроме букв, цифр и $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
$mvcPath = mb_substr($mvcPath,4); //удаление первых 4 символов 

$path = explode('/',$mvcPath); // разбиваем строку на массив
//exit(var_dump($path));

if ($path[1] == "") { 
  require_once('controllers/HomeController.php');//разделяем сайт на страницы
  $controller = new HomeController();
  $controller->index();
  exit();
  
} elseif ($path[1] == "about") {
  require_once('controllers/AboutController.php');//разделяем сайт на страницы
  $controller = new AboutController();
  $controller->index();
  exit();
  /* По аналогии со стр home сделать страницу about*/
  
} elseif ($path[1] == "products") {
  echo "Список товаров";
  exit();
  
} elseif ($path[1] == "product") {
  echo "Страничка товара";
  exit();
  
} elseif ($path[1] == "cart") {
  echo "Корзина";
  exit();
  
} else {
  echo "404 not found";
  exit();
}

