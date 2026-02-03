<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kontaktirajte nas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="kontakt.css" />
    <script src="loginForm.js"></script>
</head>
<body>
    <!-- Meni -->
    <nav>
        <a href="kontakt.html">Kontakt</a>
        <a href="javascript:void(0);" onclick="toggleLoginForm()">Login</a>
        <a href="javascript:void(0);" onclick="toggleRegisterForm()">Registracija</a>
        <a href="o-nama.html">O nama</a>
        <a href="novosti.html">Novosti</a>

        <!-- Login forma -->
        <div class="login-container">
            <div class="login-form" id="loginForm">
                <h3>Prijava</h3>
                <input type="email" id="email" placeholder="Email adresa" required />
                <input type="password" id="password" placeholder="Lozinka" required />
                <button type="submit">Prijavi se</button>
                <a href="#" class="forgot-password">Zaboravili ste lozinku?</a>
            </div>
        </div>

        <!-- Registracijska forma -->
        <div class="register-container">
            <div class="register-form" id="registerForm" style="display:none;">
                <h3>Registracija</h3>
                <input type="text" id="regIme" placeholder="Ime" required />
                <input type="text" id="regPrezime" placeholder="Prezime" required />
                <input type="email" id="regEmail" placeholder="Email adresa" required />
                <input type="password" id="regPassword" placeholder="Lozinka" required />
                <button type="submit">Registriraj se</button>
            </div>
        </div>
    </nav>

    <!-- Kontakt sekcija -->
    <section id="kontakt">
        <div class="kontakt-container">
            <h2>📬 Kontaktirajte nas</h2>
            <p>Ako imate bilo kakvih pitanja ili želite ostaviti pohvalu ili pritužbu, ispunite obrazac ispod.</p>

            <ul>
                <li><i class="fas fa-envelope"></i> <strong>Email (Tara):</strong> <a href="mailto:tara.bilen@ss-adamic.com">tara.bilen@ss-adamic.com</a></li>
                <li><i class="fas fa-envelope"></i> <strong>Email (Naia):</strong> <a href="mailto:naia.ribaric@ss-adamic.com">naia.ribaric@ss-adamic.com</a></li>
                <li><i class="fas fa-phone"></i> <strong>Telefon:</strong> <a href="tel:+385912345678">+385 91 234 5678</a></li>
            </ul>

            <form onsubmit="sendEmail(event)">
                <input type="text" id="ime" placeholder="Ime" required />
                <input type="text" id="prezime" placeholder="Prezime" required />
                <textarea id="komentar" rows="5" placeholder="Vaš komentar (pohvala ili pritužba)"></textarea>
                <button type="submit">Pošalji</button>
            </form>
        </div>
    </section>

    <script>
        function sendEmail(event) {
            event.preventDefault();
            const ime = document.getElementById('ime').value.trim();
            const prezime = document.getElementById('prezime').value.trim();
            const komentar = document.getElementById('komentar').value.trim();

            if (!ime || !prezime) {
                alert("Molimo unesite ime i prezime.");
                return;
            }

            const subject = `Kontakt forma - ${ime} ${prezime}`;
            const body = `Ime: ${ime}%0APrezime: ${prezime}%0AKomentar: ${encodeURIComponent(komentar)}`;
            const mailtoLink = `mailto:tara.bilen@ss-adamic.com?subject=${subject}&body=${body}`;

            window.location.href = mailtoLink;
        }
    </script>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025. Anatomija</p>
    </footer>
</body>
</html>