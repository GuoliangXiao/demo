function Tile(k, l, c) {
    this.kind = k;
    this.location = l;
    this.color = c;
    this.tile = new Array(4);
    this.createTile = function() {
        //this.tile[0] = l;
        switch(this.kind) {
            case 0:
                //y x up right down left
                this.tile[0] = new Array(this.location[0], this.location[1], 0, 0, 1, 1);
                this.tile[1] = new Array(this.location[0] - 1, this.location[1], 1, 0, 0, 1);
                this.tile[2] = new Array(this.location[0], this.location[1] + 1, 0, 1, 1, 0);
                this.tile[3] = new Array(this.location[0] - 1, this.location[1] + 1, 1, 1, 0, 0);
                break;
            case 1:
                //y x up right down left
                this.tile[0] = new Array(this.location[0], this.location[1], 1, 0, 1, 0);
                this.tile[1] = new Array(this.location[0], this.location[1] - 1, 1, 0, 1, 1);
                this.tile[2] = new Array(this.location[0], this.location[1] + 1, 0, 1, 1, 0);
                this.tile[3] = new Array(this.location[0] - 1, this.location[1] + 1, 1, 1, 0, 1);
                break;
            case 2:
                //y x up right down left
                this.tile[0] = new Array(this.location[0], this.location[1], 1, 0, 1, 0);
                this.tile[1] = new Array(this.location[0], this.location[1] + 1, 1, 1, 1, 0);
                this.tile[2] = new Array(this.location[0], this.location[1] - 1, 0, 0, 1, 1);
                this.tile[3] = new Array(this.location[0] - 1, this.location[1] - 1, 1, 1, 0, 1);
                break;
            case 3:
                //y x up right down left
                this.tile[0] = new Array(this.location[0], this.location[1], 0, 0, 1, 0);
                this.tile[1] = new Array(this.location[0], this.location[1] + 1, 1, 1, 1, 0);
                this.tile[2] = new Array(this.location[0], this.location[1] - 1, 1, 0, 1, 1);
                this.tile[3] = new Array(this.location[0] - 1, this.location[1], 1, 1, 0, 1);
                break;
            case 4:
                //y x up right down left
                this.tile[0] = new Array(this.location[0], this.location[1], 1, 1, 0, 0);
                this.tile[1] = new Array(this.location[0] + 1, this.location[1], 0, 1, 1, 1);
                this.tile[2] = new Array(this.location[0], this.location[1] - 1, 0, 0, 1, 1);
                this.tile[3] = new Array(this.location[0] - 1, this.location[1] - 1, 1, 1, 0, 1);
                break;
            case 5:
                //y x up right down left
                this.tile[0] = new Array(this.location[0], this.location[1], 1, 0, 0, 1);
                this.tile[1] = new Array(this.location[0] + 1, this.location[1], 0, 1, 1, 1);
                this.tile[2] = new Array(this.location[0], this.location[1] + 1, 0, 1, 1, 0);
                this.tile[3] = new Array(this.location[0] - 1, this.location[1] + 1, 1, 1, 0, 1);
                break;
            case 6:
                //y x up right down left
                this.tile[0] = new Array(this.location[0], this.location[1], 1, 0, 1, 0);
                this.tile[1] = new Array(this.location[0], this.location[1] - 1, 1, 0, 1, 1);
                this.tile[2] = new Array(this.location[0], this.location[1] + 1, 1, 0, 1, 0);
                this.tile[3] = new Array(this.location[0], this.location[1] + 2, 1, 1, 1, 0);
                break;
        }
    };
    this.setTile = function(t) {
        this.tile = t;
    };
    this.getTile = function() {
        return this.tile;
    };
    this.getColor = function() {
        return this.color;
    };
    //k:2->up 3->right 4->down 5->left
    this.getEdge = function(k) {
        var r = new Array();
        for (var i = 0; i < this.tile.length; i++) {
            if (this.tile[i][k] == 1) {
                r.push(this.tile[i]);
            }
        }
        return r;
    };
    //d:2->up 3->right 4->down 5->left
    this.move = function(d) {
        for (var i = 0; i < this.tile.length; i++) {
            switch(d) {
                case 2:
                    this.tile[i][0] -= 1;
                    break;
                case 3:
                    this.tile[i][1] += 1;
                    break;
                case 4:
                    this.tile[i][0] += 1;
                    break;
                case 5:
                    this.tile[i][1] -= 1;
                    break;
            }
        }
    };
    this.rotate = function() {
    };
    this.rotateTile = function(t) {
        var n = t[0][0];
        var m = t[0][1];
        var newt = new Array(4);
        //t[0][0]=0;
        for (var i = 0; i < t.length; i++) {
            newt[i] = new Array(6);
            newt[i][0] = n - m + t[i][1];
            newt[i][1] = n + m - t[i][0];
            for (var j = 2; j < t[i].length - 1; j++) {
                newt[i][j + 1] = t[i][j];
            }
            newt[i][2] = t[i][t[i].length - 1];
        }
        return newt;
    };

}

function Tiles(elm, width, height, panel,fun) {
    this.element = elm;
    this.width = width;
    this.height = height;
    this.panel = panel;
    context = this;
    this.levelUp = 20;

    this.callback=fun;
    this.tile = null;
    this.smallTile = null;
    this.nextSmallTile = null;
    this.speed = 0.5;
    this.speed0 = 0.5;
    this.score = 0;
    this.time = 0;
    this.level = 0;
    this.timer = null;
    this.started = false;
    this.finish = false;
    this.colors = new Array("transparent", "#FFC40C", "#ED008C", "#01C0F4", "#6BA87E", "#2C8AEE", "#6DB71C", "#BE1E4A", "#02A41D", "#623EC2", "#DF5632", "#C21B49", "#00576B");
    //1+12

    this.getKind = function() {
        var r = Math.random() * 7;
        //return 0;
        return Math.floor(r);
    };
    this.getLocation = function() {
        return new Array(-1, 4);
        //3->y   2->x  up right down leftS
    };
    this.getColor = function() {
        var r = Math.random() * (this.colors.length - 1);
        return Math.ceil(r);
        //return 5;
    };

    this.initSmallTile = function() {
        if (this.nextSmallTile == null) {
            this.initNextSmallTile();
        }
        this.smallTile = this.getNextSmallTile();
        this.initNextSmallTile();
    };
    this.getNextSmallTile = function() {
        return this.nextSmallTile;
    };
    this.initNextSmallTile = function() {
        var k = this.getKind();
        var l = this.getLocation();
        var c = this.getColor();
        this.nextSmallTile = new Tile(k, l, c);
        this.nextSmallTile.createTile();
    };
    this.rotateTile = function() {
        if(this.finish||!this.started){
            return false;
        }
        var t = this.smallTile.getTile();
        var nt = this.smallTile.rotateTile(t);
        for (var i = 0; i < nt.length; i++) {
            var x = nt[i][1];
            var y = nt[i][0];
            if (x < 0 || x >= this.width || y < 0 || y >= this.height) {
                return false;
            }
            if (this.tile[y][x] != 0) {
                return false;
            }
        }
        this.smallTile.setTile(nt);
        //this.smallTile.rotate();
        this.drawTile();
        return true;
    };
    this.createNewSmallTile = function() {
        this.mixTile();
        this.judge();
        this.initSmallTile();
        this.drawTile();
        //alert(this.score);
    };
    this.judge = function() {
        var score = new Array();
        for (var i = this.height - 1; i >= 0; i--) {
            var b = true;
            for (var j = 0; j < this.width; j++) {
                if (this.tile[i][j] == 0) {
                    b = false;
                    break;
                }
            }
            if (b) {
                for (var k = i; k > 0; k--) {
                    for (var m = 0; m < this.width; m++) {
                        this.tile[k][m] = this.tile[k-1][m];
                    }
                }
                for (var m = 0; m < this.width; m++) {
                    this.tile[0][m] = 0;
                }
                i += 1;
                score.push(i);
                //alert("position:"+i);
            }
        }
        this.upgrateState(score);
    };
    this.upgrateState = function(s) {
        for (var i = 0; i < s.length; i++) {
            var num = 1;
            while (i + 1 < s.length && s[i] == s[i + 1]) {
                num += 1;
                i += 1;
            }
            //alert("num:"+num);
            this.score += this.scoreCount(num);
        }
        this.level = Math.ceil(this.score / this.levelUp);
        var tmp = this.speed;
        this.speed = Math.max(this.speed0 - this.level * 0.1, 0.1);
        if (this.speed != tmp) {
            this.pause();
            this.start();
        }
        //alert(this.level);
    };
    this.scoreCount = function(i) {
        var sum = 0;
        while (i > 0) {
            sum += i;
            i -= 1;
        }
        return sum;
    };
    this.getScore = function() {
        return this.score;
    };
    this.initVar = function() {
        this.tile = null;
        this.smallTile = null;
        this.nextSmallTile = null;
        this.speed = 0.5;
        this.speed0 = 0.5;
        this.score = 0;
        this.time = 0;
        this.level = 0;
        this.timer = null;
        this.started = false;
        this.finish = false;
    };
    this.initTile = function() {
        //alert("init tile");
        this.initVar();
        this.initArray();
        this.initBackground();
        this.initPanel();
        //this.testColor();
        //this.initSmallTile();
        this.drawTile();
    };
    this.initPanel = function() {
        $(this.panel).find(".time").text(0);
        $(this.panel).find(".score").text(0);
    };
    this.mixTile = function() {
        var t = this.smallTile.getTile();
        var c = this.smallTile.getColor();
        for (var i = 0; i < t.length; i++) {
            if (t[i][0] >= 0 && t[i][0] < this.height && t[i][1] >= 0 && t[i][1] < this.width) {
                this.tile[t[i][0]][t[i][1]] = c;
            } else {
                this.gameOver();
                break;
            }
        }
    };
    this.gameOver = function() {
        this.finish = true;
        this.pause();
        this.drawFinish();
        this.callback(this.score);
    };
    this.drawFinish = function() {
        //alert("finish");
        for (var i = 1; i < 4; i++) {
            this.tile[9][i] = -1;
            this.tile[13][i] = -1;
            this.tile[15][i] = -1;
            this.tile[17][i] = -1;
            this.tile[19][i] = -1;
        }
        for (var i = 10; i < 13; i++) {
            this.tile[i][0] = -1;
            this.tile[i][4] = -1;
            this.tile[i][6] = -1;
            this.tile[i][9] = -1;
        }
        this.tile[13][7] = -1;
        this.tile[13][8] = -1;
        this.tile[16][4] = -1;
        this.tile[17][4] = -1;
        for (var i = 16; i < 19; i++) {
            this.tile[i][0] = -1;
            this.tile[i][6] = -1;
        }
        this.tile[19][6] = -1;
        this.tile[15][6] = -1;
        this.tile[17][7] = -1;
        this.tile[16][8] = -1;
        this.tile[15][9] = -1;
        this.drawBackground();
    };
    this.getStarted = function() {
        return this.started;
    };
    this.start = function() {
        if (this.finish) {
            this.finish = false;
            this.started = false;
            this.initTile();
        }
        if (!this.started) {
            this.started = true;
            if (this.smallTile == null) {
                this.initSmallTile();
            }
            var s = this.speed * 1000;
            this.timer = setInterval("context.keepGoing();", s);
        }
        return this.started;

    };

    this.pause = function() {
        if (this.started) {
            if (this.timer) {
                clearInterval(this.timer);
            }
            this.started = false;
        }
        return this.started;
    };
    this.keepGoing = function() {
        if (!this.finish) {
            this.time += this.speed;
            var b = this.move(4);
            if (!b) {
                this.createNewSmallTile();
            }
        } else {
            this.pause();
        }
    };
    this.tileLeft = function() {
        this.move(5);
    };
    this.tileRight = function() {
        this.move(3);
    };
    this.tileDown = function() {
        if (this.finish||!this.started) {
            return;
        }
        var b = true;
        do {
            b = this.move(4);
        } while(b);
        this.createNewSmallTile();
    };

    //d  2->up 3->right 4->down 5->left
    this.move = function(d) {
        //alert("move");
        if (this.finish||!this.started) {
            return false;
        }
        var t = this.smallTile.getTile();
        //var b=true;
        var edge = this.smallTile.getEdge(d);
        for (var i = 0; i < edge.length; i++) {
            var x = 0;
            var y = 0;
            switch(d) {
                case 3:
                    x = edge[i][1] + 1;
                    y = edge[i][0];
                    break;
                case 4:
                    x = edge[i][1];
                    y = edge[i][0] + 1;
                    break;
                case 5:
                    x = edge[i][1] - 1;
                    y = edge[i][0];
                    break;
            }
            if (x < 0 || x >= this.width) {
                return false;
            }
            if (y < 0 || y >= this.height) {
                return false;
            }
            if (this.tile[y][x] != 0) {
                return false;
            }
        }
        this.smallTile.move(d);
        this.drawTile();
        return true;
    };
    this.drawState = function() {
        $(this.panel).find(".score").text(this.score);
        $(this.panel).find(".time").text(Math.ceil(this.time));
        $(this.panel).find(".level").text(this.level);
    };
    this.drawBackground = function() {
        if (this.tile == null) {
            return;
        }
        for (var i = 0; i < this.tile.length; i++) {
            for (var j = 0; j < this.tile[i].length; j++) {
                if (this.tile[i][j] >= 0 && this.tile[i][j] <= this.colors.length) {
                    $(this.element).find("tr").eq(i).find("td").eq(j).css("background-color", this.colors[this.tile[i][j]]);

                } else {
                    $(this.element).find("tr").eq(i).find("td").eq(j).css("background-color", "white");
                }
            }
        }

    };
    this.drawSmallTile = function() {
        if (this.smallTile != null) {
            var t = this.smallTile.getTile();
            var c = this.smallTile.getColor();
            for (var i = 0; i < t.length; i++) {
                if (t[i][0] >= 0 && t[i][0] < this.height && t[i][1] >= 0 && t[i][1] < this.width) {
                    $(this.element).find("tr").eq(t[i][0]).find("td").eq(t[i][1]).css("background-color", this.colors[c]);
                }
            }
        }
    };
    this.drawTile = function() {
        this.drawBackground();
        this.drawSmallTile();
        this.drawNextSmallTile();
        this.drawState();
    };
    this.drawNextSmallTile = function() {
        for (var i = 0; i < 4; i++) {
            for (var j = 0; j < 4; j++) {
                $(this.panel).find("tr").eq(i).find("td").eq(j).css("background-color", this.colors[0]);
            }
        }
        if (this.nextSmallTile != null) {
            var t = this.nextSmallTile.getTile();
            var c = this.nextSmallTile.getColor();
            var m = t[0][1];
            var n = t[0][0];
            var xi = 1;
            var yi = 2;
            for (var i = 0; i < t.length; i++) {
                var x = xi + t[i][1] - m;
                var y = yi + t[i][0] - n;
                //alert("x:"+x+"--y:"+y);
                $(this.panel).find("tr").eq(y).find("td").eq(x).css("background-color", this.colors[c]);
            }
        }
    };
    this.testColor = function() {
        //alert("testColor");
        this.tile[0][1] = 1;
        this.tile[4][0] = 2;
        this.tile[6][0] = 3;
    };
    this.initArray = function() {
        this.tile = new Array(height);
        for (var i = 0; i < height; i++) {
            this.tile[i] = new Array(width);
            for (var j = 0; j < width; j++) {
                this.tile[i][j] = 0;
            }
        }
    };

    this.initBackground = function() {
        //alert("inittile");
        $(this.element).empty();
        $(this.element).append("<table></table>");
        for (var i = 0; i < height; i++) {
            $(this.element).find("table").append("<tr></tr>");
            for (var j = 0; j < width; j++) {
                $(this.element).find("tr").eq(i).append('<td></td>');
            }
        }
        $(this.panel).find(".next").empty();
        $(this.panel).find(".next").append("<table></table>");
        for (var i = 0; i < 4; i++) {
            $(this.panel).find("table").append("<tr></tr>");
            for (var j = 0; j < 4; j++) {
                $(this.panel).find("tr").eq(i).append('<td></td>');
            }
        }

    };
}
