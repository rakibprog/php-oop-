<?php

  class A {
      public $name;
      public $age;
      public $id;

      function __construct($name,$age,$id)
      {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
      }

    public  function info () {

          return "this is my .$this->name. and this is my .$this->id. and this is my age .$this->age.";
      }

  }

 $obj = new A ('rakib','20',30);

 echo $obj->info();



?>