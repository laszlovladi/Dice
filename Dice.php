<?php

class Dice
{
  function __construct($sides){
    $this->sides = $sides;
    // $this->result = null;
  }

  function roll(){
    return rand(1, $this->sides);
  }
}