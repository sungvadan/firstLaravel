<?php
declare(strict_types=1);

namespace App\Services;

class Twitter
{

    /**
     * @var string
     */
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }
}
