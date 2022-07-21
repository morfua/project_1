<?php
class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother = null, $father = null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  // function sayHi($name)
  // {
  //   return "Hi $name, I`m " . $this->name;
  // }
  function setHp($hp)
  {
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName()
  {
    return $this->name;
  }
  function getLastname()
  {
    return $this->lastname;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getFather()
  {
    return $this->father;
  }

  function getInfo()
  {
    return "<h1>About my family</h1><br>" . "My name is: " . $this->getName() . "<br> my lastname is: " . $this->getLastname() .
      "<br>my father is: " . $this->getFather()->getName() .
      "<br>my grandMather is: " . $this->getFather()->getMother()->getName() .
      " and " . $this->getMother()->getMother()->getName() .
      "<br>my grandFather is: " . $this->getFather()->getFather()->getName() .
      " and " . $this->getFather()->getMother()->getName();
  }
}
$pasha = new Person("Pasha", "Voronov", 73);
$natasha = new Person("Natasha", "Voronova", 71);

$sasha = new Person("Sasha", "Lokteva", 68);
$masha = new Person("Masha", "Lokteva", 65);


$alex = new Person("Alex", "Voronov", 42, $natasha, $pasha);
$olga = new Person("Olga", "Voronov", 42, $masha, $sasha);
$valera = new Person("Valera", "Voronov", 15, $olga, $alex);
//echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();






//$alex->name = "Alex";
//echo $alex->name;
//echo $alex->sayHi($igor->name);
//Здоровье человека не может быть более 100 ед.
// $medKit = 50;
// //$alex->hp = $alex->hp - 30; //Шел и упал
// $alex->setHp(-30);
// //echo $alex->hp . "<br>";
// echo $alex->getHp() . "<br>";
// //$alex->hp = $alex->hp + $medKit; //Нашел аптечку
// $alex->setHp($medKit);
// //echo $alex->hp;
// echo $alex->getHp();
