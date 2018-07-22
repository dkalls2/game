const accordions = document.getElementsByClassName('has-submenu')
const adminSlideoutButton = document.getElementById('admin-slideout-button')

adminSlideoutButton.onclick = function(){
    this.classList.toggle('is-active');
    document.getElementById('admin-side-menu').classList.toggle('is-active');
}

for (let i = 0; i < accordions.length; i++) {
    
    if (accordions[i].classList.contains('is-active')) {
        const submenu = accordions[i].nextElementSibling
        submenu.style.maxHeight = submenu.scrollHeight + "px"
        submenu.style.marginTop = "0.75em"
        submenu.style.marginBottom = "0.75em"
        // setSubmenuStyles(submenu, submenu.scrollHeight + "px", "0.75em")
    }
        //we need to tell the accordian that if an item loads in as 'is-active', then we need to open up the menu.  
        // without this, it only triggers opening and closing the menu when we click on it.

    
    accordions[i].onclick = function() {
        this.classList.toggle('is-active');

        const submenu = this.nextElementSibling;
        if (submenu.style.maxHeight) {
            //menu is open, we need to close it now
            submenu.style.maxHeight = null
            submenu.style.marginTop = null
            submenu.style.marginBottom = null
        }else{
            //menu is closed, so we need to open it.
            submenu.style.maxHeight = submenu.scrollHeight + "px"
            submenu.style.marginTop = "0.75em"
            submenu.style.marginBottom = "0.75em"
        }
    }
    
}


// document.addEventListener('DOMContentLoaded', function () {

//     // Get all "navbar-burger" elements
//     var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  
//     // Check if there are any navbar burgers
//     if ($navbarBurgers.length > 0) {
  
//       // Add a click event on each of them
//       $navbarBurgers.forEach(function ($el) {
//         $el.addEventListener('click', function () {
  
//           // Get the target from the "data-target" attribute
//           var target = $el.dataset.target;
//           var $target = document.getElementById(target);
  
//           // Toggle the class on both the "navbar-burger" and the "navbar-menu"
//           $el.classList.toggle('is-active');
//           $target.classList.toggle('is-active');
  
//         });
//       });
//     }
  
//   });