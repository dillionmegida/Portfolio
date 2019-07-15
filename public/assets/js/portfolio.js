"use strict";

// id of the portfolio section where the images will be loaded
let portfolioDiv = document.getElementById('portfolio-section');

// Categories of portfolio
let flyers = [
    'flyer_2019',
    'flyer_val2019',
    'flyer_watchout',
    'flyer_flyer1',
    'flyer_flyer2',
    'flyer_flyer3'
];

let toons = [
    'toon_mum-and-sis',
    'toon_toonCap',
    'toon_toonHead'
];

let logos = [
    'logo_022k',
    'logo_els',
    'logo_matDept',
    'branding_shidah',
    'branding_vee-essence'
];

let totalPics = [];

//This function fetches items from the category array and pushes them in the total pics array
let pushPic = (...sources) => sources.forEach(source => source.forEach(pic => totalPics.push(pic)));

pushPic(flyers, toons, logos);

// This function loads pictures in the portfolio div
let picHTML = (pic) => {
    portfolioDiv.innerHTML += `
    <div class='portfolioLg'>
        <img onclick='modal(this)' src='public/img/portfolio/${pic}.jpg'>
    </div>
    `;
}

// Load category into div section
let picsForDiv = (categoryName, categoryArr) => {
    portfolioDiv.innerHTML = ''; // Clear the div



    let previousActiveLink = document.querySelector('.active');
    previousActiveLink.classList.remove('active');
    let activeLink = document.getElementById(categoryName);
    activeLink.classList.add('active');

    setTimeout(()=> {categoryArr.forEach(pic => picHTML(pic))}, 500) // Load the pictures in one second
    // category.forEach(pic => picHTML(pic))
};

picsForDiv('totalPics', totalPics);

// To put image as background of modal div
let modalContainer = document.getElementById('modal-container');
let modalDiv = document.querySelector('.modal');
document.body.onclick = () => { 
    if(modalContainer.style.transform == 'scale(1)') {
        modalContainer.style.transform = 'scale(0)';
        console.log('ues');
    }
}
let modal = imageId => {
    // console.log(imageId.src);
    // console.log(modalContainer);
    modalDiv.style.backgroundImage = `url(${imageId.src})`;
    modalContainer.style.transform = 'scale(1)';
}