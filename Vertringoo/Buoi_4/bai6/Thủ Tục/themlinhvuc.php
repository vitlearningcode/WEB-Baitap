<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
    // Thông tin cấu hình kết nối Vertrigo
    $servername = "localhost";
    $username = "root";
    $password = "vertrigo";
    $dbname = "quanly_tin"; 

    // Lấy dữ liệu người dùng gõ từ form
    $malv = $_POST['txtMaLinhVuc'];
    $tenlv = $_POST['txtTenLinhVuc'];

    // Kiểm tra xem người dùng có để trống ô nào không
    if ((trim($malv) == "") || (trim($tenlv) == "")) {
        echo "<p style='color:red;'>Phải nhập đầy đủ tên lĩnh vực và mã lĩnh vực!</p>";
    } else {
        //mở kết nối
        // địaâchi kết nối vào Database
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        
        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

       
        $sql = "INSERT INTO linhvuc (MaLinhVuc, TenLinhVuc) VALUES ('$malv', '$tenlv')";

        // Chạy lệnh SQL
        if (mysqli_query($conn, $sql)) {
            echo "<p style='color:blue;'><b>Thêm lĩnh vực thành công!</b></p>";
        } else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Đóng kết nối
        mysqli_close($conn);
    }
?>
    <p><a href="formlinhvuc.php">Nhập mới</a></p>
</body>
</html>