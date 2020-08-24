$(document).ready(function() {
    $('#icon1').on('click', function() {
        var t = document.getElementById("icon1").innerText;
        if(t=='+'){
            $('#icon1').text("-");
        }
        else{
            $('#icon1').text("+");
        }
        $('#tquyet>div').toggleClass('an');
    });
    $('#icon2').on('click', function() {
        var t = document.getElementById("icon2").innerText;
        if(t=='+'){
            $('#icon2').text("-");
        }
        else{
            $('#icon2').text("+");
        }
        $('#sau>div').toggleClass('an');
    });
});