<?php
    namespace app\Model;

    use core\Model;

    class Sites extends Model {
        /**
         * @var array
         */
        protected static $fields = ['id', 'title', 'url', 'text', 'date', 'admin', 'image', 'works', 'technologies', 'cms', 'rate', 'billing', 'partner'];

        /**
         * @var string
         */
        protected static $table = 'sites';

        /**
         * Returns list of years
         * @return array
         */
        public static function getYears() {
            $db_years = static::find([
                'query' => 'select DISTINCT(EXTRACT(YEAR FROM date)) as Date from ' . static::$table,
                'orderBy' => 'Date desc',
            ]);

            $years = [];
            foreach ($db_years as $db_year) {
                $years[] = $db_year['Date'];
            }
            return $years;
        }
    }