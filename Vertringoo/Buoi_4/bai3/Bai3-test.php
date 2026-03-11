 <?php
        // Kiểm tra xem người dùng đã bấm nút "Kiểm tra chẵn lẻ" ????
        if (isset($_POST['btnKT'])) {
            $so = $_POST['txtso']; 
            
         
            if (is_numeric($so)) {
                // Ép kiểu về số nguyên để xét chẵn lẻ 
                $so = (int)$so; 
                
             //0 c - 1 L
                if ($so % 2 == 0) {
                    echo "<p style='color:blue;'><b>$so là số chẵn!</b></p>";
                } else {
                    echo "<p style='color:green;'><b>$so là số lẻ!</b></p>";
                }
            } else {
                echo "<p style='color:red;'><b>Giá trị nhập vào không phải là số!</b></p>";
            }
        }
    ?>