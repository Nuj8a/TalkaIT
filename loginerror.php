<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Error Error</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }


        #loginErrorContainer {
            background-color: rgba(255, 255, 255, 0.641);
            height: 100vh;
            width: 100%;
            z-index: 1;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            color: rgb(91, 91, 91);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

    #loginError {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 600px;
            height: 150px;
            border: 2px groove rgb(180, 180, 180);
            box-shadow: 0px 6px 5px rgb(207, 207, 207);
            border-radius: 10px;
            background-color: rgba(228, 228, 228, 0.863);
        }

        #ErrorClose {
            position: absolute;
            top: -10px;
            right:-10px;
            width: 30px;
            height: 30px;
            border: 1px solid rgb(182, 182, 182);
            border-radius: 50%;
            font-size: 15px;
            background-color: rgb(136, 136, 136);
            color: rgb(228, 228, 228);
            cursor: pointer;
        }

        a {
            text-decoration: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div id="loginErrorContainer">
        <div id="loginError"> 
            <p>ERROR: :Invalid username or password<p>
          <a href="login.php"> <button id="ErrorClose">x</button></a>
        </div>
    </div>

</body>

</html>