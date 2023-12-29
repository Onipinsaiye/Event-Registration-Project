const express = require("express");

const bodyParser = require("body-parser")

const php = require("php")

const app = express();

const https = require("https");

const port = 4000;

// var openWeatherApiKey = 878c351a1dca5fbcf8374b2bd8bee9d1

app.use(bodyParser.urlencoded({extended: true}))

app.use(express.static("public"))

app.set("view engine", "php")


//This is a dummy data base of registered users

    var clients = [
        {
            username: "",
            password: "",
            user: ""
        },
        {
            username: "",
            password: "",
            user: ""
        },
        {
            username: "",
            password: "",
            user: ""
        },
        {
            username: "",
            password: "",
            user: ""

        },
        {
            username: "",
            password: "",
            user: ""
        }
    ]


//This code renders the login page of the web app
app.get("/", function(req,res){
    return res.render("Login")
})


/**
This code request respond to the post request made from the login route by authenticating
user login against what is in the data base before granting or denying accesss to the home page
 */
app.post("/", function(req,res){
    
    var button = req.body.btn

    var username = req.body.username

    var password = req.body.password

    let isAuthenticated = false;

    if(button === "" && username !== "" && password !== ""){
        for(let i = 0; i<clients.length; i++){
            if(clients[i].username === username && clients[i].password === password){
                isAuthenticated = true;
                break;
            }else{
                return res.redirect("Failure")
            }
        }

        if(isAuthenticated){
            return res.redirect("Home");
        }else{
            return res.redirect("Failure");
        }
    }
})

//This code runs the signup page of the web app

app.get("/signup", function(req,res){
    return res.render("Signup")
})


// This code respond to the post request made from the signup page when the user want to register an a new account.
app.post("/signup", function(req,res){

    var firstName = req.body.firstName

    var lastName = req.body.lastName

    var email = req.body.email

    var firstPassword = req.body.passwordOne

    var secondPassword = req.body.passwordTwo

    var button = req.body.btn

    if(button === "" && firstName !== "" && lastName !=="" && email !=="" && firstPassword === secondPassword){
        clientUsername.push(email)
        clientPassword.push(secondPassword)
        return res.redirect('Success')
    }else if (button === "" && firstName === "" && lastName === "" && email === "" && firstPassword !== secondPassword){
        return res.redirect("Failure")
    }else{
        return res.redirect("Failure")
    }

})

// This code renders the home page when the user logs in

app.get("/home", function(req,res){
    return res.render("Home")
})


// This code respond to the post request made from the home route by posting customer's entered data to the mail chimp audience list
app.post("/home", function(req,res){

    const firstName = req.body.fName

    const lastName = req.body.lName

    const email = req.body.email

    var phoneNumber = req.body.phone_number

    var button = req.body.btn

    var buttonTwo = req.body.btn2

    var data = {
        members: [
            {
                email_address: email,
                status: "subscribed",
                merge_fields: {
                    FNAME: firstName,
                    LNAME: lastName,
                    PHONE: phoneNumber
                }
            }
        ]
    };

    var jsonData = JSON.stringify(data)


    const url = "https://us21.api.mailchimp.com/3.0/lists/32826e4639"

    const options = {
        method: "POST",
        auth: "victor:cf042b136659f31aec744cb2ff99c4a7-us21"
    }

    const request = https.request(url, options, function(response){

        if(buttonTwo === ""){
            return res.redirect("/")
         }else if (button === " " && firstName !== "" && lastName !== "" && phoneNumber !== ""){
            console.log(response.statusCode)
            res.redirect("Success");
         }else{
            res.redirect("Failure");
         }

        response.on("data", function(data){
        })
    })

    request.write(jsonData);
    request.end();

})


// This code renders the success page when the user successfully carries out an operation

app.get("/success", function(req,res){
    return res.render("Success")
})

// This code respond to the post request made when the button on the success page is clicked
app.post("/success", function(req,res){
    
    var button = req.body.btn
    if(button === ""){
        return res.redirect("/")
    }else{
        return res.redirect("Failure")
    }
})


// This code displays a failure page when the user's operation is not successful

app.get("/failure", function(req,res){
    return res.render("Failure")
})

// This code respond to the post request made when any of the buttons on the failure page is clicked
app.post("/failure", function(req,res){

    var button = req.body.btn

    var buttonTwo = req.body.btn2

    if(button === ""){
        return res.redirect("/")
    }else if(buttonTwo === ""){
        return res.redirect("Signup")
    }else{
        return res.redirect("Failure")
    }
})


// This code create a connection for the server to relate with the browser

app.listen(port, function(){
    console.log("Server is running on port 4000!")
});

