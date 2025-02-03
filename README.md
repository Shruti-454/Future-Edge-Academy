<!DOCTYPE html>
<html lang="en">
<head>
    <title>FUTURE EDGE</title>
    <link rel="stylesheet" href="style[1].css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"><un>FutureEdge Academy</un></h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="About.html">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li>
                    <li><a href="Contact.html">CONTACT</a></li>
                </ul>
            </div>
            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To search">
                <a href="#"> <button class="btn">Search</button></a>
            </div>
        </div> 
        <div class="content">
            <h1>Education<br><span>Employment</span> <br>& Skill Development</h1>
            <p class="par">Skilling is building a better India. If we have to move India towards <br/> development then skill development should be <br/>our mission.​</p>
            <button class="cn"><a href="D:\web.html">JOIN US</a></button>
            <div class="form">
                <h2>Login Here</h2>
                <input type="email" id="email" placeholder="Enter Email Here">
                <input type="password" id="password" placeholder="Enter Password Here">    
                <br><br>                
                <button class="button" onclick="validateLogin()">LOGIN</button>                    
                <br><br>
                <p class="link">Not registered?<br>
                <a href="signup.html">Create an account </a> here</p>
                <p class="liw">Log in with</p>
                <div class="icons">
                    <a href="https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&next=https%3A%2F%2Fwww.facebook.com%2Ftheprojectquote%2Fphotos%2Fa.356649741418568%2F974238229659713%2F%3Ftype%3D3&lwv=120&lwc=1348131"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="https://twitter.com/"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="https://www.google.com/"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="https://www.skype.com/en/"><ion-icon name="logo-skype"></ion-icon></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script>
        // Predefined username and password combinations
        const userCredentials = [
            { email: "shrutimahato@gmail.com", password: "Shruti@123" },
            { email: "shivamchakraborty@gmail.com", password: "Shivam@123" },
            { email: "tanishmaity@gmail.com", password: "Tanish@123" },
        ];
// Function to validate login
        function validateLogin() {
            const emailInput = document.getElementById("email").value;
            const passwordInput = document.getElementById("password").value;

            // Check if the entered credentials match any predefined combination
            const isValidUser = userCredentials.some(
                (user) => user.email === emailInput && user.password === passwordInput
            );

            if (isValidUser) {
                alert("Login successful!");
                // Redirect to a new webpage
                window.location.href = "welcome.html"; 
            } else {
                alert("Invalid email or password. Please try again.");
            }
        }
    </script>

    
</body>
</html>
