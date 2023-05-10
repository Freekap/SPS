function singleplayer(move) {
    // Generate a random computer move
    const computerMoves = ['steen', 'papier', 'schaar'];
    const computerMove = computerMoves[Math.floor(Math.random() * computerMoves.length)];
    
    // Compare the user's move with the computer's move and determine the winner
    let result;
    if (move === computerMove) {
      result = "Gelijkspel";
    } else if (move === "steen" && computerMove === "schaar" ||
               move === "papier" && computerMove === "steen" ||
               move === "schaar" && computerMove === "papier") {
      result = "Je wint!";
      
    } else {
      result = "Computer wint.";
    }
    
    // Update the result message on the page
    $('#result').text(result);
  }
  
  // You can add additional JavaScript/jQuery code here if needed.
  