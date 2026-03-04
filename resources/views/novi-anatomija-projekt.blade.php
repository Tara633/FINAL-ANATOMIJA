<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kontaktirajte nas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/kontakt.css') }}" />
</head>
<body>
    <!-- Meni -->
    <nav>
        <a href="{{ url('kontakt') }}">Kontakt</a>
        <a href="javascript:void(0);" id="loginToggle">Login</a>
        <a href="javascript:void(0);" id="registerToggle">Registracija</a>
        <a href="{{ url('o-nama') }}">O nama</a>
        <a href="{{ url('novosti') }}">Novosti</a>

        <!-- Login forma -->
        <div class="login-container">
           <form class="login-form" id="loginForm" method="POST" action="{{ route('login') }}">
    @csrf
    <h3>Prijava</h3>
    <input type="email" name="email" placeholder="Email adresa" required />
    <input type="password" name="password" placeholder="Lozinka" required />
    <button type="submit">Prijavi se</button>
    <a href="{{ route('password.request') }}" class="forgot-password">Zaboravili ste lozinku?</a>
            </form>
        </div>

        <!-- Registracijska forma -->
        <div class="register-container">
            <form class="register-form" id="registerForm" method="POST" action="{{ route('register') }}">
    @csrf
    <h3>Registracija</h3>
    <input type="text" name="name" placeholder="Ime" required />
    <input type="text" name="surname" placeholder="Prezime" required />
    <input type="email" name="email" placeholder="Email adresa" required />
    <input type="password" name="password" placeholder="Lozinka" required />
    <button type="submit">Registriraj se</button>
</form>
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

    <!-- Footer -->
    <footer>
        <p>&copy; 2025. Anatomija</p>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/loginForm.js') }}"></script>
</body>
</html>