<?php

use App\Services\Page;

?>
<!doctype html>
<html lang="en">
<?php
Page::part("Head");
?>
<body>
<?php
Page::part("Navbar");
?>
<div class="w-full  h-full">
    <h1 class=" text-lg-center mt-5">Sign In</h1>
    <form>
        <div class="m-4">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="m-4">
            <label for="inputPassword6" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="m-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>

</body>
</html>