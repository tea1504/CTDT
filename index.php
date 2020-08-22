<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Chương Trình Đào Tạo</title>
</head>
<body>
    <div id="main">
        <div id="chinh" class="mon">
            <span class="mon_ma">CT103</span>
            <p class="mon_ten">Cấu Trúc Dữ Liệu</p>
            <div class="icon" id="icon1">+</div>
            <div class="icon" id="icon2">+</div>
        </div>
    </div>
    <script src="vender\jquery\jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#icon1').on('click', function() {
                var t = document.getElementById("icon1").innerText;
                if(t=='+')
                    $('#icon1').text("-");
                else
                    $('#icon1').text("+");
            });
            $('#icon2').on('click', function() {
                var t = document.getElementById("icon2").innerText;
                if(t=='+')
                    $('#icon2').text("-");
                else
                    $('#icon2').text("+");
            });
        });
    </script>
</body>
</html>