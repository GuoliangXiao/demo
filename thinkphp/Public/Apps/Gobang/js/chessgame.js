var chess;
var state = 0;
var isOver = false;
var isOperating = false;
var winner = -1;
var timer = null;
var steps = null;
//var path="img/";

var path = "http://pictureofxgl.qiniudn.com/online/gobang/resource/";


function onCreate() {
    ajustsize();
    bindFunctions();
}

function init() {
    initMatrix();
    steps = new Array();
    isOperating = false;
    isOver = false;
    winner = -1;
    clearTime();
    clearStep();
}

function initMatrix() {
    chess = new Array(BOARD_SIZE);
    for (var i = 0; i < chess.length; i++) {
        chess[i] = new Array(BOARD_SIZE);
        for (var j = 0; j < chess[i].length; j++) {
            chess[i][j] = 0;
        }
    }
}

function showArray(arr, direc) {
    var str = "10==  ";
    for (var i = 0; i < arr.length; i++) {
        for (var j = 0; j < arr[i].length; j++) {
            for (var m = 0; m < arr[i][j].length; m++) {
                str += arr[i][m][j][direc] + "-";
            }
            str += "<br/>" + (11 + j) + "==   ";
        }

        str += "<hr/>10==  ";
    }
    $(".test").empty();
    $(".test").html(str);
    str = "10==  ";
    for (var i = 0; i < chess.length; i++) {
        for (var j = 0; j < chess[i].length; j++) {
            str += chess[j][i] + "-";
        }
        str += "<br/>" + (i + 11) + "==  ";
    }

    $(".chesstest").empty();
    $(".chesstest").html(str);
}

function showPoint(chess) {
    var str = "10==  ";
    for (var i = 0; i < chess.length; i++) {
        for (var j = 0; j < chess[i].length; j++) {
            str += chess[j][i] + "-";
        }
        str += "<br/>" + (i + 11) + "==  ";
    }

    $(".chesstest").empty();
    $(".chesstest").html(str);
}

function addChess(m, n, kind) {
    var ml = m * WIDTH + BOARDER - CHESS_SIZE / 2;
    var mt = n * WIDTH + BOARDER - CHESS_SIZE / 2;
    var img = $(document.createElement("img"));
    img.addClass(m * BOARD_SIZE + n + "");
    img.attr({
        src : path + kind + ".png"
    });
    img.css({
        position : "absolute",
        width : CHESS_SIZE + "px",
        height : CHESS_SIZE + "px",
        left : ml + "px",
        top : mt + "px",
        padding : "0px",
        margin : "0px"
    });
    $(".div_game").append(img);
    var p = new Array(m, n);
    steps.push(p);
}

function removeChess(p) {
    var m = p[0];
    var n = p[1];
    chess[m][n] = 0;
    var k = m * BOARD_SIZE + n;
    $("." + k).remove();
}

function backChess() {
    if (state == 2 && steps.length >= 2) {
        var p1 = steps.pop();
        var p2 = steps.pop();
        removeChess(p1);
        removeChess(p2);
        stepReduce();
        isOver = false;
        playMusic(5);
    }
}

function playerChess(x, y) {
    if (state == 2) {
        state = 1;
        //alert(x+"=="+y);
        var m = Math.round((x - BOARDER) / WIDTH);
        var n = Math.round((y - BOARDER) / WIDTH);
        //alert(m+"=="+n);
        if (chess[m][n] == 0) {
            chess[m][n] = 2;
            addChess(m, n, 2);
            playMusic(0);
            stepCount();
        } else {
            state = 2;
            playMusic(6);
            //alert("this place is already occupied");
        }
    }
}

function computerChess(p) {
    if (state == 1) {
        var m = p[0];
        var n = p[1];
        /* do {
         var r = Math.floor(Math.random() * BOARD_SIZE * BOARD_SIZE);
         m = Math.floor(r / BOARD_SIZE);
         n = r - m * BOARD_SIZE;
         } while(chess[m][n]!=0);*/

        chess[m][n] = 1;
        addChess(m, n, 1);
        state = 2;
        //alert("all place is already occupied");
    }

}

function showWinner() {
    if (winner == 1) {
        playMusic(1);
        alert_alt("you lose");
    } else if (winner == 2) {
        playMusic(2);
        alert_alt("you win");
    } else if (winner == 0) {
        playMusic(3);
        alert_alt("game draw");
    }
    clearTime();
}

function bindFunctions() {

    $(".div_game_1").click(function(event) {
        if(state==0){
            startChess();
        }
        if (state == 2 && !isOver && !isOperating) {
            isOperating = true;
            var helper = new Chess();

            playerChess(parseInt(event.offsetX), parseInt(event.offsetY));
            winner = helper.isOver(chess);

            if (winner >= 0) {
                isOver = true;
                showWinner();
                return;
            }
            helper.setChess(chess);
            var p = helper.getP(0);
            //var player=helper.computerOperate(chess);
            //var position = helper.getBestPosition(player);
            //var point = helper.getBestPoint(position);
            //var p = helper.getIJ(point);
            computerChess(p);
            winner = helper.isOver(chess);
            if (winner >= 0) {
                isOver = true;
                showWinner();
            }
            //showArray(position,1);
            //showPoint(point);
            isOperating = false;
        } else if (isOver) {
            showWinner();
        }
    });

    $(".start_game").click(function() {
        startChess();
    });
    $(".undo").click(function() {
        backChess();
    });
    $(".bg_music").click(function() {
        if ($(this).is(":checked")) {
            playMusicById("bgmusic");
        } else {
            stopMusicById("bgmusic");
        }
    });
    $(window).resize(function(event) {
        ajustsize();
    });
}
function startChess(){
    init();
    $(".div_game").empty();
    if ($(".computer_first").is(":checked")) {
        state = 1;
    } else {
        state = 2;
    }
    //$(".div_game").css("visibility", "visible");
    setTimeout(function() {
        computerChess(Array(7, 7));
    }, 100);

    timeCount();
    playMusic(4);
}
function ajustsize(){
    var cw;
    var gw=$(".game-chess").width();
    var w=535;
    cw=w>gw?gw:w;
    $(".game-chess").height(cw);
    $(".div_game,.div_game_1").width(cw);
    $(".div_game,.div_game_1").height(cw);
    $(".game-bg").width(cw);
  
    var r=cw/535;
    var bw=35;
    var b=23;
    var cs=30;
    WIDTH=r*bw;//parseInt();
    BOARDER=r*b;//parseInt(r*b);
    CHESS_SIZE=r*cs;//parseInt(r*cs);
    if(chess==null){
        return;
    }
    for(var m=0;m<chess.length;m++){
        for(var n=0;n<chess[m].length;n++){
            if(chess[m][n]!=0){
                var ml = m * WIDTH + BOARDER - CHESS_SIZE / 2;
                var mt = n * WIDTH + BOARDER - CHESS_SIZE / 2;
                var cl="."+(m * BOARD_SIZE + n) + "";
                $(cl).css({
                    width : CHESS_SIZE + "px",
                    height : CHESS_SIZE + "px",
                    left : ml + "px",
                    top : mt + "px",
                });
            }
        }
    }
}
function playMusic(i) {
    if ($(".game_music").is(":checked")) {
        var id = "music" + i;
        //alert(id);
        playMusicById(id);
        //$(".audio_music")[i].play();//0:down 1:lose 2:win  3:draw 4:click 5:undo  6:illegal
    }
}

function playMusicById(id) {
    var audio = document.getElementById(id);
    if(audio!=null&&audio.paused){
        audio.play();
    }
}

function stopMusicById(id) {
    var audio = document.getElementById(id);
    if(audio!=null&&!audio.paused){
        audio.pause();
        audio.load();
    }
}

function stepCount() {
    $(".step").text(parseInt($(".step").text()) + 1 + "");
}

function stepReduce() {
    var k = Math.max(0, parseInt($(".step").text()) - 1);
    $(".step").text(k);
}

function clearStep() {
    $(".step").text("0");
}

function timeCount() {
    timer = setInterval(function() {
        $(".time").text(parseInt($(".time").text()) + 1 + "");
    }, 1000);
}

function clearTime() {
    $(".time").text("0");
    if (timer) {
        clearInterval(timer);
    }

}
