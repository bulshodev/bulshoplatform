<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title><?php echo Configure::read('Settings.defaultTitle'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->MyHtml->meta('keywords', (isset($keywords) ? $keywords : Configure::read('Settings.metaKeywords'))); ?>
    <?php echo $this->MyHtml->meta('description', (isset($description) ? $description : Configure::read('Settings.metaDescription'))); ?>
    <?php echo $this->MyHtml->meta(array('name' => 'author', 'content' => Configure::read('Settings.metaAuthor'))); ?>
    <?php echo $this->MyHtml->meta(array('name' => 'reply-to', 'content' => Configure::read('Settings.metaReplayTo'))); ?>
    <?php echo $this->MyHtml->meta(array('name' => 'copyright', 'content' => Configure::read('Settings.metaCopyright'))); ?>
    <?php echo $this->MyHtml->meta(array('name' => 'revisit-after', 'content' => Configure::read('Settings.metaRevisitTime'))); ?>
    <?php echo $this->MyHtml->meta(array('name' => 'identifier-url', 'content' => Configure::read('Settings.metaIdentifierUrl'))); ?>
    <meta name="verify-webtopay" content="90d888a7029def4d923a93aaec715262">

    <!-- Core CSS -->
    <?php echo $this->MyHtml->css(array('reset', 'fonts', "icons")); ?>
    <?php if(in_array($this->Language->getLanguage(), array('fas', 'heb'))): ?>
        <link rel="stylesheet" type="text/css" href="<?=$this->Html->url('/theme/Design/css/style-rtl.css?'.time());?>" />
    <?php else: ?>
        <link rel="stylesheet" type="text/css" href="<?=$this->Html->url('/theme/Design/css/style.css?'.time());?>" />
    <?php endif; ?>

    <!--[if lt IE 9]>
    <?php echo $this->MyHtml->script(array('html5shiv.min', 'respond.min.js')); ?>
    <![endif]-->
</head>
<body <?php if(in_array($this->Language->getLanguage(), array('fas', 'heb'))): ?>dir="rtl"<?php endif; ?>>

<header>
    <?php echo $this->element('layout-slots/header-slot'); ?>
</header>

<?php echo $this->element('layout-slots/top-slot'); ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="/<?=Configure::read('Config.language'); ?>/sports/1/">
                <img src="<?=$this->Html->url('/theme/Design/img/uploads/slide_1.jpg');?>" alt="" />
            </a>
            <div class="carousel-caption">
                <p><?php echo __('We provide wide range of football events. Major Europe leagues daily on '); ?><?php echo Configure::read('Settings.defaultTitle'); ?> <?php echo __('sportsbook. Check and place your bets.'); ?></p>
                <a href="/<?=Configure::read('Config.language'); ?>/sports/1/" class="btn-more"><?php echo __('FOOTBALL'); ?></a>
            </div>
        </div>
        <div class="item">
            <a href="/<?= Configure::read('Config.language'); ?>/sports/2/">
                <img src="<?=$this->Html->url('/theme/Design/img/uploads/slide_2.jpg');?>" alt="" />
            </a>
            <div class="carousel-caption">
                <p><?php echo __('ATP Masters and many other leagues are available for daily tennis betting on'); ?><?php echo Configure::read('Settings.defaultTitle'); ?> <?php echo __('portal. Place your best for the win!'); ?></p>
                <a href="/<?=Configure::read('Config.language'); ?>/sports/2/" class="btn-more"><?php echo __('TENNIS'); ?></a>
            </div>
        </div>
        <div class="item">
            <a href="/<?=Configure::read('Config.language'); ?>/sports/4/">
                <img src="<?=$this->Html->url('/theme/Design/img/uploads/slide_3.jpg');?>" alt="" />
            </a>
            <div class="carousel-caption">
                <p><?php echo __('NBA, Euoleague and many other leagues are available for daily betting on'); ?> <?php echo Configure::read('Settings.defaultTitle'); ?> <?php echo __('portal. Place your best for the win!'); ?></p>
                <a href="/<?=Configure::read('Config.language'); ?>/sports/4/" class="btn-more"><?php echo __('BASKETBALL'); ?></a>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="container">
        <?php if(!empty($firstEvent)): ?>
        <div class="top-head"><?php echo $firstEvent["League"]["name"]; ?></div>
        <table class="big-tbl">
            <tr>
                <td class="l-corn"><?php echo __("Today", $this->TimeZone->convertDate($firstEvent['Event']['date'], 'H:i')); ?></td>
                <?php foreach($firstEvent["Bet"][0]["BetPart"] AS $betPart): ?>
                    <td class="on-click" id="<?php echo $betPart["BetPart"]['id']; ?>" class="addBet" data-href="<?=Router::url(array('language' => Configure::read('Config.language'), 'plugin' => 'events', 'controller' => 'events', 'action' => 'display', $firstEvent["Event"]["id"]))?>">
                        <span class="right">
                            <?php echo $this->Beth->convertOdd($betPart['BetPart']['odd']); ?>
                        </span>
                        <?php echo $betPart['BetPart']['name']; ?>
                        <span class="clear"></span>
                    </td>
                <?php endforeach;?>
                <td data-href="<?=Router::url(array('language' => Configure::read('Config.language'), 'plugin' => 'events', 'controller' => 'events', 'action' => 'display', $firstEvent["Event"]["id"]))?>" class="r-corn">
                    +
                </td>
            </tr>
        </table>
        <?php endif; ?>

        <?php if(!empty($otherEvent)): ?>
        <div class="mid-head">
            <span>
                <?php if($firstEvent["League"]["name"] != $otherEvent[0]["League"]["name"]): ?>
                <?php echo $otherEvent[0]["League"]["name"]; ?>
                <?php endif; ?>
            </span>
        </div>

        <?php $otherEvent = array_chunk($otherEvent, (int)ceil(count($otherEvent)/2)); ?>

        <?php if (isset($otherEvent[0]) && is_array($otherEvent[0]) && !empty($otherEvent[0])): ?>
        <div class="tbl-cell1">
            <table class="small-tbl">
                <?php foreach($otherEvent[0] AS $Event): ?>
                <tr>
                    <td class="l-corn"><?php echo __("Today", $this->TimeZone->convertDate($firstEvent['Event']['date'], 'H:i')); ?></td>
                    <?php foreach($Event["Bet"][0]["BetPart"] AS $betPart): ?>
                        <td class="on-click" id="<?php echo $betPart["BetPart"]['id']; ?>" class="addBet" data-href="<?=Router::url(array('language' => Configure::read('Config.language'), 'plugin' => 'events', 'controller' => 'events', 'action' => 'display', $firstEvent["Event"]["id"]))?>">
                        <span class="right">
                            <?php echo $this->Beth->convertOdd($betPart['BetPart']['odd']); ?>
                        </span>
                            <?php echo $betPart['BetPart']['name']; ?>
                            <span class="clear"></span>
                        </td>
                    <?php endforeach;?>
                    <td data-href="<?=Router::url(array('language' => Configure::read('Config.language'), 'plugin' => 'events', 'controller' => 'events', 'action' => 'display', $Event["Event"]["id"]))?>" class="r-corn">
                        +
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
        <?php if (isset($otherEvent[1]) && is_array($otherEvent[1]) && !empty($otherEvent[1])): ?>
        <div class="tbl-cell2">
            <table class="small-tbl">
                <?php foreach($otherEvent[1] AS $Event): ?>
                <tr>
                    <td class="l-corn"><?php echo __("Today", $this->TimeZone->convertDate($firstEvent['Event']['date'], 'H:i')); ?></td>
                    <?php foreach($Event["Bet"][0]["BetPart"] AS $betPart): ?>
                        <td class="on-click" id="<?php echo $betPart["BetPart"]['id']; ?>" class="addBet" data-href="<?=Router::url(array('language' => Configure::read('Config.language'), 'plugin' => 'events', 'controller' => 'events', 'action' => 'display', $Event["Event"]["id"]))?>">
                        <span id="<?php echo $betPart["BetPart"]['id']; ?>" class=" addBet right">
                            <?php echo $this->Beth->convertOdd($betPart['BetPart']['odd']); ?>
                        </span>
                            <?php echo $betPart['BetPart']['name']; ?>
                            <span class="clear"></span>
                        </td>
                    <?php endforeach;?>
                    <td data-href="<?=Router::url(array('language' => Configure::read('Config.language'), 'plugin' => 'events', 'controller' => 'events', 'action' => 'display', $Event["Event"]["id"]))?>" class="r-corn">
                        +
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
        <div class="clear"></div>
        <?php endif; ?>
    </div>
</div>

<footer>
    <?php echo $this->element('layout-slots/footer-slot'); ?>
</footer>
<!-- JavaScript -->
<?php echo $this->MyHtml->script(array('jquery.min', 'tooltip', 'carousel', 'BetSlip')); ?>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('.carousel').carousel();
        $('td.r-corn, td.on-click').click(function(el){
            window.location.href = $(this).attr('data-href');
        });
    });
</script>
</body>
</html>