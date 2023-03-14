<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="img/it.png">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inner Thoughts</title>
    <link rel="stylesheet" href="home.css">
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    background-color: black;
    font-family: cursive;
    padding: 10px;
    color: white;
}

h2 {
    margin-left: 50px;
}

header {
    text-align: center;
    padding: .5rem;
}

.wrapper {
    max-width: 500px;
    margin-right: 0 auto;
}

.card {
    padding: 0.5rem 1rem;
    border: 3px solid white;
    color: white;
    width: 1000px;
    margin-left: 50px;
}

.text-center {
    text-align: center;
    
}

textarea {
    width: 1220px;
    margin: 0px;
}

.out {
    width: 60px;
    padding: 5px;
    margin: 5px;
    display: inline-block;
    text-align: center;
    border: 4px solid whitesmoke;
    background-color: aliceblue;
}

.out a {
    text-decoration: none;
    display: inline-block;
}

/* Set a style for all buttons */
button {
    background-color: white;
    color:  black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100px;
    opacity: 0.9;
  }
  
button:hover {
    opacity:1;
  }
  
</style>
<body>

    <div class="out">
        <a href="sign_log.php">Log Out</a></li>
    </div>

    <header class="text-center">
        <center><h1>Capture your thoughts, preserve your memories.</h1></center>
    </header>
    
    <h2>The Word Weaver</h2>

    <div class="wrapper text-center">
        <textarea id="txt" rows="3" placeholder="Life's Moments"></textarea>
    </div>

    <center><button onclick="getRs()">POST</button>
        <h4>Memoir Lane</h4></center>

    <div class="wrapper" id="rs"></div>

    <script>
        function _(id){
            return document . getElementById(id)
        }    

        function getRs() {
            let txt = _('txt').value
            const d = new Date()

            _('rs').innerHTML += `<div class="card"><p>${txt}</p> 
            <small>${d.toLocaleTimeString()}, ${d.toLocaleDateString()}</small></div>`
        }
    </script>

</body>
</html>