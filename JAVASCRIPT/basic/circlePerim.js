// périmètre d'un cercle => 2 x pi x rayon
var   rayon;
var   pi;
var   rayonCercle;

rayon = 5;
pi    = Math.PI;
rayonCercle = 2 * pi * rayon;

document.write(
  "Le périmètre d'un cercle de "
  + rayon
  + " cm est de: "
  + (Math.round(rayonCercle * 100) / 100)
  + " cm à 2 virgules près."
);