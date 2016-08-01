// #navbar appears with an animation
// Pour modifier la vitesse :
// jouer avec la valeur du setInterval et celle du Npos = Npos+x
// Pour modifier la hauteur de laquelle ça bouge :
// jouer avec le if (Npos== x) et le navbar.css
var navbar = $('.overlay-nav');
var barreIntro = $('.intro-divider');
var Npos = 0;
var Nopacity = 0;
var Nwidth = 0;
var Nrun = setInterval(animation, 80);
function animation() {
    if (Npos == 60) {
        clearInterval(Nrun);
    }
    else {
        Npos = Npos+6;
        Nopacity = Nopacity + 0.1;
        Nwidth = Nwidth + 13;
        navbar.css('top',-60+Npos+'px');
        navbar.css('opacity',Nopacity);
        barreIntro.css('width', Nwidth + 'px');
    }
}