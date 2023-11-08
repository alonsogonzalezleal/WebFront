import { PageViewController } from '../Controllers/PageViewController.js';

document.title = 'Page';

const h1_number = document.getElementById('page-number');

h1_number.innerText = PageViewController.getPageNumber();