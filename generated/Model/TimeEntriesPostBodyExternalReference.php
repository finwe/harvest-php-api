<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Model;

class TimeEntriesPostBodyExternalReference
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $groupId;
    /**
     * @var string
     */
    protected $permalink;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    /**
     * @param string $groupId
     *
     * @return self
     */
    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPermalink(): ?string
    {
        return $this->permalink;
    }

    /**
     * @param string $permalink
     *
     * @return self
     */
    public function setPermalink(?string $permalink): self
    {
        $this->permalink = $permalink;

        return $this;
    }
}
