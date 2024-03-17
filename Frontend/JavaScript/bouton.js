btnMenu= document.getElementById('men')
ensMenu= document.getElementById('nav')
const links = document.querySelectorAll('nav li')

btnMenu.addEventListener('click', () => {
    ensMenu.classList.toggle("active");
}); 
links.forEach((links) => {
    links.addEventListener('click', () => {
        ensMenu.classList.remove("active");
    }); 
})
