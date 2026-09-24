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
<section id="subchoice">
<form>
    Procesor
<select id="cpuchoice">
<?php
$connect = mysqli_connect("localhost", "root", "", "sdkkbase") OR DIE("ZDYCHAJ");
$sql1 = "SELECT `Name`, `socket` FROM `cpu` ORDER BY id DESC;";
$query1=mysqli_query($connect,$sql1);
while($row=mysqli_fetch_array($query1))
{
echo "<option>".$row['Name']." ".$row['socket']."</option>";
}
?>
</select>
</form>
</section>
</section>



<section id="pricing">
content2</br>
XDDD</br>
XDDD
</section>

<section id="chatbox">
 
<section id="boxbox">
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
    "sdkk" => "sdkk"
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
    "Yes",
    "HELL NAH"

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
    }
}
?>

<form method="POST">
    <input type="text" name="myInput" placeholder="Ask the magic eight ball">
    <button type="submit">Generate</button>
</form>

<section id="answers">
    <?php if ($result !== ""): ?>
        <p><?php echo htmlspecialchars($result); ?></p>
    <?php endif; ?>
</section>

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











 <section id="bottom">
<a href="https://www.youtube.com/watch?v=10DZSRe3Y4k"> <img id="chiken" src="chickens.png"/></a>
</section> 

<?php
mysqli_close($connect);
?>

</body>

</html>