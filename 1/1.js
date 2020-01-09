// Use capital letters for constructor names
function Person(fname, lname) {
    this.fname = fname;
    this.lname = lname;

    // return 6; // Primitive value is ignored when new operator is used
    // var arr = ["apple", "orange", 5]; // Reference value returned when new operator is used
    // return arr;
}
var person1 = new Person("abc", "def");
// var person2 = new Person; // Works perfectly fine if no arguments
// console.log(person1, person2); // Gives Person, Person
console.log(person1.fname);  // Gives abc