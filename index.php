<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Home.css">
</head>

<body>
    <header>
        TalkaIT
    </header>
    <main>
        <div id="profile">
            <div id="category">
                <a><img src="userid.png"><span id="idNum">Anonymous</span></a>
                <br>
                <a id="logout" href="logout.php"><img src="logout.png">Logout</a>
            </div>
        </div>
        <div id="center">
            <div class="post">
                <form>
                <textarea placeholder="Talk about it ! "></textarea>
                <!-- <input type="submit" value="Post"> -->
                <button type="submit">Post</button>
                </form>
            </div>
            <div id="countdown">
                <div id="countdownContainer">
                    <p id="timer"></p>
                </div>
                <br>
                <p id="exercise"></p>
            </div>
        </div>
        <div id="OnOffBtn" >
            <button id="On" style="visibility:visible" onclick="handelClick(true)">Start</button>
            <button id="Off" style="visibility:hidden" onclick="handelClick(false)">Stop</button>
        </div>  
    </main>
    <script src="login.js"></script>
    <script src="home.js"></script>
</body>

</html>