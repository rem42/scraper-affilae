<?php declare(strict_types=1);

namespace Scraper\ScraperAffilae\Request;

use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestQuery;

#[Scraper(path: '/advertiser/conversions.info')]
class AdvertiserConversionsInfoRequest extends AffilaeRequest implements RequestQuery
{
    public function __construct(
        string $auth,
        private readonly string $program,
        private readonly string $externalId
    ) {
        parent::__construct($auth);
    }

    public function getQuery(): array
    {
        return [
            'program' => $this->program,
            'externalId' => $this->externalId,
        ];
    }
}
