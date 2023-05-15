const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const loginLink2 = document.querySelector('.login-link2');
const loginLink3 = document.querySelector('.login-link3');
const registerLink = document.querySelector('.register-link');
const forgotpasswordLink = document.querySelector('.forgotpassword-link');
const resetpasswordLink = document.querySelector('.resetpassword-linkbtn');
const nextregisterLink = document.querySelector('.nextregister-linkbtn');
const previousregisterLink = document.querySelector('.previousregister-linkbtn');
const returnforgotLink = document.querySelector('.returnforgot-linkbtn');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');
const registerButton = document.querySelector('.register-button');
const loginButton = document.querySelector('.login-button');

const activateRegister = () => {
    wrapper.classList.add('active');
};

registerLink.addEventListener('click', activateRegister);
registerButton.addEventListener('click', activateRegister);

const activateLogin = () => {
    wrapper.classList.remove('active');
}

loginButton.addEventListener('click', activateLogin);

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

returnforgotLink.onclick = (e) => {
    e.preventDefault();
    wrapper.classList.remove('reset');
};

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});

