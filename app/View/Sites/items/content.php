<?php
    /**
     * @var core\View $this
     * @var array $items
     * @var array $years
     * @var string $year
     */
?>
<h2>Сайты</h2>

<?
    if ($items)
    {
        foreach ($items as $item_id => $item_params)
        {
            echo '<div class="image-block">';
            if ($item_params['image'] != '')
                echo '<a href="/data/sites/' . $item_params['image'] . '" rel="lightbox"><img src="/data/sites/s_' . $item_params['image'] . '" alt="' . $item_params['title'] . '"></a>';
            echo '</div><div class="description-block">';
            echo '<h3>' . $item_params['title'] . '</h3>';
            echo '<p>';
            if ($item_params['text'] != '') echo $item_params['text'];
            echo '</p><p>Моя работа: ' . $item_params['works'];

            if (!empty($item_params['technologies'])) {
                echo '</p><p>Использованные технологии: ' . $item_params['technologies'];
            }

            if ($item_params['cms'] != '')
            {
                echo '<br>Движок сайта: ';
                switch ($item_params['cms'])
                {
                    case 'ms': echo 'собственный'; break;
                    default: echo $item_params['cms'];
                }
            }

            echo '</p>';
            $works = array();
            if ($item_params['admin'] == 1) $works[] = 'модуль администрирования';
            if ($item_params['partner'] == 1) $works[] = 'партнерскую программу';
            if ($item_params['billing'] == 1) $works[] = 'систему оплаты';
            $works = implode($works, ', ');
            if ($works != '') echo '<p>Сайт имеет ' . $works . '</p>';
            if ($item_params['url'] != '') echo '<p><a href="' . $item_params['url'] . '">' . $item_params['url'] . '</a><br></p>';
            echo '</div><div class="clear"></div>';
        }
    }
    else echo '<li>Данных нет</li>';
?>
<ul class="pager">
    <?
        foreach ($years as $years_item) {
            $isActive = $years_item == $year;
            $page_url = '/sites/' . $years_item . '/';
            echo '<li>';
            echo lib\Url::createLink($page_url, $years_item, $isActive);
            echo '</li>';
        }
    ?>
</ul>
