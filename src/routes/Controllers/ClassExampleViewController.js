import { ClassExample } from '../Models/ClassExample.js';

export class ClassExampleViewController {

    static getGreeting(name, age){

        try {
            if (!name || !age){
                return '';
            }
            return ClassExample.getGreeting(name, age);
            
        } catch (error) {
            console.log(error);
            return 'Error';
        }
    }
}