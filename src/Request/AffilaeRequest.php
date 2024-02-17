<?php declare(strict_types=1);

namespace Scraper\ScraperAffilae\Request;

use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestAuthBearer;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(scheme: Scheme::HTTPS, host: 'rest.affilae.com')]
abstract class AffilaeRequest extends ScraperRequest implements RequestAuthBearer
{
    public function __construct(
        private readonly string $auth
    ) {}

    public function getBearer(): string
    {
        return $this->auth;
    }
}
