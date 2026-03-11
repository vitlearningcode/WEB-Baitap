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

    // Lấy dữ liệu từ form
    $malv = $_POST['txtMaLinhVuc']; 
    $tenlv = $_POST['txtTenLinhVuc']; 

    // Kiểm tra rỗng
    if((trim($malv) == "") || (trim($tenlv) == "")) { 
        echo "<p style='color:red;'>Phải nhập đầy đủ tên lĩnh vực và mã lĩnh vực</p>"; 
    } else {
        if(isset($malv) && isset($tenlv)) { 
            // Khởi tạo đối tượng kết nối
            $connect = new mysqli($servername, $username, $password, $dbname); 

            // Kiểm tra kết nối
            if ($connect->connect_error) { 
                die ("Không kết nối : " . $connect->connect_error); 
            }

            // Câu lệnh SQL
            $sql = "INSERT INTO linhvuc (MaLinhVuc, TenLinhVuc) VALUES ('$malv', '$tenlv')";

            // Thực thi lệnh query
            if ($connect->query($sql) === TRUE) {
                echo "<p style='color:blue;'><b>Thêm thành công (Hướng Đối Tượng)!</b></p>";
            } else {
                echo "Lỗi: " . $sql . "<br>" . $connect->error;
            }

            // Đóng kết nối
            $connect->close();
        }
    }
?>
    <p><a href="formlinhvuc.php">Nhập mới</a></p> 
</body>
</html>