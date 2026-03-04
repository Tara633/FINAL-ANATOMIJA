document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const query = document.getElementById('searchQuery').value.trim();
    const resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = '';

    if (!query) {
        resultsDiv.innerHTML = 'Molimo unesite pojam za pretragu.';
        return;
    }

    // Funkcija za pretragu na OpenLibrary API
    function searchBooks(searchTerm) {
        const url = `https://openlibrary.org/search.json?q=${encodeURIComponent(searchTerm)}&limit=20`;
        return fetch(url)
            .then(response => response.json());
    }

    // Prvo pokušaj s korisničkim upitom
    searchBooks(query)
        .then(data => {
            if (data.docs && data.docs.length > 0) {
                prikaziRezultate(data.docs);
            } else {
                // Ako nema rezultata, pokušaj s osnovnim ključnim riječima
                const fallbackTerms = ['anatomija', 'atlas', 'mišići', 'kostur', 'koža'];
                let found = false;

                // Iterativno pokušaj svaku fallback riječ dok ne nađeš nešto
                (async function tryFallbacks() {
                    for (const term of fallbackTerms) {
                        const fallbackData = await searchBooks(term);
                        if (fallbackData.docs && fallbackData.docs.length > 0) {
                            prikaziRezultate(fallbackData.docs);
                            found = true;
                            break;
                        }
                    }
                    if (!found) {
                        resultsDiv.innerHTML = 'Nema rezultata za vašu pretragu.';
                    }
                })();
            }
        })
        .catch(error => {
            console.error('Greška pri pretrazi:', error);
            resultsDiv.innerHTML = 'Došlo je do pogreške pri pretrazi.';
        });

    // Funkcija za prikaz rezultata
    function prikaziRezultate(docs) {
        docs.forEach(book => {
            const bookDiv = document.createElement('div');
            bookDiv.classList.add('book');
            const title = book.title ? `<strong>${book.title}</strong>` : 'Nema naslova';
            const author = book.author_name ? `Autor: ${book.author_name.join(', ')}` : 'Autor nepoznat';
            const link = book.key ? `<a href="https://openlibrary.org${book.key}" target="_blank">Više informacija</a>` : '';
            bookDiv.innerHTML = `${title}<br>${author}<br>${link}`;
            resultsDiv.appendChild(bookDiv);
        });
    }
});
