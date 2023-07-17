<?php
   interface a{
      public function printData();
   }
   interface b{
      public function getData();
   }
   interface c extends a, b {
      public function addData();
   }
   class d implements c{
      public function printData(){
         echo "I am printing"; 
      }
      public function getData(){
         echo "I am reading data";
      }
      public function addData(){
         echo "I am adding";
      }
   }
   $myobj = new d();
   $myobj->printData();
   $myobj->addData();
   $myobj->addData();
?>