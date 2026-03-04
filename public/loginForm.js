// toggle login/registracija
const loginToggle = document.getElementById('loginToggle');
const registerToggle = document.getElementById('registerToggle');
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');

loginToggle.addEventListener('click', () => {
    loginForm.classList.toggle('show');  // prikazuje login
    registerForm.classList.remove('show'); // sakriva registraciju
});

registerToggle.addEventListener('click', () => {
    registerForm.classList.toggle('show'); // prikazuje registraciju
    loginForm.classList.remove('show');    // sakriva login
});

// kontakt forma - mailto
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