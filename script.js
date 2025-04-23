console.log('Script Start');

let profileBtn = document.querySelector("#profile");
let profileBox = document.querySelector("#profileBox");

profileBtn.addEventListener('click', () => {
    if(profileBox.style.display === "flex"){
        profileBox.style.display = "none";
    }
    else{
        profileBox.style.display = "flex";
    }
})

