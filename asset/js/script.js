// /*Toggle dropdown list*/
// function toggleDD(myDropMenu) {
//     document.getElementById(myDropMenu).classList.toggle("invisible");
// }

// /*Filter dropdown options*/
// function filterDD(myDropMenu, myDropMenuSearch) {
//     var input, filter, ul, li, a, i;
//     input = document.getElementById(myDropMenuSearch);
//     filter = input.value.toUpperCase();
//     div = document.getElementById(myDropMenu);
//     a = div.getElementsByTagName("a");
//     for (i = 0; i < a.length; i++) {
//         if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
//             a[i].style.display = "";
//         } else {
//             a[i].style.display = "none";
//         }
//     }
// }
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

//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
// var dropdown = document.getElementsByClassName("dropdown-btn");
// var i;

// for (i = 0; i < dropdown.length; i++) {
//     dropdown[i].addEventListener("click", function() {
//         this.classList.toggle("active");
//         var dropdownContent = this.nextElementSibling;
//         if (dropdownContent.style.display === "block") {
//             dropdownContent.style.display = "none";
//         } else {
//             dropdownContent.style.display = "block";
//         }
//     });
// }