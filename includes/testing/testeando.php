<?php

class Person {
    public $age;
    public $name;
    public $gender;

    public function getAge() {
      return $this->age;
    }
    public function setAge($value) {
      $this->age = $value;
    }

    public function getName() {
      return $this->name;
    }
    public function setName($value) {
      $this->name = $value;
    }

    public function getGender() {
      return $this->gender;
    }
    public function setGender($value) {
      $this->gender = $value;
    }

}

class Developer extends Person {
    public function Languajes() {
        echo "I can write c++ code";
    }
}

class Designer extends Developer {
    public function Design() {
        echo "I'm designing";
    }
}

?>