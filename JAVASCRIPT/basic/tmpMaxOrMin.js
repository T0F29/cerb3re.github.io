// saisir une tempÃ©rature, en fonction d'un seuil afficher si il la tempÃ©rature est froide ou chaude
var   temperature;

temperature = prompt("Veuillez entrer une valeur numérique");
if (Number(temperature) > 0)
  document.write("Plus de zero °C est considéré comme \"chaud\".");
else
  document.write("Moins de zero °c est considéré comme \"froid\".");
// idem avec une troisiÃ¨me condition chaud , froid, tiÃ¨de
var   temperature;

temperature = prompt("Veuillez entrer une valeur numérique");
if (Number(temperature) > 10 && Number(temperature) < 20)
  document.write("Plus 10 à 20 °C: " + temperature +  "°C, est considéré comme \"tiède\".");
else if (Number(temperature) <= 10)
  document.write("10 °C et moins, cela est considéré comme \"froid\".");
else
  document.write("A partir de 20 °C cela est considéré comme \"chaud\".");
