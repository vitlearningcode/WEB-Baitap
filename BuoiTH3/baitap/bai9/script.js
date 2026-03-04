function kiemTraEmail () {
    // Lấy giá trị từ ô input có tên 'emailbox' trong form 'f'
    var the_email = document.f.emailbox.value;
    var acong = the_email.indexOf("@");
    var daucham = the_email.lastIndexOf(".");
    var khoangtrang = the_email.indexOf(" ");
    if ((acong < 1 ) || (daucham < acong + 1) || (daucham == the_email.length -1) || (khoangtrang != -1)) {
        alert('email không hợp lệ');
        return false;
    } else {
        alert ('Email không đúng');
        return true;
    }
 }

