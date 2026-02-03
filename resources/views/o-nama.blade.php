<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>O NAMA</title>
    <link rel="stylesheet" href="novi-anatomija-projekt-styles.css" />
    <script src="loginForm.js"></script>
</head>
<body>
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

    <div class="naslov">O NAMA</div>
    <div style="padding: 40px; max-width: 800px; margin: auto; font-family: 'Times New Roman', Times, serif;">
        <p>
            Ovu stranicu su utemeljili učenici <strong>srednje škole Andrije Ljudevita Adamića.</strong><br /><br />
            Cilj ovog projekta jest pružati dostupnu <strong>osnovnu informaciju o anatomiji, njezin temelj, podjele i specifičnosti.</strong><br /><br />
            Vjerujemo da bi znanost o anatomiji trebala biti <strong>dostupna i razumljiva</strong> svima, a pogotovo studentima kojima te ključne informacije najviše trebaju!<br /><br />
            Prolistajte našu stranicu, proučite <strong>slike</strong>, pretražite potrebnu <strong>literaturu</strong> i upoznajte se sa raznim <strong>tečajevima</strong> o <strong>anatomiji i medicini!</strong>
        </p>
        <img src="o-nama.webp" alt="O nama" style="max-width: 100%; height: auto; display: block; margin: 20px auto;" />
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025. Anatomija</p>
    </footer>
</body>
</html>