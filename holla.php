<?php

 class Mathequations{
   //Mathequations properties;
   public $numone ;
   public $numtwo ;




  //Mathequations method setaddition

  public function __construct($numone , $numtwo){
    $this->  numone = $numone ;
    $this->  numtwo = $numtwo;


   
    
  }
    //Mathequations method getaddition
  public function get_add(){
$addi = $this->numone + $this->numtwo ;
return $addi ;
   
  }

     //Mathequations method subtraction
     public function get_sub(){
      $subtruct = $this->numone - $this->numtwo ;
      return $subtruct ;
         
        }

         //Mathequations method subtraction
     public function get_mul(){
      $mult = $this->numone * $this->numtwo ;
      return $mult ;
         
        }

          //Mathequations method subtraction
     public function get_div(){
      $div = $this->numone / $this->numtwo ;
      return $div ;
         
        }

  


 }


