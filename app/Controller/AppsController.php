<?php
    namespace app\Controller;

    use core\Controller;
    use app\Model\Apps;

    class AppsController extends Controller {
        public function items($year) {
            $years = Apps::getYears();
            if ($year === '') {
                $year = $years[0];
            }

            $this->render([
                'vars' => [
                    'items' => Apps::find([
                        'where' => 'YEAR(date) = :year',
                        'orderBy' => 'id desc'
                    ], ['year' => $year]),
                    'year' => $year,
                    'years' => $years,
                ],
                'view' => 'Apps/items'
            ]);
        }
    }