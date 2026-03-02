// function checkEmail() {
//     var email = document.getElementById('email');
//     var filter =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
//     if (!filter.test(email.value)) {
//         alert('Hay nhap dia chi email hop le. \n Example@gmail.com');
//         email.focus();
//         return false;
//     } else {
//         alert('Ok roi day, email hop le.');
//     }
// }

function checkEmail() {
    var email = document.getElementById('email');
    
    // Regex đã loại bỏ các khoảng trắng dư thừa
    // Giải thích: 
    // ^[^\s@]+ : Bắt đầu bằng các ký tự không phải khoảng trắng hoặc @
    // @        : Phải có dấu @ ở giữa
    // [^\s@]+  : Sau đó là các ký tự không phải khoảng trắng hoặc @ (tên miền)
    // \.       : Phải có dấu chấm
    // [^\s@]+$ : Kết thúc bằng các ký tự không phải khoảng trắng hoặc @ (phần mở rộng .com, .vn...)
    var filter = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!filter.test(email.value)) {
        alert('Hãy nhập địa chỉ email hợp lệ. \nVí dụ: Example@gmail.com');
        email.focus(); // Thêm dấu ngoặc ()
        return false;
    } else {
        alert('Ok rồi đấy, email hợp lệ.');
        return true;
    }
}