
// To automatically focus on the main Div when the page loads
let mainDiv = document.getElementById('main');
if(mainDiv != null) mainDiv.focus();

var navToggle = document.getElementById('nav-links-toggle');
navToggle.style.display = 'none';

let date = new Date();
document.querySelectorAll('.year').forEach(footer => footer.innerHTML = date.getFullYear());;


if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
   navigator.serviceWorker.register('sw.js').then( () => {
    console.log('Service Worker Registered')
   })
 })
}
