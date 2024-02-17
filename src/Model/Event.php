<?php declare(strict_types=1);

namespace Scraper\ScraperAffilae\Model;

class Event
{
    public ?string $source = null;
    public ?string $kind = null;
    public ?string $id = null;
    public ?Partnership $partnership = null;
    public ?AffiliateProfile $affiliateProfile = null;
    public ?int $percent = null;
    public ?int $commission = null;
    public ?int $commissionConverted = null;
    public ?int $commissionRate = null;
    public ?int $percentOfRevenue = null;
    public ?int $partOfRevenue = null;
    public ?string $createdAt = null;
    public ?Click $click = null;
}
