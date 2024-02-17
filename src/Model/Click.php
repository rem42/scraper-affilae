<?php declare(strict_types=1);

namespace Scraper\ScraperAffilae\Model;

class Click
{
    public ?string $id = null;
    public ?int $cpc = null;
    public ?string $currency = null;
    public ?string $referrer = null;
    public ?string $landingPage = null;
    public $subId;
}
