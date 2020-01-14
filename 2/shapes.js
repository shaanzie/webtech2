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

function Square(size) {
    this.length = size;
    this.breadth = size;
}

Square.prototype = new Rectangle();
Square.prototype.constructor = Square;

Square.prototype.toString = function() {
    return "Square: " + this.length + "units";
}

var sq = new Square(5);
console.log(sq.area());
console.log(sq.toString());

// We don't assign Square's prototype to the Rectangle's prototype to avoid the Rectangle accessing the Square.