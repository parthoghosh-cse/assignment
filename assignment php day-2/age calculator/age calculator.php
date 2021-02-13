<?php

function info($birth_year){
  $age= date('Y')-$birth_year;
  echo"You are $age years old";
}
 info(1995);