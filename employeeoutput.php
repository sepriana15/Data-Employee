<?php
$namalengkap = $_POST["namalengkap"];



$title = $_POST["Title"];
if ($_POST['Title'] == "Desainer"){
    $title = "Desainer";
    $salary = "Rp.10.000.000";
    $salary_day = "Rp.355.000";
} elseif ($_POST['Title'] == "SQA"){
    $title = "SQA";
    $salary = "Rp.11.000.000";
    $salary_day = "Rp.366.000";
} elseif ($_POST['Title'] == "Programmer"){
    $title = "Programmer";
    $salary = "Rp.9.000.000";
    $salary_day = "Rp.300.000";
}
?>


<p>
Berikut Informasi tentang Pegawai :
</p>

<table border="0">
    <tr>
        <td width="165">Nama Pegawai</td>
        <td width="250">:<strong><?php echo "$namalengkap"?></strong></td>
    </tr>
    <br>
    <tr>
        <td>Title</td>
        <td>:<strong><?php echo " ".$title?></strong></td>
    </tr>
    <br>
    <tr>
        <td>Salary</td>
        <td>:<strong><?php echo " ".$salary?></strong></td>
    </tr>
    <br>
    <tr>
        <td>Salary of Day</td>
        <td>:<strong><?php echo " ".$salary_day?></strong></td>
    </tr>
  