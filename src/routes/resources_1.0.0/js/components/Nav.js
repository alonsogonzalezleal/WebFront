function dropdownItems() {
  var nav = document.getElementById('nav');
  if (!nav.classList.contains('opened')) {
    nav.classList.add('opened');
  } else {
    nav.classList.remove('opened');
  }
}