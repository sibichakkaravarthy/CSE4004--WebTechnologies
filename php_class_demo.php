<!DOCTYPE html>
<html>
<body>

<?php
class Car {
    function Car() {
        $this->model = "VW"; //$this --> used to access members of a class
    }
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>

</body>
</html>
