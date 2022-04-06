let user = document.querySelector('.user')
let userNameCont = document.querySelector('.name');
let userEmailCont = document.querySelector('.email');

if (sessionStorage.getItem('useremail') != '' || sessionStorage.getItem('useremail') != undefined || sessionStorage.getItem('useremail') != null) {
    user.classList.remove('hide')
    let userIcon = `<img class="user-icon-img" src="${sessionStorage.getItem('userimage')}" />`;

    let name = sessionStorage.getItem('username');
    let email = sessionStorage.getItem('useremail');

    userNameCont.insertAdjacentHTML('afterbegin', name);
    userEmailCont.insertAdjacentHTML('afterbegin', sessionStorage.getItem('useremail'))


    user.insertAdjacentHTML('afterbegin', userIcon)


}
else {
    console.log('yay')
    
}





signOutBtn.addEventListener('click', googleSignOut)

