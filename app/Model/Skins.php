<?php
    namespace app\Model;

    use core\Model;

    class Skins extends Model {
        /**
         * @var array
         */
        protected static $fields = ['id', 'title', 'text', 'date', 'url', 'image', 'cms', 'user'];

        /**
         * @var string
         */
        protected static $table = 'skins';
    }