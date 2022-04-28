function checkPass() {
  var clave = document.getElementById('clave')
  // var pass2 = document.getElementById('pass2');
  var message = document.getElementById('error-nwl')
  var goodColor = '#66cc66'
  var badColor = '#ff6666'

  if (clave.value.length > 5) {
    clave.style.backgroundColor = goodColor
    message.style.color = goodColor
    message.innerHTML = 'contraseña segura!'
    console.log(clave.value)
  } else {
    clave.style.backgroundColor = badColor
    message.style.color = badColor
    message.innerHTML = ' tienes que introducir al menos 6 dígitos!'
    return
  }
}
