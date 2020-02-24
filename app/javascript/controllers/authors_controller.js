import { Controller } from "stimulus"
import consumer from "../channels/consumer"

export default class extends Controller {
  static targets = [
    'list',
    'input',
    'real_field'
  ]

  input_change(e) {
    if (e.keyCode != 13) { return }
    e.preventDefault()
    this.add()
  }

  add_passively() {
    this.add()
  }

  add(e) {
    let val = this.inputTarget.value
    var li = document.createElement('li')
    li.classList.add('fade-in')
    li.innerHTML = `<span class="c-white author">${val}</span> <a href='#' class="link" data-action="click->authors#clicked">x</a>`
    this.listTarget.appendChild(li)
    this.inputTarget.value = ''
    this.updateList()
    if (e) { e.preventDefault() }
  }

  clicked(e){
    e.preventDefault()
    e.target.parentElement.remove()
    this.updateList()
  }

  updateList() {
    var val = []

    this.listTarget.querySelectorAll('.author').forEach((el) => {
      val.push(`"${el.innerText}"`)
    })

    this.real_fieldTarget.value = val.join(',')
  }
}
