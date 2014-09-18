function checkForm() {
// Fetching values from all input fields and storing them in variables.
var username = document.getElementById("inputUsername").value;
var password = document.getElementById("inputPassword").value;
var email = document.getElementById("inputEmail").value;
var firstname = document.getElementById("inputFirstName").value;
var scndname = document.getElementById("inputScndName").value;
//Check input Fields Should not be blanks.
if (username == '' || password == '' || email == '' || firstname == '' || scndname == '') {
alert("Fill all fields please.");
} else {
//Notifying error fields
var username1 = document.getElementById("username1");
var password1 = document.getElementById("password1");
var email1 = document.getElementById("email1");
var firstname1 = document.getElementById("firstName1");
var secondname1 = document.getElementById("scndName1");
//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
if (username1.innerHTML != '<span>Valid</span>' || password1.innerHTML != '<span>Valid</span>' || email1.innerHTML != '<span>Valid</span>' || firstname1.innerHTML != '<span>Valid</span>' || secondname1.innerHTML != '<span>Valid</span>') {
alert("Fill all fields with <span>Valid</span> information please.");
} else {
//Submit Form When All values are valid.
document.getElementById("registerForm").submit();
}
}
}
// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
var xmlhttp;
if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else { // for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = "Validating..";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
} else {
document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
}
}
xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
xmlhttp.send();
}