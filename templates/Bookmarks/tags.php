<h1>Bookmarks com a Tag: <?= h($tagName) ?></h1>

<?php if (!empty($bookmarks)): ?>
    <ul>
        <?php foreach ($bookmarks as $bookmark): ?>
            <li>
                <?= $this->Html->link(h($bookmark->title), $bookmark->url) ?>
                — <?= h($bookmark->description) ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Nenhum bookmark encontrado para esta tag.</p>
<?php endif; ?>
