<?php
include("phpqrcode/qrlib.php");
$path='generated qr/';
$filename=$path.uniqid().".png";
if(isset($_POST['name'])){
$text=$_POST['name'].$_POST['course'].$_POST['mentor'].$_POST['sdate'].$_POST['edate'];

QRcode::png($text,$filename,'L',3,3);
$qr ="<center><img src='".$filename."'></center>";
echo $qr;
}

?>
<form action="geekqr.php" method="POST">
<CENTER>
<h1>NAME</h1><br>
<input type="text" name="name" required>
<h1>COURSE</h1><br>
<input type="text" name="course" required>
<h1>MENTOR</h1><br>
<input type="text" name="mentor" required><br>
<h1> starting date </h1>
<input type="text" name="sdate" required></br>
<h1> ending date </h1>
<input type="text" name="edate" required></br>

<br><br>
<input type="submit" value="submit" >

</CENTER>

</form>