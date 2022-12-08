<?php
    class A {

        public $name = 'rakib';
        public $age  = '20';
        public $education = 'cse';


        private function myBio() {
            return "my name is .$this->name.";
        }
    }


    $obj = new A;
    echo  $obj->myBio();
   
?>