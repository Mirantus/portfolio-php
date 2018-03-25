<?php
    namespace app\Controller;

    use core\Controller;
    use app\Model\Skins;

    class SkinsController extends Controller {
        public function items() {
            $items_query_params = $this->paginate();
            $items_query_params['orderBy'] = 'date desc';

            $this->render([
                'vars' => [
                    'items' => Skins::find($items_query_params),
                    'count_pages' => $this->countPages(Skins::count()),
                ]
            ]);
        }
    }