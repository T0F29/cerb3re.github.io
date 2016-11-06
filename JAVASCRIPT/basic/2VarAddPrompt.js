var   firstNumeric;
var   secondNumeric;
var   promptResult;

firstNumeric  = prompt("Veuillez entrer une valeur numérique:");
secondNumeric = prompt("Veuillez en entrer une seconde:");
promptResult  = Number(firstNumeric) + Number(secondNumeric);

document.write(
  "Vous avez entré: "
  + firstNumeric
  + " + "
  + secondNumeric
  + ",<br />"
  + "le résultat est: "
  + promptResult
);
