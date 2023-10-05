document.title = 'Page';

const url = window.location.href;
const pageNumber = document.getElementById('page-number');
let parameters = url.split('/');
pageNumber.innerText = parameters[5];