<?php $pager->setSurroundCount(1) ?>
<ul class="next-prev-nav pagination-nav">
    <?php if ($pager->hasPreviousPage()) : ?>
        <li class="prev">
            <a class="button button_js" href="<?= $pager->getPreviousPage() ?>"><span class="button_icon"><i class="icon-left-open"></i></span></a>
        </li>
    <?php endif ?>
    <?php foreach ($pager->links() as $link) : ?>
        <li>
            <a <?= $link['active'] ? 'class="button button_large button_theme button_js"' : 'class="button button_js"' ?> href="<?= $link['uri'] ?>">
                <span class="button_icon"> <?= $link['title'] ?></span>
            </a>
        </li>
    <?php endforeach ?>
    <?php if ($pager->hasNextPage()) : ?>

        <li class="next">
            <a class="button button_js" href="<?= $pager->getNextPage() ?>"><span class="button_icon"><i class="icon-right-open"></i></span></a>
        </li>
    <?php endif ?>

</ul>