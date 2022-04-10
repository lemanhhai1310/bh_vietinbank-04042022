<nav class="uk-navbar-container cocauquantri__navbar" uk-navbar>
    <div class="uk-navbar-left">
        <a href="" class="uk-navbar-item"></a>
    </div>
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <?php if (isset($datamenu)): ?>
                <?php foreach ($datamenu as $k=>$v): ?>
                    <li class="<?= ($v['active'])?'uk-active':'' ?>"><a href="<?= $v['link'] ?>"><?= $v['txt'] ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</nav>