<?php
// index.php
    $hello = "Hello";
    $web = "WEB2013";
    echo $hello."world. I'm".$web." - Lap trinh PHP1";
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    
</head>
<!--Stylesheet-->
<style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;


        }

        form {
            height: 520px;
            width: 400px;
            background-color: rgb(5, 6, 19);
            /*độ mờ 13%*/
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            /* Làm mờ phần nền phía sau form, tạo cảm giác sâu hơn*/
            border: 2px solid rgba(255, 255, 255, 0.1);


            padding: 50px 35px;
        }

        .background::after,
        .background::before {
            content: '';
            position: absolute;
            height: 525px;
            width: 405px;
            background-image: conic-gradient(from var(--angle), #ff4545, #00ff99, #006aff, #ff0095, #ff4545);
            top: 50%;
            left: 50%;
            translate: -50% -50%;
            z-index: -1;
            padding: 3px;
            border-radius: 10px;
            animation: 3s spin linear infinite;
        }

        .background::before {
            filter: blur(1.5rem);
            opacity: 0.5;
        }

        @property --angle {
            syntax: "<angle>";
            initial-value: 0deg;
            inherits: false;
        }

        @keyframes spin {
            from {
                --angle: 0deg;
            }

            to {
                --angle: 360deg;
            }
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s ease;
            /* Thêm hiệu ứng chuyển động */
        }

        button:hover {
            transform: scale(1.1);
            background: linear-gradient(to right, #e69d9d, #77c9ff);
            /* Gradient màu */

        }
        .btng {
            margin-top: 30px;
            display: flex;
            justify-content: space-between; /* Align buttons evenly */
            width: 100%; /* Use full width */
        }
        .btng .login,
        .btng .signup {
            flex: 1; /* Make buttons take equal space */
            margin: 0 5px; /* Add some margin between buttons */
            position: relative;
            padding: 15px; /* Ensure padding is consistent */
        }
        .social {
            margin-top: 30px;
            display: flex;
        }
        
        .social div {
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
            transform: scale(1.1);
            cursor: pointer;


        }

        .social .fb {
            margin-left: 25px;
        }

        .social i {
            margin-right: 4px;
        }

        .social a {
            text-decoration: none;
            /* Giữ liên kết không có gạch chân */

        }

        .go:hover {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            /* Gradient màu */
            display: inline-block;
            /* Đảm bảo liên kết hoạt động như một khối */
            font-size: 18px;
            /* Kích thước chữ */
            font-weight: 600;
            /* Độ đậm của chữ */

        }

        .fb:hover {
            background: linear-gradient(to right, #68c3ffb7, #88bcf7);
            /* Gradient màu */
            display: inline-block;
            /* Đảm bảo liên kết hoạt động như một khối */
            font-size: 18px;
            /* Kích thước chữ */
            font-weight: 600;
            /* Độ đậm của chữ */
        }
</style>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="core.php" method="post">
        <h3>Login Form</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">
        <div class="btng">
            <button class="login">Log In</button>
            <button class="signup">Sign up</button>
        </div>

        <div class="social">
            <div class="go"><i class="fab fa-google"> </i><a
                    href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fmyaccount.google.com%3Futm_source%3Daccount-marketing-page%26utm_medium%3Dgo-to-account-button&ifkv=ARpgrqfRJiPZtFQg2u3uLakr4o3lK5oDJApAGOQSh-eKV4PrDeAZblBHjNyN21-Jb5RVliC2B4F1&service=accountsettings&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S907697406%3A1729654593024503&ddm=0">Google</a>
            </div>
            <div class="fb"><i class="fab fa-facebook"></i><a
                    href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNzI5NjU0NjEzLCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D&next">Facebook</a>
            </div>
        </div>
    </form>
</body>

</html>
