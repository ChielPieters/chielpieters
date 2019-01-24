
function PostFunction() {
    var posts = ["Banana", "Orange", "Lemon", "Apple", "Mango", "Mango", "Mango", "Mango", "Mango"];
    var Extraposts = posts.slice(3, );
    document.getElementById("Show").innerHTML = Extraposts;
}

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
