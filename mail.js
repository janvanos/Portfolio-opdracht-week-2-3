function submitForm() {
    var formData = new FormData(document.getElementById("contactForm"));
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "mail.php", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            alert(xhr.responseText);
            document.getElementById("contactForm").reset();
        } else {
            alert('Sorry, there was an error sending your message.');
        }
    };
    xhr.send(formData);
    return false; 
}