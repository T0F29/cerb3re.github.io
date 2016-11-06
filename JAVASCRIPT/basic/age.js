// 1ere methode
var   anneeDeNaissance;
var   anneeEnCours;
var   age;

anneeDeNaissance = 1986;
anneeEnCours = 2016;
age = anneeEnCours - anneeDeNaissance;
document.write(
  "Je suis né en: "
  + anneeDeNaissance
  + "<br />"
  + "Nous sommes actuellement en: "
  + anneeEnCours
  + "<br />"
  + "J'ai donc: "
  + age
  + " ans"
);
// 2nd méthode
var   anneeDeNaissance;
var   anneeEnCours;
var   age;

anneeDeNaissance = prompt("En quelle année êtes-vous né ?");
anneeEnCours = new Date().getFullYear();
age = anneeEnCours - anneeDeNaissance;
document.write(
  "Je suis né en: "
  + anneeDeNaissance
  + "<br />"
  + "Nous sommes actuellement en: "
  + anneeEnCours
  + "<br />"
  + "J'ai donc: "
  + Number(age)
  + " ans"
);
