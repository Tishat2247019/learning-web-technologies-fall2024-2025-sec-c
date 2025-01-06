const errorMessages = {
    usernameLength: "Username must be at least 6 characters long.",
    usernameNumbers: "Username must not contain numbers.",
    emailInvalid: "Please enter a valid email address."
};

function validateUsername(username) {
    if (username.length < 6) {
        return errorMessages.usernameLength;
    }
    if (/\d/.test(username)) {
        return errorMessages.usernameNumbers;
    }
    return null;
}

function validateEmail(email) {
    const hasAtSymbol = email.includes("@");
    const hasDotCom = email.includes(".com");
    const dotComPosition = email.lastIndexOf(".com");
    const atSymbolPosition = email.indexOf("@");

    if (
        !hasAtSymbol ||
        !hasDotCom ||
        dotComPosition < atSymbolPosition + 4 ||
        email.length - dotComPosition > 4
    ) {
        return errorMessages.emailInvalid;
    }
    return null;
}

function validateForm(event) {
    event.preventDefault();
    const usernameInput = document.querySelector("input[name='new_username']");
    const emailInput = document.querySelector("input[name='new_email']");
    const usernameError = validateUsername(usernameInput.value);
    const emailError = validateEmail(emailInput.value);

    const usernameErrorElement = document.getElementById("usernameError");
    const emailErrorElement = document.getElementById("emailError");

    if (usernameError) {
        usernameErrorElement.textContent = usernameError;
        usernameErrorElement.style.color = "red";
    } else {
        usernameErrorElement.textContent = "";
    }

    if (emailError) {
        emailErrorElement.textContent = emailError;
        emailErrorElement.style.color = "red";
    } else {
        emailErrorElement.textContent = "";
    }

    if (!usernameError && !emailError) {
        document.querySelector("form").submit();
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    form.addEventListener("submit", validateForm);
});
