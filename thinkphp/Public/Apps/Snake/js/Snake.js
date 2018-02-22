function Snake(d, c) {
    this.length = 5;
    this.head = new Array(10, 12, c);
    this.location = null;
    this.direction = d;
    this.color = c + 1;
    this.initSnake = function() {
        this.location = new Array(this.length);
        //this.location[0]=this.head;
        for (var i = 0; i < this.length; i++) {
            var y = this.head[0];
            var x = this.head[1];
            var c = this.color;
            switch(this.direction) {
                case 1:
                    x += i;
                    break;
                case 2:
                    x -= i;
                    break;
                case 3:
                    y += i;
                    break;
                case 4:
                    y -= i;
                    break;
            }
            this.location[this.length - i - 1] = new Array(y, x, c);
        }
        this.location[this.length-1][2] = this.head[2];
        //snake head color
    };
    this.getLocation = function() {
        return this.location;
    };
    this.getHead = function() {
        return this.head;
    };

    this.setDirection = function(d) {
        this.direction = d;
    };
    this.getDirection = function() {
        return this.direction;
    };
    this.inSnake=function(y,x){
        for(var i=0;i<this.location.length;i++){
            if(y==this.location[i][0]&&x==this.location[i][1]){
                return true;
            }
        }
        return false;
    };
    this.move = function() {
        var y = this.head[0];
        var x = this.head[1];
        switch(this.direction) {
            case 1:
                x--;
                break;
            //left
            case 2:
                x++;
                break;
            //right
            case 3:
                y--;
                break;
            //up
            case 4:
                y++;
                break;
            //down
        }
        this.head[0] = y;
        this.head[1] = x;
        for (var i = 0; i < this.length - 1; i++) {
            this.location[i][0] = this.location[i+1][0];
            this.location[i][1] = this.location[i+1][1];
            //this.location[i][2]=this.location[i-1][2];
        }
        //alert("move");
        this.location[this.length-1][0] = this.head[0];
        this.location[this.length-1][1] = this.head[1];
        this.location[this.length-1][2] = this.head[2];
    };
    this.eatFood = function(f) {
        var y = f[0];
        var x = f[1];
        var c = f[2];
        this.location[this.length-1][2] = this.color;
        this.head[0] = y;
        this.head[1] = x;
        //this.head[2]=c;
        this.location.push(new Array(y, x, this.color));
        this.length++;
    };
    this.changeSnakeColor = function(c) {
        this.color = c + 1;
        this.head[2] = c;
        var l = this.location.length;
        for (var i = 0; i < l - 1; i++) {
            this.location[i][2] = this.color;
        }
        this.location[l-1][2] = this.head[2];
    };

}

function Food(y, x, c) {
    this.location = new Array(y, x, c);
    this.timer = null;
    this.speed = 0.05;
    this.color = c;
    foodContext = this;
    this.changeColor = function() {
        if (this.location[2] == 0) {
            this.location[2] = this.color;
        } else {
            this.location[2] = 0;
        }
    };
    this.flicker = function() {
        var s = this.speed * 1000;
        this.timer = setInterval("foodContext.changeColor();", s);
    };
    this.destroy = function() {
        this.location = null;
        if (this.timer) {
            clearInterval(this.timer);
            this.timer = null;
        }
    };
    this.inFood=function(y,x){
        if(this.location[0]==y&&this.location[1]==x){
            return true;
        }else{
            return false;
        }
    };
    this.getLocation = function() {
        return this.location;
    };
}

function SnakeBoard(w, h, elem, showScore, go) {
    this.width = w;
    this.height = h;
    this.scoreUp = 5;
    this.wallColor = "#B64D1E";
    this.element = elem;
    this.showScore = showScore;
    this.gameOver=go;
    context = this;
    
    this.matrix = null;
    this.snake = null;
    this.food = null;
    this.timer = null;
    this.drawTimer = null;
    this.speed = 0.3;
    this.snakeColor = 1;
    this.direction = 1;
    this.over = false;
    this.score = 0;
    this.level = 0;
    this.colors = new Array("#CACACA", "#FFC40C", "#ED008C", "#01C0F4", "#6BA87E", "#2C8AEE", "#6DB71C", "#BE1E4A", "#02A41D", "#623EC2", "#DF5632", "#C21B49", "#00576B");
    this.initGame = function() {
        this.initMatrix();
        this.initBoard();
        this.initSnake();
        this.initFood();
        this.draw();
        //this.start();
    };
    this.restart = function() {
        this.pause();
        if (this.food) {
            this.food.destroy();
        }
        this.initValue();
        this.initMatrix();
        this.initSnake();
        this.initFood();
        this.draw();
        this.start();
    };
    this.isOver=function(){
        return this.over;
    };
    this.initValue = function() {
        this.matrix = null;
        this.snake = null;
        this.food = null;
        this.timer = null;
        this.drawTimer = null;
        this.speed = 0.3;
        this.snakeColor = 1;
        this.direction = 1;
        this.over = false;
        this.score = 0;
        this.level = 0;
    };
    this.draw = function() {
        this.drawBoard();
        this.drawBorder();
        this.drawSnake();
        this.drawFood();
        this.drawState();
    };
    this.drawState = function() {
       this.showScore(this.score,this.level);
    };
    this.move = function(d) {
        //alert(d);
        var sd = this.snake.getDirection();
        if(d==sd){
            this.snake.move();
        }else if (sd <= 2 && d > 2 || sd > 2 && d <= 2) {
            this.direction = d;
            //this.snake.setDirection(d);
        }
    };
    this.initFood = function() {
        var y;
        var x;
        do {
            y = Math.random() * this.height;
            x = Math.random() * this.width;
            y = Math.floor(y);
            x = Math.floor(x);
        } while(this.matrix[y][x]!=0||this.snake.inSnake(y,x));
        var c = Math.random() * (this.colors.length - 1);
        c = Math.ceil(c);
        this.food = new Food(y, x, c);
        this.food.flicker();
    };
    this.drawFood = function() {
        var l = this.food.getLocation();
        var y = l[0];
        var x = l[1];
        var c = l[2];
        c = this.colors[c];
        this.paint(y, x, c);
        //$(this.element).find("tr").eq(y).find("td").eq(x).css("background-color", c);

    };
    this.initSnake = function() {
        this.snake = new Snake(this.direction, this.snakeColor);
        this.snake.initSnake();
    };

    this.drawSnake = function() {
        var l = this.snake.getLocation();
        for (var i = 0; i < l.length; i++) {
            var y = l[i][0];
            var x = l[i][1];
            var c = l[i][2];
            c = this.colors[c];
            //alert(c);
            this.paint(y, x, c);
            //$(this.element).find("tr").eq(y).find("td").eq(x).css("background-color", c);
        }
    };
    this.judge = function() {
        var h = this.snake.getHead();
        var f = this.food.getLocation();
        var y = h[0];
        var x = h[1];
        var b = true;
        switch(this.direction) {
            case 1:
                x--;
                break;
            //left
            case 2:
                x++;
                break;
            //right
            case 3:
                y--;
                break;
            //up
            case 4:
                y++;
                break;
            //down
        }
        if (x < 0 || x >= this.width || y < 0 || y >= this.height||this.snake.inSnake(y,x)||this.matrix[y][x]==-1) {
            this.over = true;
        } else {
            if (f[0] == y && f[1] == x) {
                //eat food
                //alert("eat food");
                this.snake.eatFood(f);
                b = false;
            }
        }
        return b;
    };
    this.keepGoing = function() {
        var b = this.judge();
        if (!this.over) {
            if (b) {
                this.snake.setDirection(this.direction);
                this.snake.move();
            } else {
                //eat food
                this.food.destroy();
                this.initFood();
                //add score
                this.score++;
                var l = this.level;
                this.level = Math.floor(this.score / this.scoreUp);
                if (this.level > l) {
                    this.speedUp();
                    var c = Math.random() * (this.colors.length - 2);
                    c = Math.ceil(c);
                    this.snake.changeSnakeColor(c);
                    this.increaseLevel();
                }

            }
            //this.draw();
        } else {
            this.over=true;
            this.pause();
           /* var b=window.confirm("mission failed \n restart now?");
            if(b){
                this.restart();
            }*/
            this.gameOver(this.score);
        }
    };
    this.increaseLevel = function() {
        if (this.level > 12) {
            return;
        }
        var tiles = 10;
        for (var i = 0; i < tiles; i++) {
            var x;
            var y;
            do {
                y = Math.random() * this.height;
                x = Math.random() * this.width;
                y = Math.floor(y);
                x = Math.floor(x);
            } while(this.matrix[y][x]!=0||this.snake.inSnake(y,x)||this.food.inFood(y,x));
            this.matrix[y][x] = -1;
        }

    };
    this.speedUp = function() {
        var s = 0.3 - 0.025 * this.level;
        this.speed = Math.max(s, 0.05);
        this.pause();
        this.start();
    };
    this.pause = function() {
        if (this.timer) {
            clearInterval(this.timer);
        }
        if (this.drawTimer) {
            clearInterval(this.drawTimer);
        }
    };
    this.start = function() {
        var s = this.speed * 1000;
        this.timer = setInterval("context.keepGoing();", s);
        this.drawTimer = setInterval("context.draw();", 50);
    };
    this.initMatrix = function() {
        this.matrix = Array(this.height);
        for (var i = 0; i < this.height; i++) {
            this.matrix[i] = Array(this.width);
            for (var j = 0; j < this.width; j++) {
                this.matrix[i][j] = 0;
            }
        }

    };
    this.drawBoard = function() {
        for (var i = 0; i < this.matrix.length; i++) {
            for (var j = 0; j < this.matrix[i].length; j++) {
                var c;
                if (this.matrix[i][j] >= 0 && this.matrix[i][j] < this.colors.length) {
                    c = this.colors[this.matrix[i][j]];
                } else {
                    c = this.wallColor;
                }
                this.paint(i, j, c);
                //$(this.element).find("tr").eq(i).find("td").eq(j).css("background-color", c);
            }
        }
    };
    this.drawBorder = function() {
        for (var i = 0; i < this.width + 2; i++) {
            $(this.element).find("tr").eq(0).find("td").eq(i).css("background-color", this.wallColor);
            $(this.element).find("tr").eq(this.height + 1).find("td").eq(i).css("background-color", this.wallColor);

        }
        for (var j = 1; j < this.height + 1; j++) {
            $(this.element).find("tr").eq(j).find("td").eq(0).css("background-color", this.wallColor);
            $(this.element).find("tr").eq(j).find("td").eq(this.width + 1).css("background-color", this.wallColor);
        }
    };
    this.initBoard = function() {
        for (var i = 0; i < this.height + 2; i++) {
            $(this.element).append("<tr></tr>");
            for (var j = 0; j < this.width + 2; j++) {
                $(this.element).find("tr").eq(i).append("<td></td>");
                //$(this.element).find("tr").eq(i).find("td").eq(j).css("background-color","purple");
            }
        }
        var w = $(this.element).width();
        //alert(w);
        var ww = 780;
        var offset = (ww - w) / 2;
        //$(this.element).css("padding-left",offset+"px");
        //$(this.element).css("text-align","center");
    };
    this.paint = function(y, x, c) {
        $(this.element).find("tr").eq(y + 1).find("td").eq(x + 1).css("background-color", c);
    };
}
