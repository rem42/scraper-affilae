<?php declare(strict_types=1);

namespace Scraper\ScraperAffilae\Model;

class Conversion
{
    public ?string $id = null;
    public ?string $advertiser = null;
    public ?Program $program = null;
    public ?Rule $rule = null;
    public ?string $externalId = null;
    public ?int $amount = null;
    public ?string $payoutKind = null;
    public ?int $commissionsTotal = null;
    public ?int $commissionsTotalConverted = null;
    public ?int $exchangeRate = null;
    public ?string $paymentMethod = null;
    public ?string $ipAddress = null;
    public ?string $ua = null;
    public ?string $attribution = null;
    public ?string $currency = null;
    public ?string $trackingMethod = null;
    public ?string $subId = null;
    public ?string $status = null;
    public $refuseReason;
    public ?string $lockedAt = null;
    public ?bool $isLocked = null;
    public $isCapped;
    public ?string $customerId = null;
    public ?bool $revenueShare = null;
    public ?string $createdAt = null;
    public ?string $firstEventAt = null;
    public ?string $lastEventAt = null;
    public $isVoucherBlacklisted;
    /** @var array<int, Event> */
    public array $events = [];

    public function addEvent(Event $event): self
    {
        $this->events[] = $event;
        return $this;
    }
}
