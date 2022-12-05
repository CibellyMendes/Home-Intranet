function OpenModal(element) {
  // ####### SETAR O SYSTEM TARGET NO INPUT HIDDEN ######## //
  document.getElementById('system_target').value = element

  // ####### VARIÁVEIS ######## //
  const modal = document.querySelector('.modal')
  const overlay = document.querySelector('.overlay')
  const openModalBtn = document.querySelector('.btn-open')
  const closeModalBtn = document.querySelector('.btn-close')

  // ####### ABRIR MODAL ####### //
  modal.classList.remove('hidden')
  overlay.classList.remove('hidden')
}
const closeModal = function () {
  // ####### VARIÁVEIS ######## //
  const modal = document.querySelector('.modal')
  const overlay = document.querySelector('.overlay')

  // ####### FECHAR MODAL ####### //
  modal.classList.add('hidden')
  overlay.classList.add('hidden')
}
