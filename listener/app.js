/* 
  Module dependencies:
  
  - Express
  - Http (to run Express)
  - Body parser (to parse JSON requests)
  - Underscore (because it's cool)
  - Socket.IO

*/

var express = require("express")
  , app = express()
  , http = require("http").createServer(app)
  , bodyParser = require("body-parser")
  , io = require("socket.io").listen(http)
  , _ = require("underscore");



//Server's port number 
app.set("port", 8080);

//Server's IP address
app.set("ipaddr", "0.0.0.0");

//Tells server to support JSON requests
app.use(bodyParser.json());

app.get('/', function (req, res) {
   res.send('NodeJs is up and running.')

});

io.sockets.on('connection', function (socket) {
    
   /* setTimeout(function(){ 
        socket.emit('news', { content: 'Hello World!!!' }); 
    }, 3000); */
    
    /* New user joined the game */
    socket.on('game-join', function (data) {        
        console.log(data);
        // send notifications to all
        io.sockets.emit('user-joined', data);
    });
    
    /* User started the game */
    socket.on('game-start', function (data) {        
        console.log(data);
        // send cards (id, question, score, status, options (without correct)
        
        // send notifications to all
        io.sockets.emit('game-started', data);
    });
    
    /* User answered the card */
    socket.on('game-start', function (data) {        
        console.log(data);
        // change card number
        
        // send notifications to all
        io.sockets.emit('game-started', data);
        // update score
        io.sockets.emit('scorechanged', data);
    });
         
    socket.on('scorechanged', function (data) {
            console.log(data);
    });
    
});


//Start the http server at port and IP defined before
http.listen(app.get("port"), app.get("ipaddr"), function() {
  console.log("Server up and running.");
});
