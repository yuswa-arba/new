<!DOCTYPE html>
<html lang="en">
<head>
    @include('style/Html')
</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form" action="loginme" method="post">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <label class="checkbox">
                <span class="pull-left"> <a href="register"> Register</a></span>
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
    </form>
    </div>
</div>


</body>
</html>
