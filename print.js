document.write("Annyoung");
var message="BYE";
var person={"firstname":"Min","lastname":"Yoongi", "age":"64"};
for(var prop in person){
    document.write("<p>"+prop+"="+person[prop]+"<p>");
}
// var= variable
// switch case is also known as flow control
let greet="HEllO WORLD";
for (let character of greet){
    document.write(character);
}

// function welcome(name='JK'){
//     document.write('hey',+name);

// }

// welcome();
// welcome("JK");

//prompt code
 function getSum(num1,num2){
    var total=num1+num2;
    return total;
 }
 var a=parseInt(prompt("enter first nmber"));
 var b=parseInt(prompt("enter secon nmber"));
 if(!Number.isInteger(b)){
    alert("Not a number");
 }
    document.write(getSum(a,b));

   //  given code is used to show the ok and cancel button
    if(confirm("Press the button")){
      txt="YOU pressed ok";
   }else{
       txt="YOU pressed cancel";
    }
    alter(txt);
   //  alter, confirm, prompt
   // var name=prompt("Rain");


// function of array
   var color=["REd","BLue"];
   color.push("Black");
   var color=["REd","BLue"];
   color.pop("Black");
   var color=["REd","BLue"];
   color.shift("Black");
   // element nikalxa 1st ko
   
   var color=["REd","BLue"];
   color.pop("Black");


   
  