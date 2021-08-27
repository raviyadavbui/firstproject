<?php
/*class Mango {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
$apple = new Mango();
$banana = new Mango();
$apple->set_name('Apple');
$banana->set_name('banana');


echo $apple->get_name();
echo'<br>';
echo $banana->get_name();*/

?>

<?php
/*class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("Apple");


echo $apple->get_name();*/

?>

<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->name="Mango";
$mango->color="Yellow";
$mango->weight="300";

echo $mango->name;
echo $mango->color;
echo $mango->weight;



//$mango->set_name('Mango'); // OK
//$mango->set_color('Yellow'); // ERROR
//$mango->set_weight('300'); // ERROR
?>