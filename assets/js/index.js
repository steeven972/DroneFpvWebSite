

const inputEmail = document.getElementById("email").value;
const inputPassword = document.getElementById("loginForm").value;
const domains = ["@gmail.com", "@outlook.fr"]
let loginForm = document.getElementById("loginForm");
loginForm.addEventListener("submit", (e) => {
    e.preventDefault()

    if (inputEmail.includes("@gmail.com")){
        console.log("Good")
        e;
    }else{
        console.log("Incorrect domain name")
        document.location.href = "../controllers/loginPage.php"
    }
})



