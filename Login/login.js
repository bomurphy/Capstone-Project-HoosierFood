//Using jQuery to add funtion to google sign in, sign out buttons
function onSignIn(googleUser) {

    var profile = googleUser.getBasicProfile();
    $("#name").text(profile.getName());
    $("#email").text(profile.getEmail());
    $("#image").attr('src', profile.getImageUrl());
    $(".data").css("display", "block");
    $(".g-signin2").css("display", "none");

    if  (profile != "" || profile != undefined || profile != null){  
        window.location.href = 'https://cgi.luddy.indiana.edu/~team51/Restaurant/restaurant.html'
    }
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        alert("You have been signed out successfully");
        $(".data").css("display", "none");
        $(".g-signin2").css("display", "block");
    });
}