<?php
    /**
     * @var core\View $this
     * @var array $items
     */
 ?>
<h2><?=$this->title?></h2>

<? if (!empty($items)) { ?>
    <? foreach ($items as $item) { ?>
        <div class="image-block">
            <? if ($item['image'] != '') { ?>
                <a href="/data/skins/<?=$item['image']?>" rel="lightbox"><img src="/data/skins/s_<?=$item['image']?>" alt="<?=$item['title']?>"></a>
            <? } ?>
        </div>
        <div class="description-block">
            <h3><?=$item['title']?></h3>
            <? if ($item['text'] != '') { ?>
                <p><?=$item['text']?></p>
            <? } ?>
            <p>
                <? if ($item['cms'] != '') { ?>
                    Тема для <?=ucfirst($item['cms'])?>
                <? } ?>
            </p>
            <p>
                Сделана в <?=date('Y', strtotime($item['date']))?> году
            </p>

        </div>
        <div class="clear"></div>
    <? } ?>
<? } else { ?>
    <p>Данных нет</p>
<? } ?>

<?php include($this->partialPath . '/pagination.php');?>
