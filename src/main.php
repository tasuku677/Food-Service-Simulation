<?php
spl_autoload_extensions(".php");
spl_autoload_register(function($class){
    $base_dir = __DIR__.'/';
    $file = $base_dir.str_replace('\\', '/', $class). '.php';
    if(file_exists($file)){
        require_once $file;
    }
});


$cheeseBurger = new \FoodItems\CheeseBurger("cheese burger", "Bun and Beef Pattty only", 30);
$fettucine = new \FoodItems\Fettuccine("fettucine", "little ribbons", 50);
$hawaianPizza = new \FoodItems\HawaianPizza("hawaian pizza", "high calories pizza", 40);
$spaghetti = new \FoodItems\Spaghetti("spaghetti", "traditional peperoncino", 10);

echo $cheeseBurger;