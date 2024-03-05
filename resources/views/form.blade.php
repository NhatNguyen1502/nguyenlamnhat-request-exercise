<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="/handleForm" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" style="margin-top: 10px;" name="name" id="name">
        <br>
        <label for="username">Username</label>
        <input type="text" style="margin-top: 10px;" name="username" id="username">
        <br>
        <label for="password">Password</label>
        <input type="text" style="margin-top: 10px;" name="password" id="password">
        <br>
        <button style="text-align: center; margin-top: 10px; margin-left: 50px;">Register</button>
    </form>
</body>
</html>