<?php
view('blocks.head', ['title' => $title ?? '']);
?>

<h1><?= $title ?? ''?></h1>


<form action="/login" method="post">
    <div class="form-control">
        <input class="form-control form-control-lg" type="text" name="username" placeholder="Username" value="<?= $username ?? ''?>">
        <input class="form-control form-control-lg" type="password" name="password" placeholder="Password">
        <input class="form-control form-control-lg" type="submit" class="btn btn-primary" value="Next">
    </div>
</form>

<?php
view('blocks.footer');
?>