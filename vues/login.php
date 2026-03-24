<?php
ob_start();
?>
    <title>YKM Motors - Login</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Jost", sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 0;
            flex-grow: 1;
        }
        
        .main {
            width: 500px;
            height: 500px;
            overflow: hidden;
            background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/cover;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
            margin: 20px 0;
        }
        
        #chk {
            display: none;
        }
        
        .signup {
            position: relative;
            width: 100%;
            height: 100%;
        }
        
        label {
            color: #e10b0b;
            font-size: 2.3em;
            justify-content: center;
            display: flex;
            margin: 50px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.5s ease-in-out;
        }
        
        input {
            width: 60%;
            height: 10px;
            background: #e0dede;
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 12px;
            border: none;
            outline: none;
            border-radius: 5px;
        }
        
        button {
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #e10b0b;
            background: #ffffff;
            font-size: 1em;
            font-weight: bold;
            margin-top: 30px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: 0.2s ease-in;
            cursor: pointer;
        }
        
        button:hover {
            background: #f0f0f0;
        }
        
        .login {
            height: 460px;
            background: #e10b0b;
            border-radius: 60% / 10%;
            transform: translateY(-180px);
            transition: 0.8s ease-in-out;
        }
        
        .login label {
            color: #ffffff;
            transform: scale(0.6);
        }
        
        #chk:checked ~ .login {
            transform: translateY(-500px);
        }
        
        #chk:checked ~ .login label {
            transform: scale(1);
        }
        
        #chk:checked ~ .signup label {
            transform: scale(0.6);
        }
    </style>

    <div class="content">
        <div class="login-container">
            <div class="main">
                <input type="checkbox" id="chk" aria-hidden="true">

                <div class="signup">
                    <form>
                        <label for="chk" aria-hidden="true">Sign up</label>
                        <input type="text" name="txt" placeholder="User name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="number" name="broj" placeholder="telephone" required>
                        <input type="password" name="pswd" placeholder="Password" required>
                        <button>Sign up</button>
                    </form>
                </div>

                <div class="login">
                    <form>
                        <label for="chk" aria-hidden="true">Login</label>
                        <input type="email" name="email" placeholder="Email" required style="background-color: #ffffff">
                        <input type="password" name="pswd" placeholder="Password" required style="background-color: #ffffff">
                        <button>Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
$page = ob_get_clean();
?>