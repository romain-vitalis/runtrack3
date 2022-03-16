function keylogger(e) {
  var keynum;

  if (document.event) {
      keynum = e.keyCode;
  } else if (e.which) { 
      keynum = e.which;
  }
  document.getElementById('textarea').textContent += String.fromCharCode(keynum);

}

document.addEventListener("keypress", keylogger, true);