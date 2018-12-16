<?php

namespace App\Dto;

/**
 * Data transfer object for Post entity.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
final class Post
{
    private $image;
    private $description;
    private $publicationDate;

    public function __construct(string $description, \DateTimeInterface $publicationDate)
    {
        $this->description = $description;
        $this->publicationDate = $publicationDate;
    }

    public function setImage(string $src): void
    {
        $this->image = $src;
    }

    public function getImage(): string
    {
        return $this->image ?? 'default.png';
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPublicationDate(): \DateTimeInterface
    {
        return $this->publicationDate;
    }
}
