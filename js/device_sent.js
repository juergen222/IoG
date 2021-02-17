$(document).ready(function() {
    $("#show_btn").click(function (){

    $("#mainCon").load("view_data.php", {nameOfDevice : "John"});

        location.href = "../php/view_data.php";
});
});