function Rectangle(length, breadth){
    this.length = length;
    this.breadth = breadth;

    Rectangle.prototype.area = function() {
        console.log(this.length*this.breadth);
     
    }
    Rectangle.prototype.toString = function(){
        console.log((this.length*this.breadth).toString());
    }   
}

var rect = new Rectangle(3, 4);
rect.toString();

// To show inheritance
// function Square(size) {
//     this.length = size;
//     this.breadth = size;
// }

// Square.prototype has to be instantiated as a inheritance of rectangle object
Square.prototype = new Rectangle();

Square.prototype.constructor = Square;

Square.prototype.toString = function() {
    return "Square: " + this.length + "units";
}

var sq = new Square(5);
console.log(sq.area());
console.log(sq.toString());

// We don't assign Square's prototype to the Rectangle's prototype to avoid the Rectangle accessing the Square.

// This does not work as normal inheritance methods, so the super keyword is used, and this is called construcotr stealing
function Square(size) {

    // Call rectangle constructor by using call and apply
    Rectangle.apply(this, [size, size]);
    // Another way of doing this
    // Rectangle.call(this, size, size);
}