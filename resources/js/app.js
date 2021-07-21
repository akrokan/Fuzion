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

while(hr = document.querySelector('hr')) {
  center = document.createElement("center");
  content = document.createTextNode("***");
  center.appendChild(content);
  hr.replaceWith(center);  
}
