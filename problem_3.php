<?php
class Vehicle {
    public $brand;
    public $model;
    public $year;
    public $price;

    function __construct($brand, $model, $year, $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }

    function getDetails() {
        return "Brand: " . $this->brand . ", Model: " . $this->model . ", Year: " . $this->year . ", Price: $" . $this->price . "K";
    }
}

$vehicle1 = new Vehicle("Toyota", "Supra", 2020, 56.2);
$vehicle2 = new Vehicle("Honda", "NSX", 2019, 302.6);
$vehicle3 = new Vehicle("Ford", "GT", 2021, 500);
$vehicle4 = new Vehicle("Chevrolet", "Corvette", 2018, 86.6);
?>

<!DOCTYPE html>
<html>
<body>
<h1>Vehicles</h1>

<?php
echo "<p>" .$vehicle1->getDetails() . "<br></p>"; 
echo "<p>" .$vehicle2->getDetails() . "<br></p>"; 
echo "<p>" .$vehicle3->getDetails() . "<br></p>"; 
echo  $vehicle4->getDetails() ; 
//echo "<p>" .$vehicle1->brand . "<br></p>";
//echo "<p>" .$vehicle1->model . "<br></p>";
//echo "<p>" .$vehicle1->year . "<br></p>";
//echo $vehicle1->price;
?>
<style >
body {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  font-family: "Courier New", Courier, monospace;
}

</style>
</body>
</html>
