<?php
$field_values_array = $_REQUEST['field_name'];

print '<pre>';
print_r($_REQUEST['field_name']);
print '</pre>';

foreach($field_values_array as $value){
   print $value;
   echo '<br/>';
}
print 'print';
?>