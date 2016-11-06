// - saisir un tableau contenant 3 nom  de fruit, inverser le premier element avec le dernier.
var tableauDeFruits;
var bolDeFruits;
var i;

tableauDeFruits = [];
bolDeFruits = [];
tableauDeFruits[0] = "pomme";
tableauDeFruits[1] = "poire";
tableauDeFruits[2] = "peche";
i = 0;
//avant
document.write("<hr>avant:<hr>");
while (i < tableauDeFruits.length)
{
  document.write(tableauDeFruits[i++] + "<br />");
}
bolDeFruits[0] = tableauDeFruits[0]; // pomme
tableauDeFruits[0] = tableauDeFruits[2]; // pomme => peche
tableauDeFruits[2] = bolDeFruits; // peche => pomme
//apres
document.write("<hr>apres:<hr>");
i = 0;
while (i < tableauDeFruits.length)
{
  document.write(tableauDeFruits[i++] + "<br />");
}
