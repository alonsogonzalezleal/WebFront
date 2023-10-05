import { Person } from '../models/Person.js';

document.title = 'Person Data';

let formAddPerson = document.getElementById('form-add-person');

formAddPerson.addEventListener('submit', handleFormAddPerson);

function handleFormAddPerson(event) {
    event.preventDefault();

    let name = document.getElementById('input-name').value;
    let age = document.getElementById('input-age').value;

    if (name === '' || age === ''){    
        textResult.innerText = '';
        return;
    }

    let textResult = document.getElementById('text-result');
    let person = new Person(name, age);

    textResult.innerText = person.greeting();

}