/*Toggle dropdown list*/

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function FunctionSaison() {
    document.getElementById("DropdownSaison").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
document.getElementById('btnSaison').addEventListener('click', FunctionSaison)

function FunctionUser() {
    document.getElementById("DropdownUser").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
document.getElementById('btnUser').addEventListener('click', FunctionUser)