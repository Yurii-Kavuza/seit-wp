(() => {
  const refs = {
    openMenuBtn: document.querySelector('.menu__open'),
    closeMenuBtn: document.querySelector('.menu__close'),
    menu: document.querySelector('.mob-menu'),
  };

  refs.openMenuBtn.addEventListener('click', showMenu);
  refs.closeMenuBtn.addEventListener('click', hideMenu);
 
  function showMenu() {
    refs.menu.classList.remove('is-hidden');
    document.body.style.overflow = 'hidden';
  }

    function hideMenu() {
    refs.menu.classList.add('is-hidden');
    document.body.style.overflow = 'auto';
}
  
})();