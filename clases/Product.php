<?php
declare(strict_types=1);

class Product
{
    const IVA_GENERAL = 0.21;

    // Declaración de una propiedad
    private string $name;
    private string $brand;
    private float $price;

    function __construct(string $name, string $brand, float $price) 
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function getFinalPrice()
    {
        return $this->price * (1 + self::IVA_GENERAL);
    }

    public static function estatica()
    {
        echo "Soy una funcion estatica";
    }
}



class ProductoElectronico extends Product
{
    const IVA_REDUCIDO = 0.10;

    private string $modelo;
    private string $operatingSystem;

    function __construct($name, $brand, $price, $modelo, $operatingSystem)
    {
        parent::__construct($name, $brand, $price);
        $this->modelo = $modelo;
        $this->operatingSystem = $operatingSystem;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    public function getFinalPrice()
    {
        return $this->getPrice() * (1 + self::IVA_REDUCIDO);
    }  

}

$productoElectronico1 = new ProductoElectronico("switch", "Nintendo", 200, "v2", "freeBsd");

echo $productoElectronico1->getFinalPrice();


// echo Product::estatica();

// $product1 = new Product("switch", "Nintendo", 259.32);

// echo $product1->getName();

// $product1->setName("zapato");

// echo $product1->getName();


// echo $product1->brand;

// $product1->name = "zapato";

// echo $product1->name;


// $product2 = new Product("plasystation", "Sony", 499);

// echo $product1->name;
// echo $product1->brand;
// echo $product2->name;
// echo $product2->brand;





// $product2 = new Product();




?>