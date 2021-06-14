// CREATION DE LA DIV
let elDiv = document.createElement("div");
elDiv.id = "divTP1";
// RECUPERATION DU BODY
let getBody = document.body;
// AJOUT DE LA DIV DANS LE BODY
getBody.prepend(elDiv);
// RECUPERATION DE LA DIV
let getDiv = document.getElementById("divTP1");
// CREATION DES BALISES ANCHOR
let elA1 = document.createElement("a");
elA1.href = "https://fr.wikipedia.org/wiki/Organisme_de_normalisation";
elA1.title = "Organisme de normalisation";
elA1.textContent = "organisme de standardisation";

let elA2 = document.createElement("a");
elA2.href = "https://fr.wikipedia.org/wiki/World_Wide_Web";
elA2.title = "World Wide Web";
elA2.textContent = "World Wide Web"
// CREATION ET SEPARATION DES ELEMENTS TEXTES (STRONG et SIMPLE TEXTE)
let textDiv1 = "Le ";
let textDiv2 = ", abrégé par le sigle "; 
let textDiv3 = ", est un ";
let textDiv4 = " à but non-lucratif chargé de promouvoir la comptabilité des technologies du ";
let textDiv5 = ".";
let strong1 = "<strong>World Wide Web Consortium</strong>";
let strong2 = "<strong>W3C</strong>";
// FONCTIONS D'INSERTION (CREATENODE ET APPENDCHILD)
function createAndAppendTextNode(text, parent)
{
    const content = document.createTextNode(text);
    parent.appendChild(content);
}
function createAndAppendStrongElement(textContent, parent)
{
    const strong = document.createElement("strong");
    strong.innerHTML = textContent;
    parent.appendChild(strong); 
}
function appendLinkElement(parent, link)
{
    parent.appendChild(link);
}
// UTILISATION DES FONCTIONS D'INSERTIONS DANS L'ORDRE
createAndAppendTextNode(textDiv1, getDiv);
createAndAppendStrongElement(strong1, getDiv);
createAndAppendTextNode(textDiv2, getDiv);
createAndAppendStrongElement(strong2, getDiv);
createAndAppendTextNode(textDiv3, getDiv);
appendLinkElement(getDiv, elA1);
createAndAppendTextNode(textDiv4, getDiv);
appendLinkElement(getDiv, elA2);
createAndAppendTextNode(textDiv5, getDiv);