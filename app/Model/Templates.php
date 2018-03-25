<?php
    namespace app\Model;

    use core\Model;

    class Templates extends Model {
        /**
         * @var array
         */
        protected static $fields = ['id', 'title', 'text', 'date', 'image', 'cms', 'user'];

        /**
         * @var string
         */
        protected static $table = 'templates';
    }