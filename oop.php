<?php
class fruit { 
    //properties
    public $name;
    public $color;
    protected $type;

    //methods
    function setname($name) {
        $this->name = $name;

    }

    function getname() {
        return $this->name;
    }

    //method
    function setcolor($color) {
        $this->color = $color;

    }

    function getcolor() {
        return $this->color;
    }

}

$apple = new fruit();
$apple->setname("apple");

echo $apple->getname();

echo "<br>";

$mango = new fruit();
$mango->setname("mango");

echo $mango->getname();

echo "<br>";

$mango->setcolor("green");

echo $mango->getcolor();

echo"<br>";

class car{
    public $color;
    public $model;

    function __construct($model) {
        $this->model = $model;

    }

    function getmodel() {
        return $this->model;
    }
}

$toyota = new car("2025");

echo $toyota->getmodel();

$toyota->color = "red";

echo $toyota->color;

echo "<br>";

// class inheritance
class vegetable extends fruit {
    public $nutrients; 
    functionsetType($type{
        $this->$type;
    })

    function getType() {
        return $this->$type
    }
}
$punkinleaf = new vegetable();
$punkinleaf ->setname("punkin leaf");

echo $punkinleaf->getname();

echo '<br>'

$apple->type = "pome";
echo $apple->type;

echo ponkinleaf-setType("BERRY");

echo $ponkinleaf_>gettype;


?>