var puzzles = new Array();
puzzles[0] = "Life of pI";
puzzles[1] = "Revenge of the Nerds";
puzzles[2] = "Raiders of the Lost Ark";
puzzles[3] = "The Shawshank Redemption";
puzzles[4] = "Pulp Fiction";
puzzles[5] = "Forrest Gump";

var div_used;
var div_puzzle;
var div_available;

var numStrikes = 0;
var puzzle;

var alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWZYZ';

function initializeGame(){
	div_used = document.getElementById('used');
	div_puzzle = document.getElementById('puzzle');
	div_available = document.getElementById('available');
	
	setupButtons();
}

function setupButtons(){
	for(var i=0; i<alphabet.length;i++){
		var l = document.createElement('div');
		l.innerHTML = alphabet[i];
		l.className = 'btnLetter';
		l.onclick = function(){ selectLetter(this);}
		div_available.appendChild(l);
	}
}

function startGame(){
	document.getElementById('splashScreen').style.display = 'none';
	document.getElementById('man').src = 'images/stick_0.png';
	newPuzzle();
}

function newPuzzle(){
	var puzzleID = Math.floor(Math.random()*puzzles.length);
	// div_puzzle.innerHTML = puzzles[puzzleID];
	puzzle = puzzles[puzzleID].toUpperCase();
	
	div_puzzle.innerHTML = '';
	for(var i =0; i<puzzle.length; i++){
		
		var box = document.createElement('div');
		box.id = 'letter_' + i;
		
		if(puzzle[i]==' ') box.className = 'box';
		else box.className = 'box letter';
		
		// box.innerHTML = puzzle[i];
		
		div_puzzle.appendChild(box);
	}
}

function selectLetter(selected){
	selected.style.visibility = 'none';
	
	var l = document.createElement('div');
	l.innerHTML = selected.innerHTML;
	l.className = 'lblUsed';
	div_used.appendChild(l);
	
	var letter = selected.innerHTML;
	// var i = puzzle.search(letter);
	for( var i =0; i<puzzle.length; i++){
			if( puzzle[i] == letter) document.getElementById('letter_'+i).innerHTML = letter;
	}
	
	var letter = selected.innerHTML;
	var current = '';
	var correct = false;
	for(var i=0; i<puzzle.length; i++){
		if(puzzle[i] == letter){
			document.getElementById('letter_'+i).innerHTML = letter;
			correct = true;
		} 
		if(document.getElementById('letter_'+i).innerHTML == '') current +=' ';
		else current += document.getElementById('letter_'+i).innerHTML;
	}
		if(current == puzzle) alert('You completed the puzzle!');
		
		if(correct){
			document.getElementById('sndCorrect').currentTime = 0;
			document.getElementById('sndCorrect').play();
			l.style.backgroundColor = 'green';
		}
		else{
			
			document.getElementById('sndCorrect').currentTime = 0;
			document.getElementById('sndCorrect').play();
			l.style.backgroundColor = 'red';
			numStrikes++;
			document.getElementById('man').src = 'images/stick_' + numStrikes +'.png';
			if(numStrikes == 6) alert('You Lost. The correct answer was: '+ puzzle);
		}
		
		if(current == puzzle){
			alert('You completed the puzzle!');
			newPuzzle();
			div_used.innerHTML = '';
			
			div_available.innerHTML = '';
			setupButtons();
			
			numStrikes = 0;
			document.getElementById('man').src = 'images/stick_0.png';
		}
			
}