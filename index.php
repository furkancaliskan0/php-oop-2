<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2
    </title>
</head>
<style>
    * {
        background-color: blue;
        color: white;
    }
</style>

<body>

    <?php
    class Product
    {
        public $name;
        public $animal;
        public $price;

        public function __construct($name, $animal, $price)
        {
            $this->name = $name;
            $this->animal = $animal;
            $this->price = $price;
        }

        public function getHtml()
        {

            return "
            <h1> name: " . $this->name . "</h1>"
                . "<h2> animal: " . $this->animal . "</h2>"
                . "<h2> price: " . $this->price . "</h2>";
        }

    }

    $products = [
        new Product("croccantini", "cani", "10 euro"),
        new Product("croccantini", "gatti", "7 euro")
    ];

    foreach ($products as $product) {

        echo $product->getHtml();
    }
    ?>



</body>

</html>