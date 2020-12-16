<html>
<head>
    <title>Admin qismi</title>
    <link rel="stylesheet" href="css/admin.css" type="text/css"/>
</head>
<body style="background:url('/img/dark-wood.jpg');">
<div class="back" style="background:url('/img/dark-wood.jpg');margin-top:200px;">
    <div style="background:url('/img/dark.jpg');">
        <form action="/LogController" method="post">
            <label for="fname" style="font-size:30px;color:#abd;">Login</label><br/><br/>
            {{ csrf_field() }}
            <input type="hidden" value="Admin" name="Hack"/>
            <label for="lname">Login kiriting</label>
            <input type="text" id="fname" name="login" placeholder="Login kiriting...">
            <label for="lname">Parol kiriting</label>
            <input type="password" id="lname" name="password" placeholder="Kodingizni kiriting...">
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
</body>
</html>