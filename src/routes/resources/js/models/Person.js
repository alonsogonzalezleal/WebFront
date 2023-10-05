export class Person {
    name;
    age;

    constructor(name, age) {
        this.name = name;
        this.age = age;
    }

    greeting(){
        return `Hi! My name is ${this.name} and I am ${this.age} years old.`;
    }
}