<?php 
  class A {
       const  MY_NAME = "Rakib Hossain";

       public function  about () {
           return self::MY_NAME;
       }
    
    }

    $obj = new A;
    echo $obj->about();

   echo A::MY_NAME;

?>