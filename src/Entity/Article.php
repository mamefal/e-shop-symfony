<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?color $color = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?size $size = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?reference $reference = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColor(): ?color
    {
        return $this->color;
    }

    public function setColor(?color $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getSize(): ?size
    {
        return $this->size;
    }

    public function setSize(?size $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getReference(): ?reference
    {
        return $this->reference;
    }

    public function setReference(?reference $reference): self
    {
        $this->reference = $reference;

        return $this;
    }
}
