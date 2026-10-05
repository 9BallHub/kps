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
    <?php

// Specific answers
$specificAnswers = [
    "Hello" => "World",
    "bad apple" => "Nagareteku toki no naka de demo kedarusa ga hora guruguru mawatte Watashi kara hanareru kokoro mo mienai wa sou shiranai type shit",
    "co?" => "kto?",
    "cpu" => "intel radeon 6090",
    "gpu" => "Intel arc only cuh",
    "how to build a pc" =>"step one: uninstall warthunder, step two: get a therapy, step last: build konkuter",
    "do you rember" => "Tweny first night sember, never forget ttimes :D",
    "sdkk" => "sdkk",
    "yo mama" => "so stupid, she tried to buy XBOX LIVEEEEEEEEEEEEEEEEEEE",
    "what is your gender" => "im a mekanik",
    "amd or intel" => "intel",
    "intel or amd" => "amd",
    "hot man" => "https://www.instagram.com/p/C5hnkaIoU3j/",
    "praca" => "GET A JOB NIGGA"
];

// Random answers for anything that isn't specifically defined
$randomAnswers = [
    "Sounds good!",
    "Are you sure?",
    "Consider AMD",
    "Should've brought a bigger GPU.",
    "Interesting choice!",
    "Zawiodłem się na tobie",
    "Im Bored.exe",
    "a fat feminist is smarter than that",
    "nah bro intel arc",
    "Yes",
    "HELL NAH",
    "consider the following- Open the door *gently*",
    "try `hot man`"

];

$result = "";
$image = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = trim($_POST["myInput"] ?? "");

    if ($input !== "") {

        // Specific text answer
        if (array_key_exists($input, $specificAnswers)) {
            $result = $specificAnswers[$input];
        } else {
            $result = $randomAnswers[array_rand($randomAnswers)];
        }

        // Specific image
        if (strtolower($input) === "bad apple") {
            $image = "bad apple.gif";
        }
        if (strtolower($input) === "hot man") {
            $image = "hotlettuce.png";
        }
        if (strtolower($input) === "praca") {
            $image = "job.png";
        }
    }
}
?>




<section id="side">
<a href="index.php">
<img id="remil" src="sdkk remm.png"/></br></br>
</a>
<p><a href="faq.php">
FAQ</a></p>

<section id="advert">
 <a href="https://www.youtube.com/watch?v=UP1mKveeNIA" target="_blank"> <img id="adve" src="adv.png" /></a>
    </section>

</section>



 <section id="head">
 <img id="logo" src="sdkk solutions 100.png"/>
 <a href="czekibreki.png"> <img id="system" src="system 100.png"></a>
 <img src="blackyellow.png" onclick="document.body.classList.toggle('dark-theme')"/>




</section>

<section id="choice">









<section id="subchoice">
<form>
    Procesor
<select id="cpuchoice">
<?php
$connect = mysqli_connect("localhost", "root", "", "sdkkbase") OR DIE("ZDYCHAJ");
$sql1 = "SELECT `Name`, `socket` FROM `cpu` ORDER BY socket DESC;";
$query1=mysqli_query($connect,$sql1);
while($row=mysqli_fetch_array($query1))
{
echo "<option>".$row['Name']." ".$row['socket']."</option>";
}
?>
</select>
</br>
Płyta Głowna
<select id="mbchoice">
<?php
$sql2 = "SELECT `Nazwa`,`socket`,`cena` FROM `motherboard` ORDER BY `socket` DESC;";
$query2=mysqli_query($connect,$sql2);
while($row=mysqli_fetch_array($query2))
{
echo "<option>".$row['Nazwa']." ".$row['socket']."</option>";
}
?>
</select>
</br>
Procesor graficzny
<select id="mbchoice">
<?php
$sql3 = "SELECT `model`,`producent` FROM `gpu` ORDER BY `producent` DESC;";
$query3=mysqli_query($connect,$sql3);
while($row=mysqli_fetch_array($query3))
{
echo "<option>".$row['producent']." ".$row['model']."</option>";
}
?>
</select>
</br>

Chłodzenie CPU

<select id="coolerchoice">
    <?php
$sql4 = "SELECT `Nazwa`,`producent`,`typ` FROM `cpucooler` ORDER BY `typ` DESC;";
$query4=mysqli_query($connect,$sql4);
while($row=mysqli_fetch_array($query4))
{
echo "<option>".$row['Nazwa']." ".$row['model']." ".$row['typ']."</option>";
}
?>


</select>
</br>
Kości RAM 
<select id="ramchoice">
    <?php
$sql5 = "SELECT `Nazwa`,`producent`,`ddr` FROM `ram` ORDER BY `ddr` DESC;";
$query5=mysqli_query($connect,$sql5);
while($row=mysqli_fetch_array($query5))
{
echo "<option>".$row['Nazwa']." ".$row['ddr']."</option>";
}
?>


</select>

</form>
</section>
<section id="obrazki">

<?php if ($image !== ""): ?>
        <img 
            class="easteregg"
            src="<?php echo htmlspecialchars($image); ?>" 
            alt="Apple"
            style="width: 400px;"
        >
    <?php endif; ?>
</section>

</section>



<section id="pricing">
content2</br>
XDDD</br>
XDDD
</section>

<section id="chatbox">
 
<section id="boxbox">


<form method="POST">
    <input type="text" name="myInput" placeholder="Ask the magic 8ball">
    <button type="submit">Generate</button>
</form>

<section id="answers">
    <?php if ($result !== ""): ?>
        <p><?php echo htmlspecialchars($result); ?></p>
    <?php endif; ?>


<section id="pictures">
    <?php if ($image !== ""): ?>
        <img 
            src="<?php echo htmlspecialchars($image); ?>" 
            alt="Apple"
            style="max-width: 100px;"
        >
    <?php endif; ?>
</section>
</section>
</section>


</section>












 <section id="bottom">
<a href="https://www.youtube.com/watch?v=10DZSRe3Y4k"> <img id="chiken" src="chickens.png"/></a>
</section> 

<?php
mysqli_close($connect);
?>

</body>
<!-- do you ever like uhhh uhm uh i- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm BEEP BEEP BEEEEEEEEEEEEEEEEEEEP -->
</html>