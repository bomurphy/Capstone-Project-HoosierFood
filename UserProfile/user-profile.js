let user = document.querySelector('.user')
let userNameCont = document.querySelector('.name');
let userEmailCont = document.querySelector('.email');
let city = document.querySelector('.city').innerHTML
let street = document.querySelector('.street').innerHTML
let state = document.querySelector('.state').innerHTML
let zip = document.querySelector('.zip').innerHTML
let button = document.querySelector('.updateBtn')
let infoCont = document.querySelector('.info-container')

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

let userStreet = sessionStorage.getItem('userstreet')
let userState = sessionStorage.getItem('userstate')
let userCity = sessionStorage.getItem('usercity')
let userZip = sessionStorage.getItem('userzip')

if (userState != '' || userState != undefined || userState != null) {
    infoCont.classList.remove('hide')

    street == userStreet
    city == userCity
    state == userState
    zip == userZip
} else {
    console.log('fail')
}








signOutBtn.addEventListener('click', googleSignOut)

