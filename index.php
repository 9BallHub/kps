<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>SDKK</title>
<link rel="stylesheet" href="styl_1.css">
</head>


<body>
<script src="main.js"></script>




<section id="side">
<img id="rem" src="sdkk remm.png"/>
</section>



 <section id="head">
 <img id="logo" src="sdkk solutions 100.png"/>
 <a href="czekibreki.png"> <img id="system" src="system 100.png"> </a>


</section>

<section id="choice">
<form>
    Jaki proceq bratq
<select id="cpuchoice">
<?php
$connect = mysqli_connect("localhost", "root", "", "sdkkbase") OR DIE("ZDYCHAJ");
$sql1 = "SELECT `Name` FROM `cpu` ORDER BY id DESC;";
$query1=mysqli_query($connect,$sql1);
while($row=mysqli_fetch_array($query1))
{
echo "<option>".$row['Name']."</option>";
}
?>
</select>
</form>
</section>



<section id="pricing">
content2</br>
XDDD</br>
XDDD
</section>

<section id="chatbox">
0 75 12 860 

</section>











 <section id="bottom">
<img id="chiken" src="chickens.png"/>
</section> 

<?php
mysqli_close($connect);
?>

</body>

</html>