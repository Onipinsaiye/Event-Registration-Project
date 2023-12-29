<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech.com</title>
</head>
<body>
    <div class="container" id="container"> <br><br>
        <h2><em>Successful!</em></h2>
        <h2><em>Request Completely Processed!</em></h2>
    </div>
    <form action="/success" method="post">
        <button type="submit" name="btn" class="btn" id="btn">Okay</button>
    </form>
    <p id="footer">
        &copy; Victor Onipinsaiye, 2023. All right reserved.
    </p>
    
</body>
<style>
    html{
        text-align: center;
        margin-top: 10%;
        font-family: Georgia, 'Times New Roman', Times, serif;
        min-height: 100px;
    }
    .btn{
        width: 20%;
        height: 10%;
        font-size: x-large;
        font-family: sans-serif;
        background-color: #9ACD32;
        border-radius: 8px;
        border-color: #9ACD32;
    }
    body{
        width: 50%;
        height: 300px;
        margin: auto;
        border: 2px solid black;
    }
    .container{
        background-image: -webkit-linear-gradient(65deg, #6A93D9 55%, #CDB4DB 45%);
    }
</style>
</html>