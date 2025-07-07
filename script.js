document.querySelector('.signup').addEventListener('click', function(e) {
    e.preventDefault(); // Stop default submit

    const name = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    const nameError = document.getElementById("nameError");
    const emailError = document.getElementById("emailError");
    const passwordError = document.getElementById("passwordError");

    nameError.textContent = "";
    emailError.textContent = "";
    passwordError.textContent = "";

    let isValid = true;

    if (name === "") {
        nameError.textContent = "Name is required";
        isValid = false;
    }
    if (email === "") {
        emailError.textContent = "Email is required";
        isValid = false;
    }
    if (password === "") {
        passwordError.textContent = "Password is required";
        isValid = false;
    }

    if (isValid) {
        document.getElementById("signupForm").submit(); // only if all valid
    }
});
