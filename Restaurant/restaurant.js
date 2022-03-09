let user = document.querySelector('.user')


if (sessionStorage.getItem('useremail') != '' || sessionStorage.getItem('useremail') != undefined || sessionStorage.getItem('useremail') != null) {
    let userIcon = `<img class="user-icon-img" src="${sessionStorage.getItem('userimage')}" alt="user-img" />`;

  

    


    user.insertAdjacentHTML('afterbegin', userIcon)


}
else {
    console.log('yay')
    
}



signOutBtn.addEventListener('click', googleSignOut)

