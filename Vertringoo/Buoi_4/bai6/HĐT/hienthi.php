<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Danh sách lĩnh vực</title>
</head>
<body>
<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = "vertrigo";
    $dbname = "quanly_tin";

    // Khởi tạo đối tượng kết nối
    $connect = new mysqli($servername, $username, $password, $dbname); 

    // Kiểm tra kết nối
    if ($connect->connect_error) {  
        die ("Không kết nối: " . $connect->connect_error);
    }

    $sql = "SELECT * FROM linhvuc"; 
    
    // Thực thi lệnh và lưu vào biến $danhsach
    $danhsach = $connect->query($sql); 
    
    // Kiểm tra nếu câu lệnh thất bại
    if (!$danhsach) {
        die ("Không thể thực hiện câu lệnh SQL: " . $connect->error); 
    }
?>

    <table border="1" style="border-collapse: collapse; width: 50%; text-align: center;">
        <caption><b>Danh sách lĩnh vực</b></caption> 
        <tr>
            <th>STT</th> 
            <th>Mã Lĩnh Vực</th>
            <th>Tên Lĩnh Vực</th> 
        </tr>

        <?php
        $stt = 1; 
        // Vòng lặp lấy từng dòng dữ liệu dạng mảng kết hợp (ASSOC)
        while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) { 
            echo "<tr>"; 
            echo "<td>{$stt}</td>"; 
            echo "<td>{$row['MaLinhVuc']}</td>"; 
            echo "<td>{$row['TenLinhVuc']}</td>"; 
            echo "</tr>"; 
            $stt++; 
        }
        // Đóng kết nối
        $connect->close(); 
        ?>
        
        <tr>
            <td colspan="3">
                <a href="formlinhvuc.php">Thêm lĩnh vực mới</a> 
            </td>
        </tr>
    </table>
</body>
</html>