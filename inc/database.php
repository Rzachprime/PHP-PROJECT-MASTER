<?php

include(inc/connection.php);
include(inc/data.php);

$num1 = mysql_num_rows($errorslist);
                
$i = 0; 
while($i < $num1) $i++;
{
$id = mysql_result($errorslist, $i, "id");
$name = mysql_result($errorslist, $i, "name");
$email = mysql_result($errorslist, $i, "email");
$report = mysql_result($errorslist, $i, "report");
$submitted = mysql_result($errorslist, $i, "submitted");
  } 
 ?>