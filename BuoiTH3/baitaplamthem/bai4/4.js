// remake

function ChamDiem() {
    var diem = 0;

    var danhSach = document.getElementsByTagName ('input');

    for (var i = 0; i < danhSach.length; i++) {
        var temp_cau = danhSach[i];

        if (temp_cau.type === 'radio' && temp_cau.checked)
            if (temp_cau.value === '1')
                diem++;
    }

    alert (" so cau ban lam dung la: " + diem + " / 5");
}