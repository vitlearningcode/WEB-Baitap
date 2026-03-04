function giai_pt_bac_hai () {
    var x1, x2, a, b, c, d;
    a = parseInt (f.so_a.value);
    b = parseInt (f.so_b.value);
    c = parseInt (f.so_c.value);

    if (a == 0) 
        if (b == 0) 
            if (c == 0) 
                f.kq.value = 'Phuong trinh vo so nghiem';
            else 
                f.kq.value = 'Phuong trinh vo nghiem'
        else 
            f.kq.value = 'Phuong trinh co nghiem x = ' + (-c/b);
    else  {
        d = - (b*b  -4*a*c);
        if (d == 0) 
            f.kq.value = 'phuong trinh co nghiem kep x = ' + (-b/(2*a));
        else if (d < 0) 
            f.kq.value = 'phuong tinh vo nghiem';
        else {
            x1 = (-b - Math.sqrt(d)) / (2*a);
            x2 = (-b + Math.sqrt(d)) / (2*a);
            f.kq.value = 'phuong trinh co 2 nghiem rieng biet x1 = ' + x1 + ', x2 = ' + x2;
        }
    }
        
}