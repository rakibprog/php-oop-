<?php 
 abstract class A {
      

     abstract public function  helloWorld();
       
 }

 class B extends A {
    public function helloWorld()
    {
        return "hello world";
    }
 }

 $obj = new B;
 
 echo $obj->helloWorld();
?>