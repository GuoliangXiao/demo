function Chess() {
    this.chess = null;
    this.setChess = function(c) {
        //alert("set");
        this.chess = c;
    };
    this.createPlayer = function() {
        //alert("create");
        var player = new Array(2);
        for (var m = 0; m < player.length; m++) {
            player[m] = new Array(BOARD_SIZE);
            for (var i = 0; i < player[m].length; i++) {
                player[m][i] = new Array(BOARD_SIZE);
                for (var j = 0; j < player[m][i].length; j++) {
                    player[m][i][j] = new Array(DIREC_SIZE);
                    for (var k = 0; k < player[m][i][j].length; k++) {
                        player[m][i][j][k] = 0;
                    }
                }
            }
        }
        return player;
    };

    //this.player = this.createPlayer();
    this.computerOperate = function(chess) {
        var player = this.createPlayer();
        //var chess = this.chess;
        if (chess) {
            for (var i = 0; i < chess.length; i++) {
                for (var j = 0; j < chess[i].length; j++) {
                    if (chess[i][j] == 0) {
                        if (i + 1 >= chess.length) {
                            player[0][i][j][0] = BOARDEROCUPIED;
                            player[1][i][j][0] = BOARDEROCUPIED;
                            continue;
                        } else if (chess[i+1][j] != 0) {
                            var kind = chess[i+1][j];
                            var k = 2;
                            while (i + k < chess.length && chess[i + k][j] == kind) {
                                k++;
                            }
                            if (i + k == chess.length || chess[i+k][j] != 0) {
                                player[kind-1][i][j][0] = RUSH[k - 2];
                            } else if (chess[i+k][j] == 0) {
                                player[kind-1][i][j][0] = LIVE[k - 2];
                            }
                            player[2-kind][i][j][0] = BOARDEROCUPIED;
                        }
                        //alert("begin");
                    } else {
                        //var kind = chess[i][j];
                        //player[kind-1][i][j][0] = 'n';
                        player[0][i][j][0] = OCUPIED;
                        player[1][i][j][0] = OCUPIED;
                    }
                }
            }
            for (var i = chess.length - 1; i >= 0; i--) {
                for (var j = 0; j < chess[i].length; j++) {
                    if (chess[i][j] == 0) {
                        if (i <= 0) {
                            player[0][i][j][1] = BOARDEROCUPIED;
                            player[1][i][j][1] = BOARDEROCUPIED;
                            continue;
                        } else if (chess[i-1][j] != 0) {
                            var kind = chess[i-1][j];
                            var k = 2;
                            while (i - k >= 0 && chess[i - k][j] == kind) {
                                k++;
                            }
                            if (i - k < 0 || chess[i-k][j] != 0) {
                                player[kind-1][i][j][1] = RUSH[k - 2];
                            } else if (chess[i-k][j] == 0) {
                                player[kind-1][i][j][1] = LIVE[k - 2];
                            }
                            player[2-kind][i][j][1] = BOARDEROCUPIED;
                        }
                        //alert("begin");
                    } else {
                        //var kind = chess[i][j];
                        //player[kind-1][i][j][1] = 'n';
                        player[0][i][j][1] = OCUPIED;
                        player[1][i][j][1] = OCUPIED;
                    }
                }
            }

            for (var i = 0; i < chess.length; i++) {
                for (var j = 0; j < chess[i].length; j++) {
                    if (chess[i][j] == 0) {
                        if (j + 1 >= chess[i].length) {
                            player[0][i][j][2] = BOARDEROCUPIED;
                            player[1][i][j][2] = BOARDEROCUPIED;
                            continue;
                        } else if (chess[i][j + 1] != 0) {
                            var kind = chess[i][j + 1];
                            var k = 2;
                            while (j + k < chess[i].length && chess[i][j + k] == kind) {
                                k++;
                            }
                            if (j + k == chess[i].length || chess[i][j + k] != 0) {
                                player[kind-1][i][j][2] = RUSH[k - 2];
                            } else if (chess[i][j + k] == 0) {
                                player[kind-1][i][j][2] = LIVE[k - 2];
                            }
                            player[2-kind][i][j][2] = BOARDEROCUPIED;
                        }
                    } else {
                        //var kind = chess[i][j];
                        //player[kind-1][i][j][2] = 'n';
                        player[0][i][j][2] = OCUPIED;
                        player[1][i][j][2] = OCUPIED;
                    }
                }
            }

            for (var i = 0; i < chess.length; i++) {
                for (var j = chess[i].length - 1; j >= 0; j--) {
                    if (chess[i][j] == 0) {
                        if (j <= 0) {
                            player[0][i][j][3] = BOARDEROCUPIED;
                            player[1][i][j][3] = BOARDEROCUPIED;
                            continue;
                        } else if (chess[i][j - 1] != 0) {
                            var kind = chess[i][j - 1];
                            var k = 2;
                            while (j - k >= 0 && chess[i][j - k] == kind) {
                                k++;
                            }
                            if (j - k < 0 || chess[i][j - k] != 0) {
                                player[kind-1][i][j][3] = RUSH[k - 2];
                            } else if (chess[i][j - k] == 0) {
                                player[kind-1][i][j][3] = LIVE[k - 2];
                            }
                            player[2-kind][i][j][3] = BOARDEROCUPIED;
                        }
                        //alert("begin");
                    } else {
                        //var kind = chess[i][j];
                        //player[kind-1][i][j][3] = 'n';
                        player[0][i][j][3] = OCUPIED;
                        player[1][i][j][3] = OCUPIED;
                    }
                }
            }

            for (var i = 0; i < chess.length; i++) {
                for (var j = 0; j < chess[i].length; j++) {

                    if (chess[i][j] == 0) {
                        if (i + 1 >= chess.length || j + 1 >= chess[i].length) {
                            player[0][i][j][4] = BOARDEROCUPIED;
                            player[1][i][j][4] = BOARDEROCUPIED;
                            continue;
                        } else if (chess[i+1][j + 1] != 0) {
                            var kind = chess[i+1][j + 1];
                            var k = 2;
                            while (i + k < chess.length && j + k < chess[i].length && chess[i+k][j + k] == kind) {
                                k++;
                            }
                            if (i + k == chess.length || j + k == chess[i].length || chess[i+k][j + k] != 0) {
                                player[kind-1][i][j][4] = RUSH[k - 2];
                            } else if (chess[i+k][j + k] == 0) {
                                player[kind-1][i][j][4] = LIVE[k - 2];
                            }
                            player[2-kind][i][j][4] = BOARDEROCUPIED;
                        }
                    } else {
                        //var kind = chess[i][j];
                        // player[kind-1][i][j][4] = 'n';
                        player[0][i][j][4] = OCUPIED;
                        player[1][i][j][4] = OCUPIED;
                    }
                }
            }

            for (var i = chess.length - 1; i >= 0; i--) {
                for (var j = chess[i].length - 1; j >= 0; j--) {

                    if (chess[i][j] == 0) {
                        if (i - 1 < 0 || j - 1 < 0) {
                            player[0][i][j][5] = BOARDEROCUPIED;
                            player[1][i][j][5] = BOARDEROCUPIED;
                            continue;
                        } else if (chess[i-1][j - 1] != 0) {
                            var kind = chess[i-1][j - 1];
                            var k = 2;
                            while (i - k >= 0 && j - k >= 0 && chess[i-k][j - k] == kind) {
                                k++;
                            }
                            if (i - k < 0 || j - k < 0 || chess[i-k][j - k] != 0) {
                                player[kind-1][i][j][5] = RUSH[k - 2];
                            } else if (chess[i-k][j - k] == 0) {
                                player[kind-1][i][j][5] = LIVE[k - 2];
                            }
                            player[2-kind][i][j][5] = BOARDEROCUPIED;
                        }
                    } else {
                        //var kind = chess[i][j];
                        //player[kind-1][i][j][5] = 'n';
                        player[0][i][j][5] = OCUPIED;
                        player[1][i][j][5] = OCUPIED;
                    }
                }
            }

            for (var i = chess.length - 1; i >= 0; i--) {
                for (var j = 0; j < chess[i].length; j++) {

                    if (chess[i][j] == 0) {
                        if (i - 1 < 0 || j + 1 >= chess[i].length) {
                            player[0][i][j][6] = BOARDEROCUPIED;
                            player[1][i][j][6] = BOARDEROCUPIED;
                            continue;
                        } else if (chess[i-1][j + 1] != 0) {
                            var kind = chess[i-1][j + 1];
                            var k = 2;
                            while (i - k >= 0 && j + k < chess[i].length && chess[i-k][j + k] == kind) {
                                k++;
                            }
                            if (i - k < 0 || j + k == chess[i].length || chess[i-k][j + k] != 0) {
                                player[kind-1][i][j][6] = RUSH[k - 2];
                            } else if (chess[i-k][j + k] == 0) {
                                player[kind-1][i][j][6] = LIVE[k - 2];
                            }
                            player[2-kind][i][j][6] = BOARDEROCUPIED;
                        }
                    } else {
                        //var kind = chess[i][j];
                        // player[kind-1][i][j][6] = 'n';
                        player[0][i][j][6] = OCUPIED;
                        player[1][i][j][6] = OCUPIED;
                    }
                }
            }

            for (var i = 0; i < chess.length; i++) {
                for (var j = chess[i].length - 1; j >= 0; j--) {

                    if (chess[i][j] == 0) {
                        if (i + 1 >= chess.length || j - 1 < 0) {
                            player[0][i][j][7] = BOARDEROCUPIED;
                            player[1][i][j][7] = BOARDEROCUPIED;
                            continue;
                        } else if (chess[i+1][j - 1] != 0) {
                            var kind = chess[i+1][j - 1];
                            var k = 2;
                            while (i + k < chess.length && j - k >= 0 && chess[i+k][j - k] == kind) {
                                k++;
                            }
                            if (i + k == chess.length || j - k < 0 || chess[i+k][j - k] != 0) {
                                player[kind-1][i][j][7] = RUSH[k - 2];
                            } else if (chess[i+k][j - k] == 0) {
                                player[kind-1][i][j][7] = LIVE[k - 2];
                            }
                            player[2-kind][i][j][7] = BOARDEROCUPIED;
                        }
                    } else {
                        //var kind = chess[i][j];
                        //player[kind-1][i][j][7] = 'n';
                        player[0][i][j][7] = OCUPIED;
                        player[1][i][j][7] = OCUPIED;
                    }
                }
            }
        }
        return player;
    };

    this.getPositionArray = function() {
        var position = new Array(2);
        for (var i = 0; i < position.length; i++) {
            position[i] = new Array(BOARD_SIZE);
            for (var j = 0; j < position[i].length; j++) {
                position[i][j] = new Array(BOARD_SIZE);
                for (var k = 0; k < position[i][j].length; k++) {
                    position[i][j][k] = new Array(DIREC_SIZE / 2);
                    for (var m = 0; m < position[i][j][k].length; m++) {
                        position[i][j][k][m] = 0;
                    }
                }
            }
        }
        return position;
    };
    this.getBestPosition = function(player) {
        var position = this.getPositionArray();
        //var player = this.player;
        for (var m = 0; m < player.length; m++) {
            for (var i = 0; i < player[m].length; i++) {
                for (var j = 0; j < player[m][i].length; j++) {
                    for (var d = 0; d < player[m][i][j].length; d++) {
                        position[m][i][j][Math.floor(d / 2)] += player[m][i][j][d];
                    }
                }
            }
        }

        return position;
    };
    this.getBestPoint = function(position) {
        var point = new Array(BOARD_SIZE);
        for (var i = 0; i < point.length; i++) {
            point[i] = new Array(BOARD_SIZE);
            for (var j = 0; j < point[i].length; j++) {
                point[i][j] = 0;
            }
        }
        //alert("begin");
        for (var m = 0; m < position.length; m++) {
            for (var i = 0; i < position[m].length; i++) {
                for (var j = 0; j < position[m][i].length; j++) {
                    for (var d = 0; d < position[m][i][j].length; d++) {
                        var index = position[m][i][j][d];
                        if (index >= 0) {
                            point[i][j] += L[m][index];
                        } else if (index >= -10) {
                            index += 10;
                            point[i][j] += R[m][index];
                        } else if (index >= -20) {
                            index += 20;
                            point[i][j] += D[m][index];
                        }
                    }
                }
            }
        }
        return point;
    };
    this.getIJ = function(point) {
        var i = 0;
        var j = 0;
        var max = 0;
        for (var m = 0; m < point.length; m++) {
            for (var n = 0; n < point[m].length; n++) {
                if (point[m][n] > max) {
                    max = point[m][n];
                    i = m;
                    j = n;
                }
            }
        }
        return new Array(i, j);
    };
    this.isOver = function(chess) {
        //var chess = this.chess;
        var winner = -1;
        var isDraw = true;
        for (var i = 0; i < chess.length; i++) {
            for (var j = 0; j < chess[i].length; j++) {
                var kind = chess[i][j];

                if (kind != 0) {
                    var k = 1;
                    while (j + k < chess[i].length && chess[i][j + k] == kind) {
                        k++;
                    }
                    if (k >= 5) {
                        winner = kind;
                        break;
                    }
                    k = 1;
                    while (i + k < chess.length && chess[i+k][j] == kind) {
                        k++;
                    }
                    if (k >= 5) {
                        winner = kind;
                        break;
                    }
                    k = 1;
                    while (i + k < chess.length && j + k < chess[i].length && chess[i+k][j + k] == kind) {
                        k++;
                    }
                    if (k >= 5) {
                        winner = kind;
                        break;
                    }
                } else {
                    isDraw = false;
                }
            }
        }

        for (var i = 0; i < chess.length; i++) {
            for (var j = chess[i].length - 1; j >= 0; j--) {
                if (chess[i][j] != 0) {
                    var kind = chess[i][j];

                    var k = 1;
                    while (i + k < chess.length && j - k >= 0 && chess[i+k][j - k] == kind) {
                        k++;
                    }
                    if (k >= 5) {
                        winner = kind;
                        break;
                    }
                } else {
                    isDraw = false;
                }
            }
        }
        if (isDraw) {
            winner = 0;
        }
        return winner;
    };

    this.getReverse = function(c) {
        //var c = this.chess;
        var chess = new Array(BOARD_SIZE);
        for (var i = 0; i < chess.length; i++) {
            chess[i] = new Array(BOARD_SIZE);
            for (var j = 0; j < chess[i].length; j++) {
                chess[i][j] = 3 - c[i][j];
            }
        }
        return chess;
    };
    this.changeChess=function(chess,p,k){
        var i=p[0];
        var j=p[1];
        if(chess[i][j]<=0){
            chess[i][j]=k;
        }
        return chess;
    };
    this.forecast = function() {
        var c=this.chess;
        var p=this.deal(c);
        c=this.changeChess(c,p,1);
        c = this.getReverse(c);
        var player = this.computerOperate(c);
        var position = this.getBestPosition(player);
        var point = this.getBestPoint(position);
        var p=this.getIJ(point);
        var i=p[0];
        var j=p[1];
        if(point[i][j]>48){
            return p;
        }else{
            return null;
        }
    };
    this.deal = function(c) {
        var player = this.computerOperate(c);
        var position = this.getBestPosition(player);
        var point = this.getBestPoint(position);
        return this.getIJ(point);
    };
    this.getP = function(kind) {
        var c = this.chess;
        var p1= this.deal(c);
        return p1;
    };

}
