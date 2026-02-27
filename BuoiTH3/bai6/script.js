function KiemTra() {
    //cách 1:
    var tdn = f.txtTenDangNhap.value;
    var mk = f.txtMatKhau.value;
    var xnmk = f.txtXNMK.value;

    var tdn = document.getElementsByName ("txtTenDangNhap")[0].value;
    //....

    if (tdn == "" || mk == "" || xnmk == "")
    {
        alert("các trường hợp không dược bỏ trống");
        return false;
    }
    // Kiểm tra chiều dài tên đăng nhập
    if(tdn.length < 6) {
        alert("Tên đăng nhập phải nhiều hơn 6 ký tu!");
        return false;
    }

    // Kiểm tra mật khẩu trùng khớp
    if(mk != xnmk) {
        alert("Xác nhận mật khẩu không chính xác!");
        return false;
    }
    
    return true;
}