window.addEventListener("DOMContentLoaded", init);
function init() { 
    let menuList = document.querySelectorAll('.drop-down');

    function menuRuner() { 
        for (let i = 0; i < menuList.length; i++) {
        let openMenu = document.querySelector('.active')
        
        menuList[i].addEventListener('click', function (event) {
            event.preventDefault(); 
            let flag = document.querySelectorAll('.sub-sub-header-menu.active');
            if (flag.length > 0) {
                flag[0].classList.remove('active');
                flag[0].classList.add('hide');
                flag[0].parentElement.classList.remove('arrow-active');
                menuList[i].parentElement.classList.toggle('arrow-active');
                menuList[i].nextElementSibling.classList.toggle('hide');
                menuList[i].nextElementSibling.classList.toggle('active');
            } else { 
               menuList[i].parentElement.classList.toggle('arrow-active');
               menuList[i].nextElementSibling.classList.toggle('hide');
               menuList[i].nextElementSibling.classList.toggle('active');
            }       
        });
    };  
    };
    // Close the dropdown if the user clicks outside of it
    function coloseDropDown() { 
     window.onclick = function(event) {
      if (!event.target.matches('.drop-down')) {
          let dropdowns = document.querySelectorAll('.active'),
              arrowActive = document.querySelectorAll('.arrow-active');
        for (let i = 0; i < dropdowns.length; i++) {
           let openDropdown = dropdowns[i];
           if (openDropdown.classList.contains('active')) {
             openDropdown.classList.add('hide');
             openDropdown.classList.remove('active');
           }
            if (arrowActive[i].classList.contains('arrow-active')) { 
                arrowActive[i].classList.remove('arrow-active');
            }     
        }
      }
     }
    };
    
    function burgerLogic() { 
        let burger = document.querySelector('.burger-menu'),
            navMenu = document.querySelector('.header-navigation-wrapper');
        
        burger.addEventListener('click', function () { 

            burger.classList.toggle('bgr-active');
            navMenu.classList.toggle('bgr-active');
        })


    }

    menuRuner();
    coloseDropDown();
    burgerLogic();
   
   
};