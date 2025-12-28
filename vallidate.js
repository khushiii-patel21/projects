$(document).ready(function () {
    $("#contactForm").submit(function (e) {
        e.preventDefault();

        let name = $("#name").val().trim();
        let email = $("#email").val().trim();
        let message = $("#message").val().trim();

        if (name === "") {
            alert("Please enter your name");
            return;
        }

        if (email === "" || !email.includes("@")) {
            alert("Enter a valid email");
            return;
        }

        if (message === "") {
            alert("Message cannot be empty");
            return;
        }

        alert("Form submitted successfully!");
    });
});
