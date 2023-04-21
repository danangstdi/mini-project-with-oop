//javascript hanya untuk custom dropdown

var container=document.querySelectorAll('.main')
    var select=document.querySelector('.select')
    var choosed=document.querySelector('.choosed')
    var menu=document.querySelector('.menu-section')
    var options=document.querySelectorAll('.menu-section li')

    select.addEventListener('click',()=>{
      select.classList.toggle('select-clicked')
      menu.classList.toggle('menu-open')
    })