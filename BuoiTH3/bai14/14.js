function timucln () {
    var x,y,z,d;
    x = parseInt (f.a.value);
    y = parseInt (f.b.value);
    so1 = x;
    so2 = y;

    while (so1 != so2) {
        if (so1 > so2) so1 -= so2;
        else            so2 -= so1;
     }

     f.x.value = eval (so1);
     so2 = (x*y) / so1;
     f.y.value = eval (so2);


}