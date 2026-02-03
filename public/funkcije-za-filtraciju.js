// Postojeća funkcija za filtriranje
function filtriraj() {
    let unos = document.getElementById("filterInput").value.toLowerCase();
    let popis = document.getElementById("popis").getElementsByTagName("li");

    for (let i = 0; i < popis.length; i++) {
        let ime = popis[i].textContent.toLowerCase();
        if (ime.includes(unos)) {
            popis[i].style.display = "";
        } else {
            popis[i].style.display = "none";
        }
    }
}

// Nova funkcija za sortiranje dropdown liste
function sortirajDropdown() {
    let dropdown = document.getElementById("dropdownUcenici");
    let opcije = Array.from(dropdown.options);

    // Sortiranje opcija prema tekstu (abecedno)
    opcije.sort((a, b) => a.text.localeCompare(b.text));

    // Očisti postojeće opcije
    dropdown.innerHTML = "";

    // Dodaj sortirane opcije natrag u dropdown
    opcije.forEach(opcija => dropdown.add(opcija));
}

