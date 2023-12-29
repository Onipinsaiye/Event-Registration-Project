<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tech.com</title>
    </head>
    <body>
        <div class="container" id="container">
            <h2><em>Login to your account</em></h2>
        </div>
        <form action="/" method="post" autocomplete="off">
            <input type="text" placeholder="Username or Email" name="username" id="username" class="username" required> <br>
            <input type="password" placeholder="Password" name="password" id="password" class="password" required> <br>
            <button type="submit" id="btn" name="btn" class="btn">Login</button> <br> <br>
            <h4><em>Don't have an account? <a href="Signup">Sign up</a></em></h4> 
        </form> <br>

        <p id="footer">
            &copy; Victor Onipinsaiye, 2023. All right reserved.
        </p>

        </div>
    

    </body>
    <style>
        html{
            margin-top: 10%;
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            min-height: 100px;
        }
        form{
            border: 2px solid black;
            width: 50% ;
            margin: auto;
            background-image: -webkit-linear-gradient(65deg, #6A93D9 55%, #CDB4DB 45%);
        }
        input{
            margin-top: 30px;
            height: 10%;
            width: 80%;
            border-radius: 5px;
            font-family: cursive;
            font-weight: bolder;
            font-size: medium;
        }
        .btn{
            margin-top: 30px;
            width: 30%;
            height: 10%;
            font-family: cursive;
            font-weight: bolder;
            background-color: #9ACD32;
            border-radius: 8px;
            border-color: #9ACD32;
        }
        label{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: larger;
        }
        .header{
        text-align: center;
        }
    </style>
</html>