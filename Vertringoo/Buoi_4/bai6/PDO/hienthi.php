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

    try {
        // Kết nối PDO
        $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM linhvuc";
        
        // Chuẩn bị và thực thi câu lệnh SQL
        $danhsach = $connect->prepare($sql);
        
        // Thiết lập kiểu dữ liệu trả về dạng mảng kết hợp (ASSOC)
        $danhsach->setFetchMode(PDO::FETCH_ASSOC);
        $danhsach->execute();
?>

    <table border="1" style="border-collapse: collapse; width: 50%; text-align: center;">
        <caption><b>Danh sách lĩnh vực (PDO)</b></caption>
        <tr>
            <th>STT</th>
            <th>Mã Lĩnh Vực</th>
            <th>Tên Lĩnh Vực</th>
        </tr>

        <?php
        $stt = 1;
        
        // Dùng vòng lặp while với hàm fetch() để lấy từng dòng dữ liệu
        while($row = $danhsach->fetch()) {
            echo "<tr>";
            echo "<td>" . $stt . "</td>";
            echo "<td>" . $row['MaLinhVuc'] . "</td>";
            echo "<td>" . $row['TenLinhVuc'] . "</td>";
            echo "</tr>";
            $stt++;
        }
        ?>
        
        <tr>
            <td colspan="3">
                <a href="formlinhvuc.php">Thêm lĩnh vực mới</a>
            </td>
        </tr>
    </table>

<?php
    } catch(PDOException $e) {
        // In lỗi nếu có
        die("Lỗi: " . $e->getMessage());
    }
    
    // Đóng kết nối
    $connect = null;
?>
</body>
</html>