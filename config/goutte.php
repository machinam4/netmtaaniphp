<?php

return [

    /*
     |-----------------------------------------------------------------------
     | Symfony Http Client Configuration
     |-----------------------------------------------------------------------
     |
     | A collection of default request options to apply to each request
     | dispatched by the Symfony Http Client.
     |
     | @see {@link https://symfony.com/doc/current/http_client.html}
     */

    'client' => [
        'max_redirects' => 60,
        'headers' => [
            'Content-Type' => 'text/plain',
            'User-Agent' => "Mozilla/5.0 (Windows NT 10.0; rv:91.0) Gecko/20100101 Firefox/91.0",
            'Accept'  => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
            
        ],
    ],
];
