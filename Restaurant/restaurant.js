const loginBtn = document.querySelector('#login-btn')
const registerBtn = document.querySelector('#register-btn')
let user = document.querySelector('.user')
let signOutBtn = document.querySelector('.signOutBtn')

if (sessionStorage.getItem('useremail') != '' || sessionStorage.getItem('useremail') != undefined || sessionStorage.getItem('useremail') != null) {
    registerBtn.classList.add('hide')
    loginBtn.classList.add('hide')
    user.classList.remove('hide')
    signOutBtn.classList.remove('hide')

    let userIcon = `<img src="${sessionStorage.getItem('userimage')}" />`;

    user.insertAdjacentHTML('afterbegin', userIcon)


}

function userProfile() {
    // window.location.href = ''
    // To User Profile Page
}

user.addEventListener('click', userProfile());







// //Using jQuery to add funtion to google sign in, sign out buttons


// let signOut = document.querySelector('.signOutBtn')                

// function onSignIn(googleUser) {

//     // var profile = googleUser.getBasicProfile();
//     // $("#name").text(profile.getName());
//     // $("#email").text(profile.getEmail());
//     // $("#image").attr('src', profile.getImageUrl());
//     // $(".data").css("display", "block");
//     // $(".g-signin2").css("display", "none");

//     const profile = googleUser.getBasicProfile();
//     userImg = profile.getImageUrl();
//     userName = profile.getName();
//     userEmail = profile.getEmail();
//     if  (profile != "" || profile != undefined || profile != null) {  
//         window.location.href = 'https://cgi.luddy.indiana.edu/~bomurphy/capstone-individual/Restaurant/restaurant.html'
//         let loginBtn = document.querySelector('#login-btn')        
//         let registerBtn = document.querySelector('#register-btn')        
//         let user = document.querySelector('.user');        
//         let userIcon = `<img src='${userImg}' alt='user_img' />        `;        
        
//         loginBtn.classList.add('hide');        
//         registerBtn.classList.add('hide');        
//         user.classList.remove('hide')        
//         user.insertAdjacentHTML('afterbegin', userIcon)        
//         signOut.classList.remove('hide');        
//         // signOut.addEventListener('click', googleSignOut())

//         sessionStorage.setItem('username', `${userName}`);
//         sessionStorage.setItem('useremail', `${userEmail}`);
//         sessionStorage.setItem('userimage', `${userImg}`);

//     }
// }

// function googleSignOut() {
//     const auth2 = gapi.auth2.getAuthInstance();
//     auth2.signOut().then(function () {
//         alert("You have been signed out successfully");
//         $(".data").css("display", "none");


//         // Timer to redirect back to login screen after sign out        
// $(".g-signin2").css("display", "block");


        

//     });

// }