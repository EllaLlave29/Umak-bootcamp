<?php

class personInfo{
  public $name;
  public $age;
  public $gender;
  public $favcolor;
  public $favfood;
  public $favflavor;
  public $Hobby;
  
  function setName($name){
    $this->name = $name;
  }
  function getName(){
    return $this->name;
  }
  function setAge($age){
    $this->age = $age;
  }
  function getAge(){
    return $this->age;
  }
  function setGender($gender){
    $this->gender = $gender;
  }
  function getGender(){
    return $this->gender;
  }
  function setFavcolor($favcolor){
    $this->color = $favcolor;
  }
  function getFavcolor(){
    return $this->color;
  }
  function setFavfood($favfood){
    $this->food = $favfood;
  }
  function getFavfood(){
    return $this->food;
  }
  function setFavflavor($favflavor){
    $this->flavor = $favflavor;
  }
  function getFavflavor(){
    return $this->flavor;
  }
  function setHobby($Hobby){
    $this->hobby = $Hobby;
  }
  function getHobby(){
    return $this->hobby;
  }
}
  $mySelf = new personInfo();
  $mySelf->setName("John Oliver Abraham");
  $mySelf->setAge(21);
  $mySelf->setGender("Male");
  $mySelf->setHobby("playing computer games");
  $mySelf->setFavflavor("Mint Chocolate, BubbleGum, Matcha");
  $mySelf->setFavfood("Pizza");
  $mySelf->setFavcolor("Orage");
  
  echo  "Name: ".$mySelf->getName()."<br/>";
  echo  "Age: ".$mySelf->getAge()."<br/>";
  echo  "Gender: ".$mySelf->getGender()."<br/>";
  echo  "Hobby: ".$mySelf->getHobby()."<br/>";
  echo  "Favorite Flavor: ".$mySelf->getFavflavor()."<br/>";
  echo  "Favorite Food: ".$mySelf->getFavfood()."<br/>";
  echo  "Favorite Color: ".$mySelf->getFavcolor()."<br/>";
?>