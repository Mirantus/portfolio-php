<?php
    namespace app\Controller;

    use core\Controller;
    use app\Model\SitesItem;

    class SitesController extends Controller {
        public function items($year) {
            $years = SitesItem::getYears();
            if ($year === '') {
                $year = $years[0];
            }

            $this->render([
                'vars' => [
                    'items' => SitesItem::find(['where' => 'YEAR(date) = :year'], ['year' => $year]),
                    'year' => $year,
                    'years' => $years,
                ],
                'view' => 'Sites/items'
            ]);
        }
    }