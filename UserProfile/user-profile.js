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


// Cant get sign out function to work, show example on user-profile page where it redirects to login and keeps you signed in
// as well as show resturant page demo where it signs you out but does not redirect to login page




    user.insertAdjacentHTML('afterbegin', userIcon)


}
else {
    console.log('yay')
    
}


    function googleSignOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.googleSignOut().then(function () {
            alert("You have been signed out successfully");
            $(".data").css("display", "none");
            $(".g-signin2").css("display", "block");
        loginBtn.classList.remove('hide')
    });
}

signOutBtn.addEventListener('click', googleSignOut)

