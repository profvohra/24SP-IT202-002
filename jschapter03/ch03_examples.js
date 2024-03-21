// Slide 5
let lastName = "Hopper";
if (lastName == "Hopper") {
  console.log("Last name is Hopper.");
}
if (lastName != "Grace") {
  console.log("Last name is not Grace.");
}
// Slide 8
let rate = prompt("What is the rate?");
if(isNaN(rate) || rate < 0) {
  document.write("Rate is not valid.");
  document.write("<br>");
}
// Slide 10
let age = prompt("What is your age?");
if ( age >= 18 ) {
  alert("You may vote.");
} else {
  alert("You are not old enough to vote.");
}
// Slide 15
// use nested function calls
let years = parseInt(prompt("Enter number of years."));
while (isNaN(years) || years <= 0) {
  // ask again...
  years = parseInt(prompt("Years must be a valid positive number."));
}
document.write("Years value is " + years);
document.write("<br>");
// Slide 19
for(let index = 3; index > 0; index--) {
  document.write(index + "...");
}
document.write("Blast Off!");
document.write("<br>");
// Slide 31
const totals = [];   // empty array
totals[0] = 141.95;
totals[1] = 212.25;
totals[2] = 411;
console.log("size = " + totals.length);
totals[3] = 45.67;
console.log("size = " + totals.length);
// add a value to the last element of this array
totals[totals.length] = 67.89;
console.log("size = " + totals.length);
// Slide 34
// for-loop
let sum = 0;
for(var index = 0; index < totals.length; index++) {
  sum += totals[index];
}
document.write("The sum is " + sum);
document.write("<br>");
// Slide 36
// for-in loop
for(let index in totals) {
  document.write("totals[" + index + "]=" + totals[index]);
  document.write("<br>");
}
// Slide 37
// for-of loop
for(let value of totals) {
  document.write(value);
  document.write("<br>");
}
