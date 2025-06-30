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

$Inavash = new \People\Employees\Chef("Inavash", 40, "Osaka", 1, 30);
$Nadia = new \People\Employees\Cashier("Nadia", 30, "Tokyo", 2, 20);

$saizeriya = new \Restaurants\Restaurant([
    "CheeseBurger" => $cheeseBurger,
    "Fettuccine" => $fettucine, 
    "HawaianPizza" => $hawaianPizza,
    "Spaghetti" => $spaghetti
], [$Inavash, $Nadia]);

$interestedTasteMap = [
    "HawaianPizza" => 1,
    "CheeseBurger" => 2,
    "Spaghetti" => 1,
];

$Tom = new \People\Customers\Customer("Tom", 20, "Saitama", $interestedTasteMap);

$invoice = $Tom->order($saizeriya, $Tom->interestedCategories($saizeriya));

echo $invoice;