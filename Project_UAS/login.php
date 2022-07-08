<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div id="back">
        <div class="backRight"></div>
        <div class="backLeft"></div>
    </div>

    <div id="slideBox">
        <div class="topLayer">
            <div class="left">
                <div class="content-register h-50">
                    <h2 class="text-success">Sign Up</h2>
                    <form method="post" onsubmit="return false;">
                        <div class="form-group">
                            <input type="text" placeholder="Full Name" />
                            <input type="email" placeholder="Email" />
                            <input type="text" placeholder="Username" />
                            <input type="password" placeholder="Password" />
                            <input type="password" placeholder="Confirm Password" />
                        </div>
                    </form>
                    <button class="btn btn-success mt-2" type="submit">Sign up</button>
                    <br>
                    <p class="text-center mt-5 text-white-50" style="font-size: smaller;">-- Already Have Account? Login Here! --</p>
                    <button id="goLeft" class="btn btn-outline-info w-100">Login</button>
                </div>
            </div>
            <div class="right">
                <div class="content h-50">
                    <h2>Login</h2>
                    <form method="post" onsubmit="return false;">
                        <div class="form-group">
                            <input type="text" placeholder="Username" />
                            <input type="text" placeholder="Password" />
                        </div>
                        <button class="btn btn-info mt-2" id="login" type="submit">Login</button>
                        <br>
                        <p class="text-white-50 mt-5 text-center" style="font-size: smaller;">-- Don't Have Account? Register Here! --</p>
                        <button id="goRight" class="btn btn-outline-success w-100">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<!--Inspiration from: http://ertekinn.com/loginsignup/-->