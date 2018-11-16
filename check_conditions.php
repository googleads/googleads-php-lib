<?php
if (PHP_INT_SIZE === 4) {
  print "\033[1;97;41mYou are using the 32-bit PHP. Please beware that when you"
      . " pass numeric values that exceed the 32-bit PHP_INT_MAX to intval(),"
      . " you'll not get a correct value.\nIf you plan to try our code examples"
      . ", please change all instances of intval() to floatval() first.\n"
      . " In addition, when writing your own code, do not apply intval() on any"
      . " attributes that are explicitly an integer.\n\033[0m";
}
