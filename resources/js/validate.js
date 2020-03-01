

var FirstName = document.forms["myForm"]["fname"];
var LastName = document.forms["myForm"]["lname"];
var Email = document.forms["myForm"]["email"];
var Country = document.forms["myForm"]["country"];

const form = document.getElementById('form');

var fname_error = document.getElementById('fname_error');
var lname_error = document.getElementById('lname_error');
var email_error = document.getElementById('email_error');
var country_error = document.getElementById('country_error');


FirstName.addEventListener("blur", fnameVerify, true);
LastName.addEventListener("blur", lnameVerify, true);
Email.addEventListener("blur", emailVerify, true);
Country.addEventListener("blur", countryVerify, true);

form.addEventListener('submit', (event) => {
    const isValid = validate();

    if(!isValid) event.preventDefault();
});

function validate(){
    let isValid = true;
    if(FirstName.value == ""){
        FirstName.style.border = "1px solid red";
        fname_error.textContent = "First Name is reuired";
        FirstName.focus();
        isValid = false;

    }

    if(LastName.value == ""){
        LastName.style.border = "1px solid red";
        lname_error.textContent = "Last Name is reuired";
        LastName.focus();
        isValid = false;

    }

    if(Email.value == ""){
        Email.style.border = "1px solid red";
        email_error.textContent = "Email is reuired";
        Email.focus();
        isValid = false;

    }

    if(Country.value == "Please Select"){
        Country.style.border = "1px solid red";
        country_error.textContent = "Select Country";
        Country.focus();
        isValid = false;

    }
    
    

    return isValid;

}

function fnameVerify(){
    if(FirstName.value !=""){
        FirstName.style.border = "1px solid #5E6E66";
        fname_error.innerHTML = "";
        return true;
    }

}

function lnameVerify(){
    if(LastName.value !=""){
        LastName.style.border = "1px solid #5E6E66";
        lname_error.innerHTML = "";
        return true;
    }

}

function emailVerify(){
    if(Email.value !=""){
        Email.style.border = "1px solid #5E6E66";
        email_error.innerHTML = "";
        return true;
    }

}

function countryVerify(){
    if(Country.value !=""){
        Country.style.border = "1px solid #5E6E66";
        country_error.innerHTML = "";
        return true;
    }

}


