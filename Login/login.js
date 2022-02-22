//Using jQuery to add funtion to google sign in, sign out buttons


let signOut = document.querySelector('.signOutBtn')                

function onSignIn(googleUser) {

    // var profile = googleUser.getBasicProfile();
    // $("#name").text(profile.getName());
    // $("#email").text(profile.getEmail());
    // $("#image").attr('src', profile.getImageUrl());
    // $(".data").css("display", "block");
    // $(".g-signin2").css("display", "none");

    const profile = googleUser.getBasicProfile();
    userImg = profile.getImageUrl();
    userName = profile.getName();
    userEmail = profile.getEmail();

// set profile to object
// JSON Parse session to get data and pass the data

    if  (profile != "" || profile != undefined || profile != null) {  
        window.location.href = 'https://cgi.luddy.indiana.edu/~team51/Restaurant/restaurant.html'
        let loginBtn = document.querySelector('#login-btn')        
        let registerBtn = document.querySelector('#register-btn')        
        let user = document.querySelector('.user');

        sessionStorage.setItem('username', `${userName}`);
        sessionStorage.setItem('useremail', `${userEmail}`);
        sessionStorage.setItem('userimage', `${userImg}`);

        let userIcon = `<img class="user-icon-img"  src='${sessionStorage.getItem('userimage')}' alt='user_img' />        `;        
        
        loginBtn.classList.add('hide');        
        registerBtn.classList.add('hide');        
        user.classList.remove('hide')        
        user.insertAdjacentHTML('afterbegin', userIcon)        
        signOut.classList.remove('hide');        
        signOut.addEventListener('click', googleSignOut())

    }
}

function googleSignOut() {
    const auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        user.classList.add('hide')
        loginBtn.classList.remove('hide')

        // Timer to redirect back to login screen after sign out        


        

    });
}

signOutBtn.addEventListener('click', googleSignOut)