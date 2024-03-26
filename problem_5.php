<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

class Employee extends Person {
    public $salary;
    public $position;

    public function __construct($name, $age, $salary, $position) {
        parent::__construct($name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function getDetails() {
        return "Name: " . $this->name . ", Age: " . $this->age . ", Salary: " . $this->salary . ", Position: " . $this->position;
    }
}

// Create an instance of the Employee class
$employee = new Employee("Clark Kent", 30, 50000, "Proof Reader");

?>

<!DOCTYPE html>
<html>
<body>
<h1>Employee details</h1>

<?php
echo "<p>". $employee->getDetails() ."<br></p>"; 

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
