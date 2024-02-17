<?php declare(strict_types=1);

namespace Scraper\ScraperAffilae\Model;

class Conversions
{
    public ?int $total = null;
    /** @var array<int, Conversion> */
    public array $data = [];

    public function addData(Conversion $data): self
    {
        $this->data[] = $data;
        return $this;
    }
}
