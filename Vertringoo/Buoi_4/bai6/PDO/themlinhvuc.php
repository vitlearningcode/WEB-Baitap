<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "vertrigo";
    $dbname = "quanly_tin";

    $malv = $_POST['txtMaLinhVuc'];
    $tenlv = $_POST['txtTenLinhVuc'];

    if ((trim($malv) == "") || (trim($tenlv) == "")) {
        echo "<p style='color:red;'>Phải nhập đầy đủ tên lĩnh vực và mã lĩnh vực</p>";
    } else {
        if (isset($malv) && isset($tenlv)) {
            try {
                // Khởi tạo kết nối PDO
                $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                // Thiết lập chế độ báo lỗi (Exception)
                $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                // Câu lệnh SQL
                $sql = "INSERT INTO linhvuc (MaLinhVuc, TenLinhVuc) VALUES ('$malv', '$tenlv')";
                
                // Thực thi lệnh bằng hàm exec() của PDO
                if ($connect->exec($sql)) {
                    echo "<p style='color:green;'><b>Thêm thành công (bằng công nghệ PDO)!</b></p>";
                }
                
            } catch(PDOException $e) {
                // Bắt và in ra lỗi nếu quá trình thực thi thất bại
                die("ERROR: Không thể thực thi. " . $e->getMessage());
            }
            
            // Đóng kết nối bằng cách gán null
            $connect = null;
        }
    }
?>
    <p><a href="formlinhvuc.php">Nhập mới</a></p>
</body>
</html>