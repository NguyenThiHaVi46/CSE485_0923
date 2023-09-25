<?php
  $keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
  );
  $values = array(
    "field1value" =>"dinosaur",
    "field2value" =>"pig",
    "field3value" =>"platypus"
  );

  $keysAndValues = array_combine($keys, $values);
  foreach($keysAndValues as $key=>$value) {
    echo $key . "=". $value."<br>
    ";
  }
  print_r($keysAndValues);
?>