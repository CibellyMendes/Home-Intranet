function OpenModal() {
  // ####### VARIÁVEIS ######## //
  const modal = document.querySelector('.modal')
  const overlay = document.querySelector('.overlay')
  const openModalBtn = document.querySelector('.btn-open')
  const closeModalBtn = document.querySelector('.btn-close')
  modal.classList.remove('hidden')
  overlay.classList.remove('hidden')
}

// ####### ABRIR MODAL ######## //
// const openModal = function () {}
// openModalBtn.addEventListener('click', openModal)

// ####### FECHAR MODAL ######## //
const closeModal = function () {
  const modal = document.querySelector('.modal')
  const overlay = document.querySelector('.overlay')
  modal.classList.add('hidden')
  overlay.classList.add('hidden')
}
// closeModalBtn.addEventListener('click', closeModal)
