<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>SDKK</title>
<link rel="stylesheet" href="styl_1.css">
<link rel="icon" type="image/x-icon" href="favicon.ico">
</head>


<body>
<script src="main.js"></script>




<section id="side">
<a href="index.php">
<img id="remil" src="sdkk remm.png"/></br></br>
</a>
<p><a href="faq.php">
FAQ</a></p>

</section>



 <section id="head">
 <img id="logo" src="sdkk solutions 100.png"/>
 <a href="czekibreki.png"> <img id="system" src="system 100.png"></a>
 <img src="blackyellow.png" onclick="document.body.classList.toggle('dark-theme')"/>




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
 
<section id="boxbox">
Create a square here
</section>

</section>











 <section id="bottom">
<a href="https://www.youtube.com/watch?v=10DZSRe3Y4k"> <img id="chiken" src="chickens.png"/></a>
</section> 

<?php
mysqli_close($connect);
?>

</body>

</html>