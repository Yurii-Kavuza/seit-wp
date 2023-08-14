(() => {
  const refs = {
    openModalBtn: document.querySelector('[data-modal-open]'),
    closeModalBtn: document.querySelector('[data-modal-close]'),
    modal: document.querySelector('[data-modal]'),
  };

  refs.openModalBtn.addEventListener('click', renderMenu);
  window.addEventListener('keydown', onEscKeyPress);
  

function onModalClose() {
  window.removeEventListener('keydown', onEscKeyPress);
  refs.modal.classList.add('is-hidden');
  document.body.style.overflow = 'auto';
}

function onEscKeyPress(event) {
  const ESC_KEY_CODE = 'Escape';
  if (event.code === ESC_KEY_CODE) {
    onModalClose();
  }
  }
  
  function renderMenu() {
    refs.modal.classList.remove('is-hidden');
    document.body.style.overflow = 'hidden';
    window.addEventListener('keydown', onEscKeyPress);
    refs.closeModalBtn.addEventListener('click', onModalClose);    
    document.body.classList.add('show-modal');
  }
})();