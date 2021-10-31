/*
Daily Debuggers
Sprint 2
JavaScript file for validating user input in search bar.
 */


let out = document.getElementById("out");


document.getElementById("search-form").onsubmit = validate;

function validate() {

    let isValid = true;

    clearErrors();

    // Validate search bar input
    let input = document.getElementById("input").value;
    if (input === "") {
        document.getElementById("error-search").style.display = "block";
        isValid = false;
    }

    return isValid;

}

function clearErrors(){

    let errors = document.getElementsByClassName("err");
    for (let i=0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }
}
