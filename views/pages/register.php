<!doctype html>
<html lang="en">
<?php
require_once "views/components/Head.php"
?>

<body>
<?php
require_once "views/components/Navbar.php"
?>

<div class="w-full  h-full  flex justify-center items-center ">
    <div class="w-3/4">
    <h1 class=" text-lg-center mt-5">Sign Up</h1>
    <form  action="/auth/register" method="post" enctype="multipart/form-data">
        <div class="m-4">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="m-4">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp">
        </div>
        <div class="m-4">
            <label for="full_name" class="form-label">Full name</label>
            <input type="text" class="form-control" id=full_name" aria-describedby="emailHelp">
        </div>
        <div class="m-4">
            <label for="exampleFormControlInput1" class="avatar">User Avatar</label>
            <input type="file" class="form-control" id="avatar" aria-describedby="emailHelp">
        </div>
        <div class="m-4">
            <label for="password" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="m-4">
            <label for="password_confirm" class="col-form-label">Password Confirmation</label>
            <input type="password_confirmation" class="form-control" id="password_confirmation">
        </div>
        <div class="m-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
    </div>
</div>
</body>
</html>