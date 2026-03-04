<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ANATOMIJA</title>
    <link rel="stylesheet" href="novi-anatomija-projekt-styles.css" />
    <link rel="stylesheet" href="pretraga-literature.css" />
    <script src="loginForm.js" defer></script>
    <script src="{{ asset('js/pretraga-literature.js') }}" defer></script>
</head>
<body>
  <div class="wrapper"><!-- POČETAK WRAPPERA -->

    <!-- Meni -->
    <nav>
      <a href="kontakt">Kontakt</a>
      <a href="javascript:void(0);" onclick="toggleLoginForm()">Login</a>
      <a href="javascript:void(0);" onclick="toggleRegisterForm()">Registracija</a>
      <a href="o-nama">O nama</a>
      <a href="novosti">Novosti</a>

      <div class="login-container">
        <div class="login-form" id="loginForm" style="display:none;">
          <h3>Prijava</h3>
          <input type="email" id="email" placeholder="Email adresa" required />
          <input type="password" id="password" placeholder="Lozinka" required />
          <button type="submit">Prijavi se</button>
          <a href="#" class="forgot-password">Zaboravili ste lozinku?</a>
        </div>
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

    <!-- Pretraživač literature -->
 <div class="search-section">
    <form id="searchForm" autocomplete="off">
        <input 
            type="text" 
            id="searchQuery" 
            placeholder="Pretraži literaturu iz anatomije..." 
            required
        />
        <button type="submit">Pretraži</button>
    </form>

    <div id="results"></div>
</div>

    <!-- Naslov i kvadrati -->
    <div class="naslov">Anatomija</div>

    <h2>OSNOVNA PODJELA</h2>
    <div class="kvadrati">
        <div class="kvadrat rendgenska" onclick="window.location.href='rendgenska-anatomija.html';"> 
            <a href="rendgenska-anatomija">RENDGENSKA ANATOMIJA</a>
        </div>
        <div class="kvadrat sustavna" onclick="window.location.href='sustavna-anatomija.html';">
            <a href="sustavna-anatomija">SUSTAVNA ANATOMIJA</a>
        </div>
        <div class="kvadrat topografska" onclick="window.location.href='topografska-anatomija.html';">
            <a href="topografska-anatomija">TOPOGRAFSKA ANATOMIJA</a>
        </div>
    </div>

    <h2>MIŠIĆI</h2>
    <div class="kvadrati">
        <div class="kvadrat misici-glave" onclick="window.location.href='misici-glave.html';">
            <a href="misici-glave">MIŠIĆI GLAVE</a>
        </div>
        <div class="kvadrat misici-vrata-i-trupa" onclick="window.location.href='misici-vrata-i-trupa.html';">
            <a href="misici-vrata-i-trupa">MIŠIĆI VRATA I TRUPA</a>
        </div>
        <div class="kvadrat misici-leda" onclick="window.location.href='misici-leda.html';">
            <a href="misici-leda">MIŠIĆI LEĐA</a>
        </div>
        <div class="kvadrat misici-nadlaktice-podlaktice" onclick="window.location.href='misici-nadlaktice-podlaktice.html';">
            <a href="misici-nadlaktice-podlaktice">MIŠIĆI NADLAKTICE I PODLAKTICE</a>
        </div>
        <div class="kvadrat misici-dlana" onclick="window.location.href='misici-dlana.html';">
            <a href="misici-dlana">MIŠIĆI DLANA</a>
        </div>
        <div class="kvadrat misici-stopala" onclick="window.location.href='misici-stopala.html';">
            <a href="misici-stopala">MIŠIĆI STOPALA</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025. Anatomija</p>
    </footer>

  </div><!-- KRAJ WRAPPERA -->
</body>
</html>