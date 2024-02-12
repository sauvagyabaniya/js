// <!-- imp for exam 10 marks -->
// <!-- WAP which include a function sum(). This function sum() should be designed to add am arbitary list of parameter. FOr eg if you call the function sum() as sum(1,2) it should return the result 3 and if again you call the funtion sum () as sum (1,3,4) it should return the result 8  -->

function sum(...args) {
  // ... is rest operator
  
  let result = 0;

  for (let i = 0; i < args.length; i++) {
    
      result += args[i];
  }

  return result;
}
console.log(sum(1, 2));        
console.log(sum(1, 3, 4));     
