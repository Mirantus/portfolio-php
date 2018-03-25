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
        foreach ($items as $item)
        {
            echo '<div class="image-block">';
            if ($item['image'] != '')
                echo '<a href="/data/sites/' . $item['image'] . '" rel="lightbox"><img src="/data/sites/s_' . $item['image'] . '" alt="' . $item['title'] . '"></a>';
            echo '</div><div class="description-block">';
            echo '<h3>' . $item['title'] . '</h3>';
            echo '<p>';
            if ($item['text'] != '') echo $item['text'];
            echo '</p><p>Моя работа: ' . $item['works'];

            if (!empty($item['technologies'])) {
                echo '</p><p>Использованные технологии: ' . $item['technologies'];
            }

            if ($item['cms'] != '')
            {
                echo '<br>Движок сайта: ';
                switch ($item['cms'])
                {
                    case 'ms': echo 'собственный'; break;
                    default: echo $item['cms'];
                }
            }

            echo '</p>';
            $works = array();
            if ($item['admin'] == 1) $works[] = 'модуль администрирования';
            if ($item['partner'] == 1) $works[] = 'партнерскую программу';
            if ($item['billing'] == 1) $works[] = 'систему оплаты';
            $works = implode($works, ', ');
            if ($works != '') echo '<p>Сайт имеет ' . $works . '</p>';
            if ($item['url'] != '') echo '<p><a href="' . $item['url'] . '">' . $item['url'] . '</a><br></p>';
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
