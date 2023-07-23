<?php

namespace App\Entity;

use App\Repository\CardSetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CardSetRepository::class)]
class CardSet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::GUID)]
    private ?string $scryfallId = null;

    #[ORM\Column(type: Types::ASCII_STRING)]
    private $code = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $name = null;

    #[ORM\Column(length: 1024)]
    private ?string $iconUri = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScryfallId(): ?string
    {
        return $this->scryfallId;
    }

    public function setScryfallId(string $scryfallId): static
    {
        $this->scryfallId = $scryfallId;

        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
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

    public function getIconUri(): ?string
    {
        return $this->iconUri;
    }

    public function setIconUri(string $iconUri): static
    {
        $this->iconUri = $iconUri;

        return $this;
    }
}
