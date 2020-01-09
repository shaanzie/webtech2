// Use capital letters for constructor names

// Every item in JS, including functions, is an object, and each object has a prototype
// This prototype is shared by all instances of that particular function
// Each prototype has a constrcutor pointing to the constructor of the object

// Methods declared for the object are not moved to the prototype, and each object has a copy of the method
// The movement of the method to the prototype needs to be done explicitly

function Person(fname, lname) {
    this.fname = fname;
    this.lname = lname;

    // return 6; // Primitive value is ignored when new operator is used
    // var arr = ["apple", "orange", 5]; // Reference value returned when new operator is used
    // return arr;

    // this.sayName = function() {
    //     console.log("Hello, " + this.fname);
    // }


    // To move it to the prototype
    Person.prototype.sayName = function() {
        console.log("Hello, " + this.fname);
    }
}
var person1 = new Person("abc", "def");
console.log(person1);
// var person2 = new Person; // Works perfectly fine if no arguments
// console.log(person1, person2); // Gives Person, Person
// console.log(person1.sayName());  // Gives Hello, abc