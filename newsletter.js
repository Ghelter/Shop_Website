//
//
//
//Javascript for Newsletter site
'use strict';

function pop_up(form) {
    window.open("thankyou.html","SpecsWindow","toolbar=no,menubar=no,location=no,scrollbars=no,resizable=no,width=960,height=600");
    form.target = 'formpopup';
  //  window.location.replace('thankyou.html');
}

function CloseWin() {
  window.close();
}


/*
function createEventListener() {
var closeWindowDiv = document.getElementsByTagName("p")[0];
if (closeWindowDiv.addEventListener) {
  closeWindowDiv.addEventListener("click", closeWin, false);
} else if (closeWindowDiv.attachEvent) {
  closeWindowDiv.attachEvent("onclick", closeWin);
}
*/

function pageSetup() {
  createEventListener();
}
