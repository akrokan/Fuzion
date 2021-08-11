const { each, defaultsDeep } = require('lodash');

require('./bootstrap');

require('alpinejs');
/* 
const tx = document.getElementsByTagName("textarea");
for (let t = 0; t < tx.length; t++) {
  tx[t].setAttribute("style", "height:" + (tx[t].scrollHeight) + "px;overflow-y:hidden;");
  tx[t].addEventListener("input", OnInput, false);
}

function OnInput() {
  this.style.height = "auto";
  this.style.height = (this.scrollHeight) + "px";
}*/

/*
  Recover *** from Markdown parsing
*/
while(hr = document.querySelector('hr')) {
  center = document.createElement("center");
  content = document.createTextNode("***");
  center.appendChild(content);
  hr.replaceWith(center);  
}

/*
  Block all link default behaviour
*/
$("a").click(function(event) {
//  event.preventDefault();
});
/*
$(".nav-item").click(function(){
  $.get(
    '/blog', // Le fichier cible côté serveur.
    'false', // Nous utilisons false, pour dire que nous n'envoyons pas de données.
//    nom_fonction_retour, // Nous renseignons uniquement le nom de la fonction de retour.
    'json' // Format des données reçues.
  );
});
*/

$('.nav-item').click(function (event) {
    // Avoid the link click from loading a new page
    event.preventDefault();
    console.log('clicked');
    // Load the content from the link's href attribute
    $('.content').load($(this).attr('href'));
});
