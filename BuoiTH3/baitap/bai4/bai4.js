function ThoiGian() {
    var hientai = new Date();
    var ngay = hientai.getDate();
    var thang = hientai.getMonth();
    var nam  = hientai.getFullYear();

    var thu = hientai.getDay();

    switch(thu) {
        case 0: thu = "Chủ Nhật"; break;
        case 1: thu = "Thứ 2"; break;
        case 2: thu = "Thứ 3"; break;
        case 3: thu = "Thứ 4"; break;
        case 4: thu = "Thứ 5"; break;
        case 5: thu = "Thứ 6"; break;
        case 6: thu = "Thứ 7"; break;

    }
    document.write("Hôm nay là: " + thu + " Ngày " + ngay + " Thang " + thang + " Năm " + nam);
}