<?php
$posts = $this->getData('posts');
?>

<main>
    <section class="spacer">
        <div class="content">
            <h1>Blog</h1>
            <ul>
<?php foreach ($posts as $post) :
    $post = str_replace('\\', '/', $post);
    $post = explode('/', $post);
    $linkName = substr(end($post), 0, -3);
    $post = substr($linkName, 9);
    ?>
    <li><a href="blog/<?= $linkName; ?>"><?= $post; ?></a>
<?php endforeach; ?>
            </ul>
        </div>
    </section>
</main>