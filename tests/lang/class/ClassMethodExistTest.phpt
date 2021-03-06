--TEST--
Class method exist test
--FILE--
<?php
if (class_exists("Person")) {
   $p = new Person; 
   if (method_exists($p, "showName")) {
       echo "method Person::showName exists\n";
   }
   if (method_exists($p, "print_sum")) {
       echo "method Person::print_sum exists\n";
   }
   if (method_exists($p, "setAge")) {
       echo "method Person::setAge exists\n";
   }
   if (method_exists($p, "addTwoNum")) {
       echo "method Person::addTwoNum exists\n";
   }
   if (method_exists($p, "addSum")) {
       echo "method Person::addSum exists\n";
   }

}
?>
--EXPECT--
method Person::showName exists
method Person::print_sum exists
method Person::setAge exists
method Person::addTwoNum exists
method Person::addSum exists
