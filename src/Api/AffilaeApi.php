<?php declare(strict_types=1);

namespace Scraper\ScraperAffilae\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperAffilae\Request\AffilaeRequest;

abstract class AffilaeApi extends AbstractApi
{
    protected AffilaeRequest|ScraperRequest $request;
}
