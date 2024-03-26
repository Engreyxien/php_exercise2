<?php
class Rectangle {
  public $length;
  public $width;
  
  function __construct($length, $width){
    $this->length = $length;
    $this->width = $width;
  }

  public function getArea() {
    return $this->length * $this->width;
  }

  public function getPerimeter() {
    return 2 * ($this->length + $this->width);
  }
}

$rect = new Rectangle(10, 5);
?>

<!DOCTYPE html>
<html>
<body>
<h1>Area and Perimeter of a Rectangle</h1>

<?php
echo "<p>Length: " . $rect->length . "</p>";
echo "<p>Width: " . $rect->width . "</p>";
echo "<p>Area: " . $rect->getArea() . "<br></p>";
echo "<p>Perimeter: " . $rect->getPerimeter() . "</p>";

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