 var monkey_01;
 var gameTimer;
 var output
 var numHits = 0;
function init(){
  monkey_01  = document.getElementById('monkey_01');
  output = document.getElementById('output');
  
  gameTimer = setInterval(gameloop, 50);
  placeMonkey();
//   hitMonkey()
}

function gameloop(){
    var y = parseInt(monkey_01.style.top) -10;
    if(y< -100) placeMonkey();
    else 
    // monkey_01.style.top = y + 'px'; 
    $('#monkey_01').css('top', y + 'px');
}

function placeMonkey(){
    var x = Math.floor(Math.random()*421); // 0 to 420
    // monkey_01.style.left = x + 'px';
    $('#monkey_01').css('left', x + 'px');
    monkey_01.style.top = '350px';
}

function hitMonkey(){
    // output.innerHTML = 'No animals are harmed in the playing of this game.';
    numHits++;
    // output.innerHTML = numHits;
    if(numHits == 3){
        
        alert('You win!');
        clearInterval(gameTimer);
    } 
    placeMonkey();
}