function kiemtraform () {
    if (f.txtHoTen.value == '') {
        alert ('Tên không được bỏ trống!');
        f.txtHoTen.focus();
        return false;
    }

    var d = new Date();
    if (d.getFullYear() - f.optNamSinh.value < 16) {
        alert('Nắm sinh không hợp lệ! ứng viên phải từ 16 tuổi!');
        f.optNamSinh.focus();
        return false;
    }

    if ((f.chkHinhThucToanTG.checked == false)  && (f.chkHinhThucBanTG.checked == false)) 
    {
        alert ('Phải chọn ít nhất một hình thức làm việc');
        return false;
    }

    hienthithongtin();
    return true;
}

function kiemtraluong () {
    if (isNaN (f.txtMucLuong.value)) {
        alert ('Mức lương phải là số!');
        f.txtMucLuong.focus();
        return false;
    }
    return true;
}

function hienthithongtin () {
    var csmoi = window.open('');
    csmoi.document.writeln('Cảm ơn ! Bên dưới là thông tin đăng kí của bạn: ');
    csmoi.document.writeln('Họ tên: ' + f.txtHoTen.value);
    csmoi.document.writeln('Năm sinh: ' + f.optNamSinh.value);
    csmoi.document.writeln('Giới tính: ');
    if (f.radGioiTinh[0].checked == true)
        csmoi.document.writeln(f.radGioiTinh[0].value);        
    else
        csmoi.document.writeln(f.radGioiTinh[0].value);

    csmoi.document.writeln ('Mức lương đề nghị: ' + f.txtMucLuong.value);
    csmoi.document.writeln ('Hình thức làm việc: ');

    if(f.chkHinhThucToanTG.checked == true)
        csmoi.document.writeln (f.chkHinhThucToanTG.value);
    if (f.chkHinhThucBanTG.checked == true)
        csmoi.document.writeln (f.chkHinhThucBanTG.value);

    csmoi.document.writeln ('Thông tin bổ sung: ' + f.txtThongTin.value);


}