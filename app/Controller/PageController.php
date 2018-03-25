<?php
    namespace app\Controller;

    use core\Controller;

    class PageController extends Controller {
        public function index() {
            $this->render();
        }

        public function ok() {
            $this->render();
        }

        public function notfound() {
            $this->render();
        }
    }