const loginBtn = document.querySelector('#login-btn')
const registerBtn = document.querySelector('#register-btn')
let user = document.querySelector('.user')
let signOutBtn = document.querySelector('.signOutBtn')
let userNameCont = document.querySelector('.name');
let userEmailCont = document.querySelector('.email');
let userIcon = `<img class="user-icon-img" src="${sessionStorage.getItem('userimage')}" />`;

if (sessionStorage.getItem('useremail') != '' || sessionStorage.getItem('useremail') != undefined || sessionStorage.getItem('useremail') != null) {
    registerBtn.classList.add('hide')
    loginBtn.classList.add('hide')
    user.classList.remove('hide')
    signOutBtn.classList.remove('hide')

    let name = sessionStorage.getItem('username');
    // let email = sessionStorage.getItem('useremail');

    userNameCont.insertAdjacentHTML('afterbegin', name);
    userEmailCont.insertAdjacentHTML('afterbegin', sessionStorage.getItem('useremail'))







    user.insertAdjacentHTML('afterbegin', userIcon)


}
else {
    console.log('yay')
    
}


    function googleSignOut() {
        sessionStorage.removeItem('useremail')
        sessionStorage.removeItem('username')
        sessionStorage.removeItem('userimage')
        user.style.display = 'none'
        loginBtn.classList.remove('hide')
    
    }
signOutBtn.addEventListener('click', googleSignOut)