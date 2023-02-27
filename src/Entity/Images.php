<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagesRepository::class)]
class Images
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Path = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $Created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $Updated_at = null;

    #[ORM\Column(length: 255)]
    private ?string $Slug = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->Path;
    }

    public function setPath(?string $Path): self
    {
        $this->Path = $Path;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->Created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $Created_at): self
    {
        $this->Created_at = $Created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->Updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $Updated_at): self
    {
        $this->Updated_at = $Updated_at;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->Slug;
    }

    public function setSlug(string $Slug): self
    {
        $this->Slug = $Slug;

        return $this;
    }
}
