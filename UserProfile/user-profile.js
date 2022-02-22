const loginBtn = document.querySelector('#login-btn')
const registerBtn = document.querySelector('#register-btn')
let user = document.querySelector('.user')
let signOutBtn = document.querySelector('.signOutBtn')
let userNameCont = document.querySelector('.name');
let userEmailCont = document.querySelector('email');

if (sessionStorage.getItem('useremail') != '' || sessionStorage.getItem('useremail') != undefined || sessionStorage.getItem('useremail') != null) {
    registerBtn.classList.add('hide')
    loginBtn.classList.add('hide')
    user.classList.remove('hide')
    signOutBtn.classList.remove('hide')

    let name = sessionStorage.getItem('username');
    let email = sessionStorage.getItem('useremail');

    userNameCont.insertAdjacentHTML('afterbegin', name);
    userEmailCont.insertAdjacentHTML('afterbegin', email)

    let userIcon = `<img src="${sessionStorage.getItem('userimage')}" />`;






    user.insertAdjacentHTML('afterbegin', userIcon)


}