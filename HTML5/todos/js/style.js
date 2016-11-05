var id = 0;
var inputJS   = document.getElementById('inputHTML'); // Le formulaire
var list      = document.getElementById('insertHTML'); // l'endroit d'insertion du formulaire
var addButton = document.getElementById('addHTML'); // Le bouton HTML pour ajouter le text (avant la modale)
function todoList() {



    addButton.addEventListener("click", addItem); // Quand clique sur envoyer le formulaire

    createDeleteLink(); // Enlever le texte
    modifItem(); // modifie le texte
    prioItem(); // change la priorité
    removeItem(); // Enleve l'item

    function addItem() {  // Ajoute le texte

      if (inputJS.value === '') // Si le formulaire est vide, renvoie un message d'erreur
      {
        alert("Please insert something ...");
      }
      else { // Sinon ajoute le texte et les élements de type suppression, modification, ...
        var listElement = document.createElement('li');
        listElement.setAttribute("id", "element_" + id);
        listElement.innerText = inputJS.value;
        listElement.appendChild(createDeleteLink());
        listElement.appendChild(modifItem());
        listElement.appendChild(prioItem());

        list.appendChild(listElement);

        inputJS.value = "";
        document.getElementById('id01').style.display='none'; // Enleve la fenetre modale de l'insertion du texte
        id++;
      }
    }
}
function createDeleteLink() { // Creer le bouton pour enlever les élements

    var deleteLink = document.createElement('BUTTON');
    deleteLink.innerHTML = "Enlever";
    deleteLink.addEventListener("click", removeItem);
    return deleteLink;

}
function removeItem() { // Enlever un element

  var parent = this.parentNode.parentNode;  // va chercher l'élement parent
  var child = this.parentNode;               // va chercher l'enfant du parent

  parent.removeChild(child);                // Enleve les élements depuis l'enfant

}

function modifItem()
{
  var modifItem = document.createElement("BUTTON");
  console.log(inputJS.value);
  modifItem.innerText = "modifier";

  return modifItem;
}
function prioItem() // Ordre de priorité - A FAIRE
{
  var prioItem = document.createElement("RADIO");
  prioItem.innerHTML = "Priorité";

  return prioItem;
}
todoList();

// var id = 0;
//
// function checkPriority()
// {
//   var test = document.body.style.backgroundColor = "blue;"
//   return (test);
// }
//
// function deleteTodo()
// {
//
// }
//
// function addTodo()
// {
//   var newLi;
//   var actualValue;
//   var newNode;
//   var del;
//   var orderPriority;
//
//   newLi         = document.createElement("LI"); //creation d'un nouveau <li></li>
//   del           = document.createElement("BUTTON"); //creation d'un bouton
//   delName       = document.createTextNode("Delete"); //nommage en "Delete"
//   order         = document.createElement("BUTTON");
//   orderPriority = document.createTextNode("Priority"); //nommage en "Priority"
//   actualValue   = document.getElementById("inputHTML").value; //recupération du formulaire
//   newNode       = document.createTextNode(actualValue); //a partir du formulaire récupéré, création d'un noeud
//
//   newLi.appendChild(newNode); //ajout du text via le formulaire
//   del.appendChild(delName); // ajout du bouton delete
//   order.appendChild(orderPriority) //ajout du bouton Priority
//   if (actualValue === '')
//   { //Si le formulaire durant l'envoi est vide
//     alert("Please insert something before.");
//   }
//   else
//   { //Sinon, depuis le formulaire récupéré: ajout d'un <li></li>
//     document.getElementById("insertHTML").appendChild(newLi);
//     document.getElementById("insertHTML").appendChild(del);
//     document.getElementById("insertHTML").appendChild(order);
//     checkPriority();
//     deleteTodo();
//   }
//   id++;
// }
//
// document.getElementById('addHTML').addEventListener('click', addTodo);
