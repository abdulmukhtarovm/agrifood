// const loader = document.querySelector('.loader_bg')

// window.addEventListener('load', () => {
//     loader.style.display = 'none'
// })



window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.querySelector('.fixed-navbar').classList.add('actived')
  } else {
    document.querySelector('.fixed-navbar').classList.remove('actived')
  }
}

const burger = document.querySelector('.burger')
const nav = document.querySelector('.fixed-nav-list ul')

burger.addEventListener('click', () => {
  burger.classList.toggle('actived')
  nav.classList.toggle('actives')
})
// const burgerClick = () => {
// }