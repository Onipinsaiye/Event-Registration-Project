<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tech.com</title>
    </head>
    <body>
        <div class="container" id="container">
            <h2><em>Create an account</em></h2>
        </div>
        <form action="/signup" method="post" autocomplete="off"> <br>
            <h3><em>Enter your details below to Create an account.</em></h3>
            <input type="text" placeholder="First Name" name="firstName" id="firstName" class="firstName" autocomplete="off"> <br> <br>  
            <input type="text" placeholder="Last Name" name="lastName" autocomplete="off"> <br> <br>  
            <input type="email" placeholder="Email address" name="email" id="email" class="email" autocomplete="off"> <br> <br>
            <input type="password" placeholder="Create password" name="passwordOne" autocomplete="off"> <br> <br> 
            <input type="password" placeholder="Confirm password" name="passwordTwo" autocomplete="off"> <br> <br>
            <button type="submit" id="btn" name="btn" class="btn">Signup</button> <br>
            <h4><em>Alread have an account? <a href="/">Login</a></em></h4> 
        </form>

        <p id="footer">
            &copy; Victor Onipinsaiye, 2023. All right reserved.
        </p>

        </div>    

    </body>
    <style>
        html{
            margin-top: 5%;
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            min-height: 100px;
        }
        input{
            height: 5%;
            width: 80%;
            border-radius: 5px;
            font-family: cursive;
            font-weight: bolder;
            font-size: medium;
        }
        .btn{
            margin-top: 2px;
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
        form{
            width: 40%;
            height: 400px;
            margin: auto;
            border: 2px solid black;
            background-image: -webkit-linear-gradient(65deg, #6A93D9 55%, #CDB4DB 45%);
        }

    </style>
</html>