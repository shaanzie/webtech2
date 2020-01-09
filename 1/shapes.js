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