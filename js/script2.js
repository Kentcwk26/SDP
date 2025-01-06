const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const loginLink2 = document.querySelector('.login-link2');
const loginLink3 = document.querySelector('.login-link3');
const registerLink = document.querySelector('.register-link');
const forgotpasswordLink = document.querySelector('.forgotpassword-link');
const resetpasswordLink = document.querySelector('.resetpassword-linkbtn');
const nextregisterLink = document.querySelector('.nextregister-linkbtn');
const previousregisterLink = document.querySelector('.previousregister-linkbtn');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active'); 
});

forgotpasswordLink.addEventListener('click', ()=> {
    wrapper.classList.add('forgot'); 
});

loginLink2.addEventListener('click', ()=> {
    wrapper.classList.remove('forgot'); 
});

resetpasswordLink.onclick = (e) => {
    e.preventDefault();
    wrapper.classList.add('reset');
};

nextregisterLink.onclick = (e) => {
    e.preventDefault();
    wrapper.classList.add('next'); 
};

loginLink3.addEventListener('click', ()=> {
    wrapper.classList.remove('next'); 
    wrapper.classList.remove('active');
});

previousregisterLink.onclick = (e) => {
    e.preventDefault();
    wrapper.classList.remove('next');
};

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});