<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bài 5 - Tìm số nguyên tố</title>
</head>
<body>
    <?php      
        function KiemTraSNT($a) {
            if ($a <= 0) {
                return false;
            } else {
                for ($i = 2; $i <= $a / 2; $i++) {
                    if ($a % $i == 0) {
                        return false;
                    }
                }
                return true;
            }
        }
       
        if (isset($_POST['btnKT'])) {
            $so = $_POST['txtSo1']; 
            
            if (is_numeric($so)) {
                if ($so <= 0) {
                    echo "<p style='color:red;'><b>$so không hợp lệ để tìm số nguyên tố</b></p>";
                } else {
                    $dem = 0;
                    $chuoi = "";
                    
                    // Vòng lặp chạy từ 1 đến gần bằng $so để tìm các số nguyên tố nhỏ hơn $so
                    for ($i = 1; $i < $so; $i++) {
                        if (KiemTraSNT($i) == true) {
                            $chuoi .= $i . " "; // Nối số nguyên tố vào chuỗi
                            $dem++; // Tăng biến đếm
                        }
                    }
                    echo "<p style='color:blue;'><b>Có $dem số nguyên tố < $so là: $chuoi</b></p>";
                }
            } else {
                echo "<p style='color:red;'><b>Giá trị nhập vào phải là số!</b></p>";
            }
        }
    ?>

    <hr>
    <form method="POST" action="Bai5.php">
        Nhập số n: <input type="text" name="txtSo1" size="5" />
        <input type="submit" name="btnKT" value="Tìm số nguyên tố" />
    </form>
</body>
</html>