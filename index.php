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

    <section id="subchoice">
        <form id="pcForm" onsubmit="return false;">

            <label for="cpuchoice">Procesor</label>
            <select id="cpuchoice" name="cpu">
                <?php
                pobierzCzesci(
                    $connect,
                    "SELECT id, Name, Cena AS cena, socket
                     FROM cpu ORDER BY socket DESC",
                    "Name",
                    ["socket"]
                );
                ?>
            </select>
            </br>

            <label for="mbchoice">Płyta główna</label>
            <select id="mbchoice" name="motherboard">
                <?php
                pobierzCzesci(
                    $connect,
                    "SELECT id, Nazwa, cena, socket, ddr
                     FROM motherboard ORDER BY socket DESC",
                    "Nazwa",
                    ["socket", "ddr"]
                );
                ?>
            </select>
            </br>

            <label for="gpuchoice">Procesor graficzny</label>
            <select id="gpuchoice" name="gpu">
                <?php
                pobierzCzesci(
                    $connect,
                    "SELECT id, CONCAT(producent, ' ', model) AS pelna_nazwa, cena
                     FROM gpu ORDER BY producent DESC",
                    "pelna_nazwa"
                );
                ?>
            </select>
            </br>

            <label for="coolerchoice">Chłodzenie CPU</label>
            <select id="coolerchoice" name="cooler">
                <?php
                pobierzCzesci(
                    $connect,
                    "SELECT id, Nazwa, cena
                     FROM cpucooler ORDER BY typ DESC",
                    "Nazwa"
                );
                ?>
            </select>
            </br>

            <label for="ramchoice">Kości RAM</label>
            <select id="ramchoice" name="ram">
                <?php
                pobierzCzesci(
                    $connect,
                    "SELECT id, Nazwa, cena, ddr
                     FROM ram ORDER BY ddr DESC",
                    "Nazwa",
                    ["ddr"]
                );
                ?>
            </select>
            </br>

            <label for="casechoice">Obudowa</label>
            <select id="casechoice" name="pc_case">
                <?php
                pobierzCzesci(
                    $connect,
                    "SELECT id, Nazwa, cena, typ
                     FROM casepc ORDER BY Nazwa ASC",
                    "Nazwa",
                    ["typ"]
                );
                ?>
            </select>
            </br>

            <label for="psuchoice">Zasilacz</label>
            <select id="psuchoice" name="psu">
                <?php
                pobierzCzesci(
                    $connect,
                    "SELECT id, Nazwa, cena, moc
                     FROM psu ORDER BY moc DESC",
                    "Nazwa",
                    ["moc"]
                );
                ?>
            </select>
            </br>
            <label for="ssd">Dysk SSD</label>
            <select id="ssd" name="ssd">
                <?php
                pobierzCzesci(
                    $connect,
                    "SELECT id, Nazwa, cena, pojemnosc
                     FROM ssd ORDER BY pojemnosc ASC",
                    "Nazwa",
                    ["pojemnosc"]
                );
                ?>
            </select>
            </br>

            <label for="thermo">Materiał termiczny</label>
            <select id="thermo" name="thermo">
                <?php
                pobierzCzesci(
                    $connect,
                    "SELECT id, Nazwa, cena, typ
                     FROM thermo ORDER BY typ DESC",
                    "Nazwa",
                    ["typ"]
                );
                ?>
            </select>

        </form>
    </section>

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

    <p>CPU: <span id="price-cpu">—</span></p>
    <p>Mobo: <span id="price-mobo">—</span></p>
    <p>GPU: <span id="price-gpu">—</span></p>
    <p>Cooler: <span id="price-cooler">—</span></p>
    <p>RAM: <span id="price-ram">—</span></p>
    <p>Case: <span id="price-case">—</span></p>
    <p>PSU: <span id="price-psu">—</span></p>
    <p>SSD: <span id="price-ssd">—</span></p>
    <p>Therm: <span id="price-thermo">—</span></p>

    <hr>

    <h3>CENA: <span id="total-price">0 zł</span></h3>

    <button type="button" id="checkCompatibility">
        Sprawdź kompatybilność
    </button>

    <p id="compatibility-status">
        Kliknij przycisk, aby sprawdzić zestaw.
    </p>

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

<script>
document.addEventListener("DOMContentLoaded", function () {

    const pola = {
        cpu: "cpuchoice",
        motherboard: "mbchoice",
        gpu: "gpuchoice",
        cooler: "coolerchoice",
        ram: "ramchoice",
        pc_case: "casechoice",
        psu: "psuchoice",
        ssd: "ssd",
        thermo: "thermo"
    };

    const wyswietlanie = {
        cpu: "price-cpu",
        motherboard: "price-mobo",
        gpu: "price-gpu",
        cooler: "price-cooler",
        ram: "price-ram",
        pc_case: "price-case",
        psu: "price-psu",
        ssd: "price-ssd",
        thermo: "price-thermo"
    };

    const status = document.getElementById("compatibility-status");
    const suma = document.getElementById("total-price");
    const przycisk = document.getElementById("checkCompatibility");

    function skrocNazwe(nazwa) {
        return Array.from(nazwa).slice(0, 20).join("");
    }

    function pobierzOpcje(nazwa) {
        const select = document.getElementById(pola[nazwa]);

        if (!select || !select.selectedOptions.length) {
            return null;
        }

        return select.selectedOptions[0];
    }

    function nazwaCzesci(opcja) {
        if (!opcja) return "Brak wyboru";

        return opcja.dataset.nazwa || opcja.textContent.trim();
    }

    function obliczCene() {
        let lacznaCena = 0;

        for (const nazwa of Object.keys(pola)) {
            const opcja = pobierzOpcje(nazwa);
            const elementCeny = document.getElementById(wyswietlanie[nazwa]);

            if (!opcja) {
                if (elementCeny) elementCeny.textContent = "—";
                continue;
            }

            const cena = Number(opcja.dataset.cena) || 0;
            lacznaCena += cena;

            if (elementCeny) {
                elementCeny.textContent =
                    skrocNazwe(nazwaCzesci(opcja)) +
                    " — " +
                    cena.toLocaleString("pl-PL") +
                    " zł";
            }
        }

        suma.textContent = lacznaCena.toLocaleString("pl-PL") + " zł";
    }

    function sprawdzKompatybilnosc() {
        const cpu = pobierzOpcje("cpu");
        const plyta = pobierzOpcje("motherboard");
        const ram = pobierzOpcje("ram");

        const bledy = [];

        if (cpu && plyta) {
            const socketCPU = cpu.dataset.socket;
            const socketPlyty = plyta.dataset.socket;

            if (socketCPU !== socketPlyty) {
                bledy.push(
                    "Procesor: " + nazwaCzesci(cpu) +
                    " (socket: " + (socketCPU || "brak danych") +
                    ") — płyta główna: " + nazwaCzesci(plyta) +
                    " (socket: " + (socketPlyty || "brak danych") + ")"
                );
            }
        }

        if (ram && plyta) {
            const ddrRAM = ram.dataset.ddr;
            const ddrPlyty = plyta.dataset.ddr;

            if (ddrRAM !== ddrPlyty) {
                bledy.push(
                    "RAM: " + nazwaCzesci(ram) +
                    " (DDR: " + (ddrRAM || "brak danych") +
                    ") — płyta główna: " + nazwaCzesci(plyta) +
                    " (DDR: " + (ddrPlyty || "brak danych") + ")"
                );
            }
        }

        if (bledy.length > 0) {
            status.textContent = "Wykryto niezgodność części!";
            status.style.color = "red";

            alert("NIEKOMPATYBILNE CZĘŚCI:\n\n" + bledy.join("\n\n"));
        } else {
            status.textContent = "Kompatybilność OK!";
            status.style.color = "green";

            alert("Nie wykryto niezgodności socket ani DDR.");
        }
    }

    // Ceny zmieniają się automatycznie po wyborze części.
    for (const id of Object.values(pola)) {
        const select = document.getElementById(id);

        if (select) {
            select.addEventListener("change", obliczCene);
        }
    }

    // Walidacja uruchamia się dopiero po kliknięciu przycisku.
    przycisk.addEventListener("click", sprawdzKompatybilnosc);

    obliczCene();
});
</script>

<?php
mysqli_close($connect);
?>

</body>
</html>