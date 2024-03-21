const scores = [];
// use do-while loop to get the scores from the user
let score = 0;
do {
  score = parseInt(prompt("Enter a test score, or enter -1 to end.", -1));
  // check range of input
  if(score >= 0 && score <= 100) {
    scores[scores.length] = score;
  } else if (score != -1) {
    alert("Score must be a valid number from 0 through 100.");
  }
} while(score != -1);

if(scores.length > 0) {
  // use for-in loop to sum the scores
  let total = 0;
  for(let index in scores) {
    total = total + scores[index];
    document.write("<p>");
    document.write(`Score ${index}: ${scores[index]}`);
    document.write("</p>");
  }

  // TODO calculate average
  // TODO document.write this value
}