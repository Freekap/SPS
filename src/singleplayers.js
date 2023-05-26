function singleplayer(move) {
    const computerMoves = ['steen', 'papier', 'schaar'];
    const computerMove = computerMoves[Math.floor(Math.random() * computerMoves.length)];
    
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
    
    $('#result').text(result);
  }
  

  