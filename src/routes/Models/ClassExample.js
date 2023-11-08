import { Person } from '../Models/Person.js';

export class ClassExample {

    static getGreeting(name, age){

        try {
            let person = new Person(name, age);        
            return person.greeting();
            
        } catch (error) {
            console.log(error);
            return 'Error';
        }
    }
}