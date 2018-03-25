<?php
    namespace app\Controller;

    use core\Controller;
    use app\Model\Sites;

    class SitesController extends Controller {
        public function items($year) {
            $years = Sites::getYears();
            if ($year === '') {
                $year = $years[0];
            }

            $this->render([
                'vars' => [
                    'items' => Sites::find([
                        'where' => 'YEAR(date) = :year',
                        'orderBy' => 'id desc'
                    ], ['year' => $year]),
                    'year' => $year,
                    'years' => $years,
                ],
                'view' => 'Sites/items'
            ]);
        }
    }