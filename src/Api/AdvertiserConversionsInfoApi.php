<?php declare(strict_types=1);

namespace Scraper\ScraperAffilae\Api;

use Scraper\ScraperAffilae\Model\Response;

class AdvertiserConversionsInfoApi extends AffilaeApi
{
    public function execute(): Response
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            Response::class,
            'json'
        );
    }
}
