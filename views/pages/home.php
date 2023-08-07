<?php

use App\Services\Page;

?>
<!doctype html>
<html lang="en">
<?php
Page::part("Head");
?>
<body>
<div class="w-full  h-full">
    <div class="card mb-3">

        <div class="card-body position-relative">
            <?php
            Page::part("Navbar");
            ?>
        <img src="/assets/img/post9.jpg" class="card-img-top" alt="post">

        </div>
    </div>

</div>

</body>
</html>