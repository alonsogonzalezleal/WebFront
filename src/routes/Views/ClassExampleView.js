import { ClassExampleViewController } from '../Controllers/ClassExampleViewController.js';

document.title = 'Person Data';

const formAddPerson = document.getElementById('form-add-person');
const textResult = document.getElementById('text-result');
const inputName = document.getElementById('input-name');
const inputAge = document.getElementById('input-age');

formAddPerson.addEventListener('submit', handleFormAddPerson);

function handleFormAddPerson(event) {
    event.preventDefault();

    let name = inputName.value;
    let age = inputAge.value;

    textResult.innerText = ClassExampleViewController.getGreeting(name, age);

}