// afficher des nombres de 0 à 100 avec [pair].
var   i;

i = 0;
while (i <= 100)
{
  if ((i % 2) === 0)
    document.write("[" + i + "]" + "<br />");
  else
    document.write(i + "<br />");
  i++;
}
