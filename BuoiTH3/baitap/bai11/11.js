function tinh() {
    var tiengiat = 0, tienhap = 0, tienui = 0;
    if (f1.giat.checked == true)
        tiengiat = f1.giat.value;
    if (f1.hap.checked == true)
        tienhap = f1.hap.value;
    if (f1.ui.checked == true)
        tienui = f1.ui.value;

    f1.sotien.value = (eval (tiengiat) + eval (tienhap) +eval (tienui)) *f1.sokg.value;
}