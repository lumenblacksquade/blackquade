<html>
<head>
<metacharset="UTF-8">
<title> Login Page</title>
<linkrel="stylesheet"href="../static/style.css">
</head>
<body>
<divclass="logincontent"align="center">
<divclass="logintop">
<h1>Login Page</h1>
</div></br></br></br></br>
<divclass="loginbottom">
<formaction="{​​​​​​​​{​​​​​​​​ url_for('login')}​​​​​​​​}​​​​​​​​"method="post"autocomplete="off">
<divclass="msg">{​​​​​​​​{​​​​​​​​ msg }​​​​​​​​}​​​​​​​​</div>
<inputtype="text"name="username"placeholder="Enter Your Username"class="textbox"id="username"required></br></br>
<inputtype="password"name="password"placeholder="Enter Your Password"class="textbox"id="password"required></br></br></br>
<inputtype="submit"class="btn"value="Login">
</form></br></br>
<pclass="worddark">New to this page? <aclass="worddark"href="{​​​​​​​​{​​​​​​​​ url_for('register')}​​​​​​​​}​​​​​​​​">Register here</a></p>
</div>
</div>
</body>
</html>