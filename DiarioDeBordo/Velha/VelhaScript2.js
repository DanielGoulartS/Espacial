function heuristica(board, jogador){
    
}
function jogada(board, pos, jogador){
    
}
function jogadasPossiveis(board){
    var jogadas =[];
    for(var i = 0; i < 3; i++){
        for( j = 0; j < 3; j++){
            if(board[i][j] == '')jogadas.push([i,j]);
        }
    }
}
function minimax(board, jogador, eu, maxdepth=9){
    
}
function bestAction(board, eu){
    var jogadas = JogadasPossiveis(board);
    for(var i in jogadas){
        var resultasdo = jogada(board, jogadas[i], eu);
    }
}
