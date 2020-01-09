// Prototypal inheritance can be understood by using call and apply

function Person(fname, lname) {
    this.fname = fname;
    this.lname = lname;   
}
function sayMorning() {
    console.log("Good Morning, " +  this.fname);
}
var person1 = new Person("abc", "def");

// sayMorning();                // undefined

// person1.sayMorning();        // TypeError

// sayMorning(person1);

// To pass context to a function, we use call and apply
sayMorning.call(person1);   // Gives abc

// Call changes the context from window to the Person context, which executes the function as person1 = this.

// To pass parameters, we can say
// sayMorning.call(person1, 3)  // 3 becomes the parameters for the function

// Apply is used for taking only 2 arguments, as the 1st is the context and the 2nd is an array of paramters, but is the same in all other respects with call
// sayMorning.apply(person1, [3, 4]);