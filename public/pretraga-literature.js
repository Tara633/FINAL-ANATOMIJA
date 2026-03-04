console.log("Search JS radi");
resultsDiv.style.display = "block";
resultsDiv.innerHTML = '<div class="dropdown-item">TEST</div>';

document.addEventListener("DOMContentLoaded", function() {
    const searchForm = document.getElementById('searchForm');
    const searchQuery = document.getElementById('searchQuery');
    const resultsDiv = document.getElementById('results');

    searchForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const query = searchQuery.value.trim();
        resultsDiv.innerHTML = '';

        if (!query) {
            resultsDiv.style.display = "block";
            resultsDiv.innerHTML = '<div class="dropdown-item">Molimo unesite pojam za pretragu.</div>';
            return;
        }

        // Funkcija za pretragu OpenLibrary
        function searchBooks(term) {
            const url = `https://openlibrary.org/search.json?q=${encodeURIComponent(term)}+anatomija&limit=10`;
            return fetch(url).then(res => res.json());
        }

        searchBooks(query)
            .then(data => {
                if (data.docs && data.docs.length > 0) {
                    prikaziRezultate(data.docs);
                } else {
                    resultsDiv.style.display = "block";
                    resultsDiv.innerHTML = '<div class="dropdown-item">Nema rezultata.</div>';
                }
            })
            .catch(error => {
                console.error('Greška:', error);
                resultsDiv.style.display = "block";
                resultsDiv.innerHTML = '<div class="dropdown-item">Došlo je do pogreške.</div>';
            });
    });

    function prikaziRezultate(docs) {
        resultsDiv.innerHTML = '';
        resultsDiv.style.display = "block";

        docs.forEach(book => {
            const item = document.createElement('div');
            item.classList.add('dropdown-item');

            const title = book.title ? `<strong>${book.title}</strong>` : 'Nema naslova';
            const author = book.author_name ? book.author_name.join(', ') : 'Autor nepoznat';

            item.innerHTML = `${title}<br><small>${author}</small>`;
            item.onclick = () => window.open(`https://openlibrary.org${book.key}`, "_blank");

            resultsDiv.appendChild(item);
        });
    }

    // Sakrij dropdown kada se klikne izvan searcha
    document.addEventListener('click', function(event) {
        if (!document.querySelector('.search-section').contains(event.target)) {
            resultsDiv.style.display = "none";
        }
    });
});