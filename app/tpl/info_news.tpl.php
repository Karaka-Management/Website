<?php $articles = $this->getData('articles');
foreach ($articles as $article) : ?>
    <article>
        <h1><a href="/info/article/<?= \urlencode($article['path'] ?? '') ?>/<?= \urlencode($article['name'] ?? '') ?>"><?= $article['headline'] ?? '' ?></a></h1>
        <p><?= \substr($article['summary'] ?? '', 0, 250) ?> ... (<a href="/info/article/<?= \urlencode($article['path'] ?? '') ?>/<?= \urlencode($article['name'] ?? '') ?>">more</a>)</p>
    </article>
<?php endforeach; ?>