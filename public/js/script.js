let btn = document.querySelector("#btn"); 
let sidebar = document.querySelector(".sidebar"); 
let search = document.querySelector(".bi-search");
let homeContent = document.querySelector (".home_content");

btn.onclick = function(){
    sidebar.classList.toggle("sidebar-active");
    homeContent.classList.toggle("home_content-activate");
}

search.onclick = function(){
    sidebar.classList.toggle("sidebar-active");
    homeContent.classList.toggle("home_content-activate");
}
