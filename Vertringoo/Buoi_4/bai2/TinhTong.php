<html>
    <head>

    </head>
    <body>
        <?php 
  
    echo "Đã nhảy sang file TinhTong thành công! <br>"; // Thêm dòng này để test
   if (isset($_POST["btnTong"])) 
        {
            $a = $_POST["txtSo1"];
            $b = $_POST["txtSo2"];

            if (is_numeric($a) && is_numeric($b))
            {
                $c = $a + $b;
                echo "Tổng $a + $b = $c";
            }
             else echo "Giá trị nhập vào phải là số";
        }
?>
    </body>
</html>