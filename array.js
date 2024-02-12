   // Accessing erray Element using loop
var fruits=["Apple","Banana","Cherry","Strawberry"];
   
for(var i=0; i< fruits.length;i++){
   document.write(fruits[i] +"<br>");
}
for(var fruit of fruits){
   document.write(fruit +"<br>");

}
for(var i in fruits){
   document.write(fruits[i] +"<br>");
}


// creating Object
var person={
    name:"Min Yoongi",
    age:20,
    gender:"Male",
    displayName:function(){alter(this.name)}
};

// Dot notation 
// document.write(person.name);
// bracket notation
// document.write(person["gender"]);

// calling method Object
// java script class

class Person{
    constructor(name){
        this.name=name;
    }
    getName(){
        return this.name;
    }
}
let person=new Person("John");
person.getName();

// js class is not an Object it is a templete for  js object


