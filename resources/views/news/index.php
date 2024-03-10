<?php foreach ($news as $n): ?>
    <div class="bor-red">
        <h2><?=$n['title']?></h2>
        <p><?=$n['description']?></p>
        <div><strong><?=$n['author']?> (<?=$n['create_at']?>)</strong>
            <a href="<?=route('news.show', ['id' => $n['id']])?>">Читать далее</a>
        </div>
    </div>
<?php endforeach; ?>
