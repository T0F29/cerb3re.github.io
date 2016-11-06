// tchenier @ afpa :: nb of words
// saisir une phrase et compter le nombre de mots
var   characters;

characters = prompt("Please enter a char or a chaine");
function nbLength(characters)  // return the nb of char (.length method)
{
  var i;

  i = 0;
  while (characters[i] != null)
  {
    i++;
  }
  return (i);
}
//
function nbWords(characters) // return the nb of words
{
  var nbWords;

  if ((nbLength(characters) === 0)
  || ((nbLength(characters) === 1) && (characters[0] === " ")))
      characters = prompt("Please enter something...");
  else if (characters[0] != " " && nbLength(characters) === 1)
      nbWords = 1;
  else
  {
    var i;

    i = 0;
    nbWords = 0;
    while (i < nbLength(characters))
    {
      if (characters[i] === " ")
      {
        if (characters[i] === " " && characters[i - 1] != " ")
          nbWords++;
      }
      i++;
    }
  }
  return (nbWords);
}
// document.write(characters[nbLength(characters) - 1]);
document.write(nbWords(characters));
