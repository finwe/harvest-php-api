<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Model;

class Expenses extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var Expense[]
     */
    protected $expenses;
    /**
     * @var int
     */
    protected $perPage;
    /**
     * @var int
     */
    protected $totalPages;
    /**
     * @var int
     */
    protected $totalEntries;
    /**
     * @var int|null
     */
    protected $nextPage;
    /**
     * @var int|null
     */
    protected $previousPage;
    /**
     * @var int
     */
    protected $page;
    /**
     * @var PaginationLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return Expense[]
     */
    public function getExpenses(): array
    {
        return $this->expenses;
    }

    /**
     * @param Expense[] $expenses
     */
    public function setExpenses(array $expenses): self
    {
        $this->initialized['expenses'] = true;
        $this->expenses = $expenses;

        return $this;
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }

    public function setPerPage(int $perPage): self
    {
        $this->initialized['perPage'] = true;
        $this->perPage = $perPage;

        return $this;
    }

    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    public function setTotalPages(int $totalPages): self
    {
        $this->initialized['totalPages'] = true;
        $this->totalPages = $totalPages;

        return $this;
    }

    public function getTotalEntries(): int
    {
        return $this->totalEntries;
    }

    public function setTotalEntries(int $totalEntries): self
    {
        $this->initialized['totalEntries'] = true;
        $this->totalEntries = $totalEntries;

        return $this;
    }

    public function getNextPage(): ?int
    {
        return $this->nextPage;
    }

    public function setNextPage(?int $nextPage): self
    {
        $this->initialized['nextPage'] = true;
        $this->nextPage = $nextPage;

        return $this;
    }

    public function getPreviousPage(): ?int
    {
        return $this->previousPage;
    }

    public function setPreviousPage(?int $previousPage): self
    {
        $this->initialized['previousPage'] = true;
        $this->previousPage = $previousPage;

        return $this;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    public function getLinks(): PaginationLinks
    {
        return $this->links;
    }

    public function setLinks(PaginationLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
