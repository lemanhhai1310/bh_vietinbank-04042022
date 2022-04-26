<nav class="uk-navbar-container cocauquantri__navbar" uk-navbar>
    <div class="uk-navbar-left uk-flex-1 uk-width-1-1 uk-flex-center">
        <ul class="uk-navbar-nav uk-flex-nowrap uk-overflow-auto" style="width: max-content">
            <?php if (isset($datamenu)): ?>
                <?php foreach ($datamenu as $k=>$v): ?>
                    <li class="<?= ($v['active'])?'uk-active':'' ?>"><a href="<?= $v['link'] ?>"><?= $v['txt'] ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</nav>