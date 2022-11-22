// ####### VARIÁVEIS ######## //
const modal = document.querySelector('.modal')
const overlay = document.querySelector('.overlay')
const openModalBtn = document.querySelector('.btn-open')
const closeModalBtn = document.querySelector('.btn-close')

// ####### ABRIR MODAL ######## //
const openModal = function () {
  modal.classList.remove('hidden')
  overlay.classList.remove('hidden')
}
openModalBtn.addEventListener('click', openModal)

// ####### FECHAR MODAL ######## //
const closeModal = function () {
  modal.classList.add('hidden')
  overlay.classList.add('hidden')
}
closeModalBtn.addEventListener('click', closeModal)
