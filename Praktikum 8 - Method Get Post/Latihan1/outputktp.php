<html>
<head><title>Data KTP
</title></head>
<body>
<?php

$nik=$_GET["nik"];
$nama=$_GET["nama"];
$lahir=$_GET["lahir"];
$kelamin=$_GET["kelamin"];
$alamat=$_GET["alamat"];
$agama=$_GET["agama"];
$status=$_GET["status"];
$kerja=$_GET["kerja"];
$berlaku=$_GET["berlaku"];
if($nik==false || $nama==false || $lahir==false || $kelamin==false || $alamat==false || $agama==false || $status==false || $kerja==false || $berlaku==false){
echo "<font style='color:red;'>profila tidak lengkap</font><br/>";
}else{
$baris=array("$nik","$nama","$lahir","$kelamin","$alamat","$agama","$status","$kerja","$berlaku");
$nik=$baris[0]; $nama=$baris[1]; $lahir=$baris[2]; $kelamin=$baris[3]; $alamat=$baris[4]; $agama=$baris[5]; $status=$baris[6]; $kerja=$baris[7]; $berlaku=$baris[8];
echo '<table width="900px"bgcolor="#DFEBF8"cellpadding="4px"align="left">';echo '<tr>';echo '<th width="120px">nik</th>';echo '<th width="120px">nama</th>';echo '<th width="120px">lahir</th>';echo '<th style="width:120px;">kelamin</th>';echo '<th width="120px">alamat</th>';echo '<th width="120px">agama</th>';echo '<th width="112spx">status</th>';echo '<th width="100px">kerja</th>';echo '<th width="100px">berlaku</th>';echo '</tr>';echo '</table>';
echo '<table width="900px"bgcolor="white"cellpadding="2px"border="1px"bordercolor="#DFEBF8"align="left;">';echo '<tr>';echo '<form method="GET"action="dataktp2.php">';echo '<td width="100px">'.$nik.'</td>';echo '<td width="100px">'.$nama.'</td>';echo '<td width="100px">'.$lahir.'</td>';echo '<td width="100px">'.$kelamin.'</td>';echo '<td width="100px">'.$alamat.'</td>';echo '<td width="100px">'.$agama.'</td>';echo '<td width="100px">'.$status.'</td>';echo '<td width="100px">'.$kerja.'</td>';echo '<td width="100px">'.$berlaku.'</td>';echo '</form>';echo '</tr>';echo '</table>';
}?>
</body>
</html>