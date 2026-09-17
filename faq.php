<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>SDKK</title>
<link rel="stylesheet" href="styl_1.css">
</head>


<body>
<script src="main.js"></script>
<?php
$connect = mysqli_connect("localhost", "root", "", "sdkkbase") OR DIE("ZDYCHAJ");


?>



<section id="side">
<a href="index.php">
<img id="rem" src="sdkk remm.png"/></br></br>
</a>
<p><a href="faq.php">

FAQ</a></p>
</section>



 <section id="head">
 <img id="logo" src="sdkk solutions 100.png"/>
 <a href="czekibreki.png"> <img id="system" src="system 100.png"> </a>


</section>

<section id="choice">
if ur peece is brok, alway rember, workig pece :D
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
<a href="https://www.youtube.com/watch?v=10DZSRe3Y4k"> <img id="chiken" src="chickens.png"/></a>
</section> 

<?php
mysqli_close($connect);
?>

</body>

</html>