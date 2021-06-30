<nav id="main-menu">
    <div class="container">
        <!--  <ul class="menu1">
            <li>
                <a href="http://docs.bulshosports.africa" target="_blank">
                    <i class="menco m-ico2"></i>
                    <span class="menutxt"><?php echo __('Documentation'); ?></span>
                </a>
            </li>
        </ul> -->
        <ul class="menu2">
            <li>
                <a href="/<?= Configure::read('Config.language') ?>">
                    <i class="menco m-ico3"></i>
                    <span class="menutxt"><?php echo __(' Sports betting'); ?></span>
                </a>
            </li>
            <li>
                <a href="/<?= Configure::read('Config.language'); ?>/live-betting">
                    <i class="menco m-ico4"></i>
                    <span class="menutxt"><?php echo __(' Live betting'); ?></span>
                </a>
            </li>
            <?php if ($this->MyHtml->checkAcl(array('plugin' => 'casino', 'controller' => 'content', 'action' => 'index'))) : ?>
                <li>
                    <a href="/<?= Configure::read('Config.language'); ?>/casino/content">
                        <i class="menco m-ico6"></i>
                        <span class="menutxt"><?php echo __(' Casino'); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($this->MyHtml->checkAcl(array('plugin' => 'poker', 'controller' => 'pokerlogs', 'action' => 'index'))) : ?>
                <li>
                    <a href="/poker/index.php">
                        <i class="menco m-ico7"></i>
                        <span class="menutxt"><?php echo __(' Poker'); ?></span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
        <div class="clear"></div>
    </div>
</nav>
<?php if ($this->layout != "intro") : ?>
    <!--  <div id="submenu">
        <div class="container">
            <div class="right">
                <?php $oddsTypes = $this->Beth->getOddsTypes(); ?>
                <ul class="">
                    <?php if ($this->Session->check('Auth.User')) : ?>
                        <li>
                            <a href="#" onclick="return false;" class="time"><?php echo $this->Beth->getOddsType(CakeSession::read('Auth.User.odds_type')); ?></a>
                            <ul class="sub-of-sub">
                                <?php foreach ($oddsTypes as $OddType => $oddName) : ?>
                                    <li>
                                        <a href="<?php echo $this->Html->url(array('language' => Configure::read('Config.language'), 'plugin' => false, 'controller' => 'users', 'action' => 'changeOddsType', $OddType)); ?>">
                                            <?php echo $oddName; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a id="user-time" style="cursor: text; text-decoration: none;" href="#" class="chart"><?= date("H:i:s", strtotime($this->TimeZone->convertTime(time(), 'Y-m-d H:i:s'))); ?> <?= $this->TimeZone->timeZone(); ?></a>
                    </li>
                    <?php $today = getdate(strtotime($this->TimeZone->convertTime(time(), 'Y-m-d H:i:s'))); ?>
                    <script>
                        var d = new Date(<?php echo $today['year'] . "," . $today['mon'] . "," . $today['mday'] . "," . $today['hours'] . "," . $today['minutes'] . "," . $today['seconds']; ?>);
                        setInterval(function() {
                            d.setSeconds(d.getSeconds() + 1);
                            var hours = ("0" + d.getHours()).slice(-2);
                            var minutes = ("0" + d.getMinutes()).slice(-2);
                            var seconds = ("0" + d.getSeconds()).slice(-2);
                            var timezone = "<?= $this->TimeZone->timeZone(); ?>";
                            $('#user-time').text((hours + ':' + minutes + ':' + seconds + ' ' + timezone));
                        }, 1000);
                    </script>
                </ul>

                <div class="clear"></div>
            </div>
            <div class="left">
                <ul class="">
                    <?php foreach ($this->Menu->getMenu('top') as $menuItem) : ?>
                        <li><?php echo $this->MyHtml->link(__($menuItem['Menu']['title']), array('language' => Configure::read('Config.language'), 'plugin' => null, 'controller' => $menuItem['Menu']['url']), array('aco' => false)); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div> -->
<?php endif; ?>