<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Đăng nhập</h1>
<form method="post">
    @csrf
    <p>
        <input type="text" name="username" placeholder="Tên đăng nhập">
    </p>
    <p>
        <input type="text" name="password" placeholder="Mật khẩu">
    </p>
    <p>
        <input type="submit" value="Đăng nhập"/>
    </p>
</form>
</body>
</html>