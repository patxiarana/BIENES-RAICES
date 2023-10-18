


document.addEventListener('DOMContentLoaded', function(){
    eventListeners() ;
    
    darkMode();
})


function darkMode() {

  const preferencesUser = window.matchMedia('(prefers-color-schema: dark)') ;  

  //console.log(preferencesUser.matches)

  if(preferencesUser.matches) {
    document.body.classList.add('dark-mode-boton'); 
  } else {
    document.body.classList.remove('dark-mode-boton'); 
  }

  preferencesUser.addEventListener('change', function(){
    if(preferencesUser.matches) {
      document.body.classList.add('dark-mode-boton'); 
    } else {
      document.body.classList.remove('dark-mode-boton'); 
    }
  })


  const botonDarkMode =  document.querySelector('.dark-mode-boton');

  botonDarkMode.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode-boton')
  })
}

function eventListeners() {
 const mobileMenu = document.querySelector('.mobile-menu') ; 

 mobileMenu.addEventListener('click', navegacionResponsive)
}


function navegacionResponsive() {
  
   const navegacion = document.querySelector('.navegacion') ;

    navegacion.classList.toggle('mostrar')

}