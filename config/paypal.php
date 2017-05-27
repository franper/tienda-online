<?php
return array(
    // set your paypal credential
    'client_id' => 'AS6W4mGVLcHMe6gRzA_Q5_AAurZ_4F9mg2C-BE9-Zo8aa_UCVh3MCi69EojytynKg2DSWSmwGmIrEok2',
    'secret' => 'ELoCmWbN43zt0R1jX7Y4W7b1SKo9EsSiE0uC7w8kL1xg1VXmQgKYR1cX993ngy-sYTF88wKXO76djPGW',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);