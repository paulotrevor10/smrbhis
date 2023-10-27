const showPopupBtn = document.querySelector('.btn-login');
const hidePopupBtn = document.querySelector('.form-popup .close-btn');


//show popup when click on button
showPopupBtn.addEventListener('click', () => {
    document.body.classList.toggle("show-popup");
});

//hide popup 
hidePopupBtn.addEventListener('click', () => showPopupBtn.click());
    

