const loginBtn = document.querySelector('#login-btn')
const registerBtn = document.querySelector('#register-btn')
let user = document.querySelector('.user')
let signOutBtn = document.querySelector('.signOutBtn')

let userIcon = `<img class="user-icon-img" src="${sessionStorage.getItem('userimage')}" />`;

if (sessionStorage.getItem('useremail') != '' || sessionStorage.getItem('useremail') != undefined || sessionStorage.getItem('useremail') != null) {
    


    user.insertAdjacentHTML('afterbegin', userIcon)


} else {
    console.log('broke')
}



    
    // loginBtn.classList.remove('hide')


// signOutBtn.addEventListener('click', function () {
//     var auth2 = gapi.auth2.getAuthInstance();
//     auth2.signOut().then(function () {
//         alert("You have been signed out successfully");
//         $(".data").css("display", "none");
//         $(".g-signin2").css("display", "block");
//         loginBtn.classList.remove('hide')
//         window.location="https://cgi.luddy.indiana.edu/~team51/Login/login.html"

//     });
    //"
// })









