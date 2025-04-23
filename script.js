console.log('Script Start');

let profileBtn = document.querySelector("#profile");
let profileBox = document.querySelector("#profileBox");
let hamburger = document.querySelector("#hamburger");
let hamburgerBox = document.querySelector("#hamburgerBox");

profileBtn.addEventListener('click', () => {
    if(profileBox.style.display === "flex"){
        profileBox.style.display = "none";
    }
    else{
        profileBox.style.display = "flex";
        hamburgerBox.style.display = "none";
    }
})


hamburger.addEventListener('click', () => {
    if(hamburgerBox.style.display === "block"){
        hamburgerBox.style.display = "none";
    }
    else{
        hamburgerBox.style.display = "block";
        profileBox.style.display = "none";
    }
})
