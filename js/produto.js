const inputTamanho = document.querySelector("[name='tamanho']")
const outputTamanho = document.querySelector("[name=valorTamanho]")

inputTamanho.addEventListener("input", mostraTamanho)

function mostraTamanho(){
  outputTamanho.value = inputTamanho.value
}
