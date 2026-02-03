<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVOSTI</title><!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NOVOSTI</title>
    <link rel="stylesheet" href="novi-anatomija-projekt-styles.css" />
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

    <!-- Sadržaj novosti -->
    <div class="naslov">NOVOSTI</div>

    <div style="padding: 40px; text-align: center;">
        <h2>LJETNA ŠKOLA ANATOMIJE</h2>
        <p>Pogledajte tečaje anatomije na MedRI:</p>
        <a href="https://web.facebook.com/photo/?fbid=1344015857172468&set=-ljetna-škola-anatomije-prijave-u-tijeku-30-6-4-7-2025-zavod-za-anatomiju-medici" target="_blank">
            <img src="ljetna-sk-anat.jpg" alt="Ljetna škola anatomije" style="max-width: 100%; height: auto;">
        </a>

        <h2>NOVOSTI U MEDRI-u</h2>
        <p>Sve novosti MedRI-a:</p>
        <a href="https://medri.uniri.hr/vijesti/" target="_blank">
            <img src="medRI.png" alt="MedRi novosti" style="max-width: 100%; height: auto;">
        </a>

        <h2>CRVENI KRIŽ</h2>
        <p>Informacije o Crvenom Križu:</p>
        <a href="https://www.hck.hr/novosti/11" target="_blank">
            <img src="crveniKriz.jpg" alt="Crveni križ" style="max-width: 100%; height: auto;">
        </a>

        <h2>NATJECANJA PRVE POMOĆI</h2>
        <p>Natjecanja prve pomoći:</p>
        <a href="https://www.hck.hr/novosti/provedena-prva-razina-natjecanja-mladih-hrvatskog-crvenog-kriza/13494" target="_blank">
            <img src="prvaPomoc.jpg" alt="Natjecanja prve pomoći" style="max-width: 100%; height: auto;">
        </a>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025. Anatomija</p>
    </footer>
</body>
</html>