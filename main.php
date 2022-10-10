<?php

    namespace Agritrack{

        class AgritrackRequirements
        {

            const ROOT = '/var/www/agritrack/';

            public static function startDatabaseTransaction()
            {



            }

        }

        class DatabaseRequirements
        {

            const SECRET_FILE = "/etc/agritrack/database.json";

            public static function getUsername()
            {
                return json_decode(file_get_contents(self::SECRET_FILE), true)['username'];
            }

            private function showUsername()
            {
                printf(json_decode(file_get_contents(self::SECRET_FILE), true));
            }

            public static function getPassword()
            {
                return json_decode(file_get_contents(self::SECRET_FILE), true)['password'];
            }

            public static function getDatabase()
            {
                
            }

            public function getHost()
            {

            }

        }

    }

?>