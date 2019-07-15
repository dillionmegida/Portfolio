"use strict";
let date = new Date();
document.querySelector('.year').forEach(footer => footer.innerHTML = date.getFullYear());;

// window.onscroll = function() {
// 	let links = ['home-section', 'portfolio-section'];
// 	links.forEach(function(link) {
// 		if(window.pageYOffset + 200 >= document.getElementById(link).offsetTop) {
// 			let nav = link.slice(0, link.length-8);
// 			let otherLinks = document.getElementsByClassName('active')[0].classList.remove('active');
// 			document.getElementById(nav).classList.add('active');

// 	} 
	
// 	})
// }
