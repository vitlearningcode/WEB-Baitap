<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bài 4 - Tìm số lớn nhất</title>
</head>
<body>
    <?php
        // Dùng $_GET thay vì $_POST để hứng dữ liệu
        if (isset($_GET['btnKT'])) {
            $a = $_GET['txtSo1']; 
            $b = $_GET['txtSo2']; 
            $c = $_GET['txtSo3']; 
            
           
            if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
                
                $max = max($a, $b, $c);
                echo "<p style='color:green;'><b>Số lớn nhất của $a, $b, $c là $max</b></p>";
            } else {
                echo "<p style='color:red;'><b>Giá trị nhập vào phải là số!</b></p>";
            }
        }
    ?>

    <hr>
    <form method="get" action="bai4.php">
        Số thứ 1: <input type="text" name="txtSo1" size="5" /><br><br>
        Số thứ 2: <input type="text" name="txtSo2" size="5" /><br><br>
        Số thứ 3: <input type="text" name="txtSo3" size="5" /><br><br>
        <input type="submit" name="btnKT" value="Tìm số lớn nhất" />
    </form>
</body>
</html>