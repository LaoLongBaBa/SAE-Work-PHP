<?php
$num=['1','2','3','4','5'];
array_splice($num,3,0,'$');
print_r($num);