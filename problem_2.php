<?php
class Circle {
    public $radius;

    function __construct($radius) {
        $this->radius = $radius;
    }

    function getArea() {
        return pi() * $this->radius * $this->radius;
    }

    function getCircumference() {
        return 2 * pi() * $this->radius;
    }
}

// Example usage:
$myCircle = new Circle(5);
?>

<!DOCTYPE html>
<html>
<body>
<h1>Area and Circumference of a Circle</h1>

<?php
echo "<p>Radius: " . $myCircle->radius . "</p>";
echo "<p>Area: " . $myCircle->getArea() . "<br></p>";
echo "Circumference: " . $myCircle->getCircumference();
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