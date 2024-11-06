const wrapper = document.querySelector('.wrapper');
const hang= document.querySelector('.hang');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
    hang.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
    hang.classList.remove('active');
});
