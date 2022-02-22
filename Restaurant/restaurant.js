const loginBtn = document.querySelector('#login-btn')
const registerBtn = document.querySelector('#register-btn')
let user = document.querySelector('.user')
let signOutBtn = document.querySelector('.signOutBtn')
let userIcon = `<img class="user-icon-img" src="${sessionStorage.getItem('userimage')}" />`;

if (sessionStorage.getItem('useremail') != '' || sessionStorage.getItem('useremail') != undefined || sessionStorage.getItem('useremail') != null) {
    registerBtn.classList.add('hide')
    loginBtn.classList.add('hide')
    user.classList.remove('hide')
    signOutBtn.classList.remove('hide')


    user.insertAdjacentHTML('afterbegin', userIcon)


} else {
    console.log('yay')
}

function googleSignOut() {
    window.location.href = 'https://cgi.luddy.indiana.edu/~team51/Login/login.html'
    sessionStorage.removeItem('useremail')
    sessionStorage.removeItem('username')
    sessionStorage.removeItem('userimage')
    user.style.display = 'none'

    
    loginBtn.classList.remove('hide')

}
signOutBtn.addEventListener('click', googleSignOut)









