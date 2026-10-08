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
    "praca" => "GET A JOB NIGGA",
    "y are you gay" => "u are gay"
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
<p><a href="https://choroszcz.pl/">Sponsor</a></p>
<p><a href="https://www.google.com/search?client=firefox-b-d&hs=Jl6V&sca_esv=0adcf06bd624d4eb&sxsrf=APpeQnssndi7c5JvKAXAnlgPFrHrYNGGUQ:1791441419307&udm=2&fbs=ABfTbFX9375dmYLUBFpyRgnU-XoZp6jAVSqfKhVSjM9DAAQ6meU2hKpgJocChk9NMsbqLBQfl4Cc99spmknRV0fkug4LjmueIpkVKQNUtTiTAIUqJ08CndBBmCU1_uyKXzb904Df5HhpfgmWxpqHBt-sr4Z22oYFK53sywn8jQ5tSuTaxedQlJHZthlvqU2MRTCNETBSZrNPw82o1VMwwgDSAz88-9YNgQ&q=cat+pictures&sa=X&ved=2ahUKEwit4Lur56mXAxURCBAIHY2-HXwQtKgLegQIEhAB&biw=1920&bih=946&dpr=1"
>Kotki</a></p>
<p><a href="https://www.google.com/maps/place/Fort+Gay+Elementary/@38.1150502,-82.5925814,19.37z/data=!4m10!1m2!2m1!1sschool+w+pobli%C5%BCu+Fort+Gay,+Wirginia+Zachodnia,+Stany+Zjednoczone!3m6!1s0x8845c04f6a1442bd:0x425333df428cba6b!8m2!3d38.1146545!4d-82.5917129!15sCkFzY2hvb2wgdyBwb2JsacW8dSBGb3J0IEdheSwgV2lyZ2luaWEgWmFjaG9kbmlhLCBTdGFueSBaamVkbm9jem9uZZIBEWVsZW1lbnRhcnlfc2Nob29s4AEA!16s%2Fm%2F0765pxf?entry=ttu&g_ep=EgoyMDI2MTAwNS4wIKXMDSoASAFQAw%3D%3D"
>Nasza lokalizacja</a></p> 
<p><a href="https://www.google.com/maps/place/Synagoga+Folk+Valley/@52.3100225,21.1596814,15.29z/data=!4m10!1m2!2m1!1sfolk+valley!3m6!1s0x471ecf0018fd4f37:0xad3143bddd1d0ac1!8m2!3d52.310056!4d21.167451!15sCgtmb2xrIHZhbGxleZIBCXN5bmFnb2d1ZeABAA!16s%2Fg%2F11zgmck0j2?entry=ttu&g_ep=EgoyMDI2MTAwNS4wIKXMDSoASAFQAw%3D%3D">Znajdzesz nas też tutaj</a></p>

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
Obudowa
<select id="casechoice">
    <?php
$sql7 = "SELECT `Nazwa`,`typ` FROM `casepc` ORDER BY `Nazwa` ASC;";
$query7=mysqli_query($connect,$sql7);
while($row=mysqli_fetch_array($query7))
{
echo "<option>".$row['Nazwa']." ".$row['typ']."</option>";
}
?>


</select>

</br>Zasilacz
<select id="psuchoice">
    <?php
$sql6 = "SELECT `Nazwa`,`moc` FROM `psu` ORDER BY `moc` DESC;";
$query6=mysqli_query($connect,$sql6);
while($row=mysqli_fetch_array($query6))
{
echo "<option>".$row['Nazwa']." ".$row['typ']."</option>";
}
?>


</select>

</select>
</br>Dysk SSD
<select id="ssd">
    <?php
$sql8 = "SELECT `Nazwa`,`pojemnosc` FROM `ssd` ORDER BY `pojemnosc` ASC;";
$query8=mysqli_query($connect,$sql8);
while($row=mysqli_fetch_array($query8))
{
echo "<option>".$row['Nazwa']." ".$row['pojemnosc']."</option>";
}
?>
</select>

</br>Materiał termo
<select id="thermo">
    <?php
$sql9 = "SELECT `Nazwa`,`typ` FROM `thermo` ORDER BY `typ` DESC;";
$query9=mysqli_query($connect,$sql9);
while($row=mysqli_fetch_array($query9))
{
echo "<option>".$row['Nazwa']." ".$row['typ']."</option>";
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
    <button type="submit">Zapytaj</button>
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