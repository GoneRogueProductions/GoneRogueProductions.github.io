// Dark mode toggle
let theme = true;
let context = false;
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    let theme = false;
}
$(document).keypress(function(e) {
    console.log("key");
    if (e.which == 191) {
        console.log("/");
        if (context == false) {
            console.log("focus");
            $("#searchBox").focus();
            showContext();
        }
        else {
            $("#searchBox").blur();
            showContext();
        }
    }
});

document.getElementById("b-dark").style.display = "none";
        document.getElementById("b-light").style.display = "flex";
        document.getElementById("darkTog").style.background = "rgb(35,39,47)";
        document.getElementById("darkTog").style.color = "rgb(235, 236, 240)";
        document.getElementById("darkTog1").style.background = "rgb(35,39,47)";
        document.getElementById("darkTog1").style.color = "rgb(235, 236, 240)";
        document.getElementById("search").style.background = "rgb(52, 58, 70,0.8)";
        document.getElementById("search").style.border = "0";
        document.getElementById("search").style.color = "rgb(235, 236, 240)";
        document.getElementById("footer").style.backgroundColor = "rgb(59, 66, 79)!important";
        document.getElementById("footer").style.color = "rgb(235, 236, 240)!important";
        document.querySelector(".continue-playing").style.background = "#444";

function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("searchBox");
    filter = input.value.toUpperCase();
    ul = document.getElementById("gamesList");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function showContext() {
    if (context == false) {
        $("#gamesList").css("display", "initial");
        $(".search").css("border-radius", "10px 10px 0 0");
        context = true;
    } else if (context == true) {
        $("#gamesList").css("display", "none");
        $(".search").css("border-radius", "10px");
        context = false;
    }
}
