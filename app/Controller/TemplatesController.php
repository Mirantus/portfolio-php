<?php
    namespace app\Controller;

    use core\Controller;
    use app\Model\Templates;

    class TemplatesController extends Controller {
        public function items() {
            $items_query_params = $this->paginate();
            $items_query_params['orderBy'] = 'date desc';

            $this->render([
                'vars' => [
                    'items' => Templates::find($items_query_params),
                    'count_pages' => $this->countPages(Templates::count()),
                ]
            ]);
        }
    }