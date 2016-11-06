// saisir un chiffre, dÃ©terminer si il est impair ou pair
var   saisi;

saisi = prompt("Veuillez entrer une valeur numérique");
if ((saisi % 2) === 0)
  document.write("Votre saisi est pair.");
else
  document.write("Votre saisi est impair.");
