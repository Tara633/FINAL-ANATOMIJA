function toggleLoginForm() {
    const form = document.getElementById("loginForm");
    form.classList.toggle("show");
    // Sakrij registracijsku formu ako je otvorena
    const regForm = document.getElementById("registerForm");
    if (regForm) {
        regForm.style.display = "none";
    }
}

function toggleRegisterForm() {
    const regForm = document.getElementById("registerForm");
    if (regForm.style.display === "block") {
        regForm.style.display = "none";
    } else {
        regForm.style.display = "block";
    }
    // Sakrij login formu ako je otvorena
    const loginForm = document.getElementById("loginForm");
    if (loginForm) {
        loginForm.classList.remove("show");
    }
}