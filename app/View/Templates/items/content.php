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
                <a href="/data/templates/<?=$item['image']?>" rel="lightbox"><img src="/data/templates/s_<?=$item['image']?>" alt="<?=$item['title']?>"></a>
            <? } ?>
        </div>
        <div class="description-block">
            <h3><?=$item['title']?></h3>
            <? if ($item['text'] != '') { ?>
                <p><?=$item['text']?></p>
            <? } ?>
            <p>
                <? if ($item['cms'] != '') { ?>
                    Шаблон для <?=ucfirst($item['cms'])?>
                <? } ?>
            </p>
            <p>
                Сделан в <?=date('Y', strtotime($item['date']))?> году
            </p>

        </div>
        <div class="clear"></div>
    <? } ?>
<? } else { ?>
    <p>Данных нет</p>
<? } ?>

<?php include($this->partialPath . '/pagination.php');?>
