
const myEmail = document.getElementById("email");
const myPassword = document.getElementById("password");

function getEmail(){
    const email = document.getElementById("email");
    return email.value
}

function getPassword(){
    const password = document.getElementById("password");
    return password.value;
}

function checkInfo(myEmail, myPassword){
    inputPassword = getPassword();
    inputEmail = getEmail();

    if(inputEmail == myEmail && myPassword == inputPassword){
        return true;
    }
    else{
        return false;
    }
}

let loginForm = document.getElementById("loginForm");
loginForm.addEventListener("submit", (e) => {
    e.preventDefault(e)

    let exist = checkInfo("steevenamphimaque07@gmail.com", "myPassword");
    if (exist){
        document.location.href = "struct.html"
    }else{
        alert("Wrong")
    }
})

