<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestaurantRepository::class)]
class Restaurant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 32)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $openingTimeAm = [];

    #[ORM\Column(type: Types::ARRAY)]
    private array $openingTimePm = [];

    #[ORM\Column]
    private ?int $guest = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getOpeningTimeAm(): array
    {
        return $this->openingTimeAm;
    }

    public function setOpeningTimeAm(array $openingTimeAm): static
    {
        $this->openingTimeAm = $openingTimeAm;

        return $this;
    }

    public function getOpeningTimePm(): array
    {
        return $this->openingTimePm;
    }

    public function setOpeningTimePm(array $openingTimePm): static
    {
        $this->openingTimePm = $openingTimePm;

        return $this;
    }

    public function getGuest(): ?int
    {
        return $this->guest;
    }

    public function setGuest(int $guest): static
    {
        $this->guest = $guest;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
