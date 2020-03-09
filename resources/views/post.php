<?php
view('blocks.head', ['title' => $post['title'] ?? '']);
?>

<h1><?= $post['Title'] ?></h1>
<p><?= $post['Content'] ?></p>
<p><?= $post['Created_at'] ?></p>

<?php view('blocks.footer'); ?>
