<div class="container">

    <?php $Languages = $this->Language->getLanguages(); ?>
    <nav id="lang_nav">
        <?php if(isset($Languages) AND is_array($Languages) AND !empty($Languages)): ?>
        <ul>
            <li>
                <a href="/<?php echo $this->Language->getLanguage(); ?>"><img src="/theme/Design/img/flags/<?php echo $this->Language->getLanguage2Img($this->Language->getLanguage()) ; ?>.png" width="35" alt="<?php echo $this->Language->getLanguage(); ?>"></a>
                <ul>
                <?php foreach($Languages AS $Language): ?>
                    <?php if($Language['name'] != $this->Language->getLanguage()): ?>
                        <li><a href="/<?php echo $Language['name']; ?>"><img src="/theme/Design/img/flags/<?php echo $this->Language->getLanguage2Img($Language['name']); ?>.png" alt="" width="35"></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
                </ul>
            </li>
        </ul>
        <?php endif; ?>
    </nav>

    <?php echo $this->element('layout-blocks/header-block/user-box'); ?>
    <a href="/<?=Configure::read('Config.language')?>"><img src="/theme/Design/img/logo.png" alt="" class="logo"></a>

    <div class="clear"></div>
</div>
