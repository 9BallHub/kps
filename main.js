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

        return opcja.dataset.nazwa ||
            opcja.textContent.trim().split(" — ")[0];
    }

    function obliczCene() {
        let lacznaCena = 0;

        for (const nazwa of Object.keys(pola)) {
            const opcja = pobierzOpcje(nazwa);
            const elementCeny = document.getElementById(
                wyswietlanie[nazwa]
            );

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

        suma.textContent =
            lacznaCena.toLocaleString("pl-PL") + " zł";
    }

    function sprawdzKompatybilnosc() {
        const cpu = pobierzOpcje("cpu");
        const plyta = pobierzOpcje("motherboard");
        const ram = pobierzOpcje("ram");

        const bledy = [];

        // Sprawdzanie socketu procesora i płyty głównej
        if (cpu && plyta) {
            const socketCPU = cpu.dataset.socket;
            const socketPlyty = plyta.dataset.socket;

            if (!socketCPU || !socketPlyty) {
                bledy.push(
                    "Brak danych socket dla procesora lub płyty głównej."
                );
            } else if (socketCPU !== socketPlyty) {
                bledy.push(
                    "Procesor: " + nazwaCzesci(cpu) +
                    " (" + socketCPU + ") — płyta: " +
                    nazwaCzesci(plyta) + " (" + socketPlyty + ")"
                );
            }
        }

        // Sprawdzanie standardu DDR pamięci RAM i płyty
        if (ram && plyta) {
            const ddrRAM = ram.dataset.ddr;
            const ddrPlyty = plyta.dataset.ddr;

            if (!ddrRAM || !ddrPlyty) {
                bledy.push(
                    "Brak danych DDR dla RAM-u lub płyty głównej."
                );
            } else if (ddrRAM !== ddrPlyty) {
                bledy.push(
                    "RAM: " + nazwaCzesci(ram) +
                    " (" + ddrRAM + ") — płyta: " +
                    nazwaCzesci(plyta) + " (" + ddrPlyty + ")"
                );
            }
        }

        if (bledy.length > 0) {
            status.textContent = "Wykryto niezgodność części!";
            status.style.color = "red";

            alert(
                "NIEKOMPATYBILNE CZĘŚCI:\n\n" +
                bledy.join("\n\n")
            );
        } else {
            status.textContent = "Kompatybilność OK!";
            status.style.color = "green";

            alert("Sprawdzanie zakończone. Nie wykryto niezgodności.");
        }
    }

    // Zmiana części automatycznie aktualizuje tylko ceny.
    for (const id of Object.values(pola)) {
        const select = document.getElementById(id);

        if (select) {
            select.addEventListener("change", obliczCene);
        }
    }

    // Walidacja dopiero po kliknięciu przycisku.
    if (przycisk) {
        przycisk.addEventListener("click", sprawdzKompatybilnosc);
    }

    obliczCene();
});