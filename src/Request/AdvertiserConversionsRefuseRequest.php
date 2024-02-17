<?php declare(strict_types=1);

namespace Scraper\ScraperAffilae\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBody;

#[Scraper(method: Method::POST, path: '/advertiser/conversions.refuse')]
class AdvertiserConversionsRefuseRequest extends AffilaeRequest implements RequestBody
{
    public function __construct(
        string $auth,
        private readonly string $program,
        private readonly string $id,
        private readonly string $reason,
    ) {
        parent::__construct($auth);
    }

    public function getBody(): array
    {
        return [
            'program' => $this->program,
            'id' => $this->id,
            'reason' => $this->reason,
        ];
    }
}
