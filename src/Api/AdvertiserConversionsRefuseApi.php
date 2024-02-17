<?php declare(strict_types=1);

namespace Scraper\ScraperAffilae\Api;

class AdvertiserConversionsRefuseApi extends AffilaeApi
{
    public function execute(): bool
    {
        return 200 === $this->response->getStatusCode();
    }
}
