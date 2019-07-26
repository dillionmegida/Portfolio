"use strict";

// id of the gallery section where the images will be loaded
let galleryDiv = document.getElementById('gallery-section');

// Categories of gallery
let flyers = [
    'flyer_2019',
    'flyer_val2019',
    'flyer_flyer1',
    'flyer_flyer2',
    'flyer_flyer3',
    'flyer_shidah'
];

let toons = [
    'toon_mum-and-sis',
    'toon_lady',
    'toon_toonHead'
];

let logos = [
    'logo_matDept',
    'logo_els',
    'logo_heemacakes',
    'logo_002',
    'logo_shidah'
];

let totalPics = [];

//This function fetches items from the category array and pushes them in the total pics array
let pushPic = (...sources) => sources.forEach(source => source.forEach(pic => totalPics.push(pic)));

pushPic(flyers, toons, logos);

// This function loads pictures in the gallery div
let picHTML = (pic) => {
    galleryDiv.innerHTML += `
    <div class='galleryLg'>
        <img onclick='modal(this)' src='public/img/gallery/${pic}.jpeg' alt='Gallery Images'>
    </div>
    `;
}

// Load category into div section
let picsForDiv = (categoryName, categoryArr) => {
    galleryDiv.innerHTML = ''; // Clear the div



    let previousActiveLink = document.querySelector('.activeTag');
    previousActiveLink.classList.remove('activeTag');
    let activeLink = document.getElementById(categoryName);
    activeLink.classList.add('activeTag');
    categoryArr.forEach(pic => picHTML(pic))
    
    // setTimeout(()=> {}, 500) // Load the pictures in one second
    // category.forEach(pic => picHTML(pic))
};

// function to shuffle the array
let shuffle = arr => arr.sort(() => Math.random() - 0.5);
console.log(shuffle(totalPics));

picsForDiv('totalPics', shuffle(totalPics));

// To put image as background of modal div
// let modalContainer = document.getElementById('modal-container');
// let modalDiv = document.querySelector('.modal');
// document.body.onclick = () => { 
//     if(modalContainer.style.transform == 'scale(1)') {
//         modalContainer.style.transform = 'scale(0)';
//         console.log('ues');
//     }
// }
// let modal = imageId => {
//     // console.log(imageId.src);
//     // console.log(modalContainer);
//     modalDiv.style.backgroundImage = `url(${imageId.src})`;
//     modalContainer.style.transform = 'scale(1)';
// }