<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDKK</title>
    <link rel="stylesheet" href="styl_1.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body>

<?php
// =====================================================
// POŁĄCZENIE Z BAZĄ DANYCH
// =====================================================

$connect = mysqli_connect("localhost", "root", "", "sdkkbase");

if (!$connect) {
    die("Nie udało się połączyć z bazą danych.");
}

mysqli_set_charset($connect, "utf8mb4");

// =====================================================
// FUNKCJE POMOCNICZE
// =====================================================

function skrocNazwe($nazwa) {
    return mb_substr((string)$nazwa, 0, 40, "UTF-8");
}

function pobierzCzesci($connect, $sql, $kolumnaNazwy, $kolumnyDanych = []) {
    $wynik = mysqli_query($connect, $sql);

    if (!$wynik) {
        die("Błąd zapytania do bazy danych: " . mysqli_error($connect));
    }

    while ($row = mysqli_fetch_assoc($wynik)) {
        $id = (int)$row["id"];
        $nazwa = (string)$row[$kolumnaNazwy];
        $cena = (float)$row["cena"];

        echo '<option value="' . $id . '"';
        echo ' data-nazwa="' . htmlspecialchars($nazwa, ENT_QUOTES, "UTF-8") . '"';
        echo ' data-cena="' . $cena . '"';

        foreach ($kolumnyDanych as $kolumna) {
            echo ' data-' . strtolower($kolumna) . '="'
                . htmlspecialchars((string)$row[$kolumna], ENT_QUOTES, "UTF-8")
                . '"';
        }

        echo '>';
        echo htmlspecialchars(skrocNazwe($nazwa), ENT_QUOTES, "UTF-8");
        echo '</option>';
    }
}

// =====================================================
// CHATBOT - ODPOWIEDZI
// =====================================================

$specificAnswers = [
    "Hello" => "World",
    "bad apple" => "Nagareteku toki no naka de demo kedarusa ga hora guruguru mawatte Watashi kara hanareru kokoro mo mienai wa sou shiranai type shit",
    "co?" => "kto?",
    "cpu" => "intel radeon 6090",
    "gpu" => "Intel arc only cuh",
    "how to build a pc" => "step one: uninstall warthunder, step two: get a therapy, step last: build konkuter",
    "do you rember" => "Tweny first night sember, never forget ttimes :D",
    "sdkk" => "sdkk",
    "yo mama" => "so stupid, she tried to buy XBOX LIVEEEEEEEEEEEEEEEEEEE",
    "what is your gender" => "im a mekanik",
    "amd or intel" => "intel",
    "intel or amd" => "amd",
    "hot man" => "https://www.instagram.com/p/C5hnkaIoU3j/",
    "praca" => "GET A JOB beegaA",
    "y are you gay" => "u are gae"
];

$randomAnswers = [
    "Sounds good!",
    "Are you sure?",
    "Consider AMD",
    "Should've brought a bigger GPU.",
    "Interesting choice!",
    "Zawiodłem się na tobie",
    "Im Bored.exe",
    "a fat fmakle is smarter than that",
    "nah bro intel arc",
    "Yes",
    "HELL NAH",
    "consider the following- Open the door *gently*",
    "try `hot man`"
];

$result = "";
$image = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["myInput"])) {
    $input = trim((string)$_POST["myInput"]);

    if ($input !== "") {
        if (array_key_exists($input, $specificAnswers)) {
            $result = $specificAnswers[$input];
        } else {
            $result = $randomAnswers[array_rand($randomAnswers)];
        }

        if (strtolower($input) === "bad apple") {
            $image = "bad apple.gif";
        } elseif (strtolower($input) === "hot man") {
            $image = "hotlettuce.png";
        } elseif (strtolower($input) === "praca") {
            $image = "job.png";
        }
    }
}
?>

<!-- ==================================================
     MENU BOCZNE
=================================================== -->

<section id="side">
    <a href="index.php">
        <img id="remil" src="sdkk remm.png" alt="SDKK">
    </a>

    <p><a href="faq.php">FAQ</a></p>
    <p><a href="https://choroszcz.pl/">Sponsor</a></p>

    <p>
        <a target="_blank" href="https://www.google.com/search?tbm=isch&q=cat+pictures">
            Kotki
        </a>
    </p>

    <p>
        <a  href="https://www.google.com/maps/place/Fort+ronograd/@51.8488327,-176.3114977,62m/data=!3m1!1e3!4m16!1m9!3m8!1s0x5791d300204f8f07:0xb170c58fd8d25d09!2sFort+ronograd!8m2!3d51.8488061!4d-176.3114064!9m1!1b1!16s%2Fg%2F11xsfyfjx1!3m5!1s0x5791d300204f8f07:0xb170c58fd8d25d09!8m2!3d51.8488061!4d-176.3114064!16s%2Fg%2F11xsfyfjx1?entry=ttu&g_ep=EgoyMDI2MTAxOS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
            Nasza siedziba
        </a>
    </p>

    <p>
        <a href="https://www.google.com/maps/place/Synagoga+Folk+Valley/@52.310056,21.1668073,19z/data=!3m1!4b1!4m6!3m5!1s0x471ecf0018fd4f37:0xad3143bddd1d0ac1!8m2!3d52.310056!4d21.167451!16s%2Fg%2F11zgmck0j2?entry=ttu&g_ep=EgoyMDI2MTAxOS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
            Znajdziesz nas też tutaj
        </a>
    </p>

    <section id="advert">
        <a href="https://www.youtube.com/watch?v=UP1mKveeNIA" target="_blank">
            <img id="adve" src="adv.png" alt="Reklama">
        </a>
    </section>
</section>

<!-- ==================================================
     NAGŁÓWEK
=================================================== -->

<section id="head">
    <img id="logo" src="sdkk solutions 100.png" alt="SDKK Solutions">

    <a href="czekibreki.png">
        <img id="system" src="system 100.png" alt="System">
    </a>

    <img
        src="blackyellow.png"
        alt="Zmień motyw"
        onclick="document.body.classList.toggle('dark-theme')"
    >
</section>

<!-- ==================================================
     WYBÓR CZĘŚCI KOMPUTEROWYCH
=================================================== -->

<section id="choice">

    

    <section id="obrazki">
        <?php if ($image !== ""): ?>
            <img
                class="easteregg"
                src="<?php echo htmlspecialchars($image, ENT_QUOTES, "UTF-8"); ?>"
                alt="Obrazek"
                style="width: 400px; max-width: 100%;"
            >
        <?php endif; ?>
    </section>

</section>

<!-- ==================================================
     CENY I KOMPATYBILNOŚĆ
=================================================== -->

<section id="pricing">
<img src="spin2.gif">
<a href="https://www.youtube.com/watch?v=_Wep0VVzBGU">Win 11 Debloat</a>

    
</section>

<!-- ==================================================
     CHATBOT
=================================================== -->

<section id="chatbox">
    <section id="boxbox">

        <form method="POST" action="index.php">
            <input
                type="text"
                name="myInput"
                placeholder="Ask the magic 8ball"
            >
            <button type="submit">Zapytaj</button>
        </form>

        <section id="answers">
            <?php if ($result !== ""): ?>
                <p><?php echo htmlspecialchars($result, ENT_QUOTES, "UTF-8"); ?></p>
            <?php endif; ?>

            <section id="pictures">
                <?php if ($image !== ""): ?>
                    <img
                        src="<?php echo htmlspecialchars($image, ENT_QUOTES, "UTF-8"); ?>"
                        alt="Obrazek"
                        style="max-width: 100px;"
                    >
                <?php endif; ?>
            </section>
        </section>

    </section>


</section>

<!-- ==================================================
     STOPKA
=================================================== -->

<section id="bottom">
    <a href="https://www.youtube.com/watch?v=10DZSRe3Y4k">
        <img id="chiken" src="chickens.png" alt="Kurczaki">
    </a>
</section>

<!-- ==================================================
     JAVASCRIPT
=================================================== -->



<?php
mysqli_close($connect);
?>

</body>
</html>