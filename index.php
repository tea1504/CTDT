<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css" type="text/css">
    <title>Chương Trình Đào Tạo</title>
</head>
<body>
    <div id="main">
        <div id="chinh">
            <div class="mon">
                <span class="mon_ma">CT103</span>
                <p class="mon_ten">Cấu Trúc Dữ Liệu</p>
                <div class="icon" id="icon1">+</div>
                <div class="icon" id="icon2">+</div>
            </div>
        </div>
        <div id="tquyet">
            <div class="an">
                <div class="mon">
                    <span class="mon_ma">CT101</span>
                    <p class="mon_ten">Lập Trình Căn Bản A</p>
                </div>
            </div>
        </div>
        <div id="sau">
            <div class="an">
                <div class="mon">
                    <span class="mon_ma">CT174</span>
                    <p class="mon_ten">PT Và TK Thuật Toán</p>
                </div>
                <div class="mon">
                    <span class="mon_ma">CT175</span>
                    <p class="mon_ten">Lý Thuyết Đồ Thị</p>
                </div>
                <div class="mon">
                    <span class="mon_ma">CT180</span>
                    <p class="mon_ten">Cơ Sở Dữ Liệu</p>
                </div>
            </div>
        </div>
    </div>
    <script src="vender\jquery\jquery-3.5.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
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
    </script>
</body>
</html>