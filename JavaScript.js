const SearchBox = document.querySelector('.search-box');
let SearchBoxVisible = false;
SearchBox.addEventListener('click', () => {
    if(!SearchBoxVisible){
        SearchBox.classList.add('open');
        SearchBoxVisible = true;
    }else{
        SearchBox.classList.remove('open');
        SearchBoxVisible = false;
    }
});


const MenuButton = document.querySelector('.menu-button');
const MenuButton_Open = document.querySelector('#burger-menu');
const MenuButton_Open2 = document.querySelector('#burger-menu-2');
let menuOpen = false;
const Menu = () => {
    if(!menuOpen){
        MenuButton.classList.add('open');
        MenuButton_Open.classList.add('open');
        MenuButton_Open2.classList.add('open');
        menuOpen = true;
    }else{
        MenuButton.classList.remove('open');
        MenuButton_Open.classList.remove('open');
        MenuButton_Open2.classList.remove('open');
        menuOpen = false;
    }
}
MenuButton.addEventListener('click', Menu);