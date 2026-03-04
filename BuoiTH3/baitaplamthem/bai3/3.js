function tinhtien() {
    var laysoluong = document.getElementById("soluong").value;
    var maylanh = document.getElementById("maylanh").checked;
    var kqsotien = document.getElementById('sotien');

    if (laysoluong.trim() === "" || isNaN(laysoluong)) {
        alert ('Vui long nhap so nguoi hop le!');
        document.getElementById("soluong").focus();
        return;
    }

    var soluong = Number(laysoluong);
    if (soluong < 0) {alert ('so luong nguoi phai lon hon 0'); return;}

    var tongtien = soluong * 300;
    if (soluong > 3) tongtien -= (tongtien *0.1);

    var phuthu = 100;
    if (maylanh) tongtien +=phuthu;

    kqsotien.value = tongtien;
}