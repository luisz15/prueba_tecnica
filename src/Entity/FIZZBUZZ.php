<?php

namespace App\Entity;

use App\Repository\FIZZBUZZRepository;
use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FIZZBUZZRepository::class)]
class FIZZBUZZ
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $STARTING_NUMBER = null;

    #[ORM\Column]
    private ?int $ENDING_NUMBER = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $CREATION_DATE = null;

    #[ORM\Column(length: 10000)]
    private ?string $FIZZBUZZ = null;

    public function __construct()
    {
        $this -> CREATION_DATE = new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSTARTINGNUMBER(): ?int
    {
        return $this->STARTING_NUMBER;
    }

    public function setSTARTINGNUMBER(int $STARTING_NUMBER): self
    {
        $this->STARTING_NUMBER = $STARTING_NUMBER;

        return $this;
    }

    public function getENDINGNUMBER(): ?int
    {
        return $this->ENDING_NUMBER;
    }

    public function setENDINGNUMBER(int $ENDING_NUMBER): self
    {
        $this->ENDING_NUMBER = $ENDING_NUMBER;

        return $this;
    }

    public function getCREATIONDATE(): ?\DateTimeInterface
    {
        return $this->CREATION_DATE;
    }

    public function setCREATIONDATE(\DateTimeInterface $CREATION_DATE): self
    {
        $this->CREATION_DATE = $CREATION_DATE;

        return $this;
    }

    public function getFIZZBUZZ(): ?string
    {
        return $this->FIZZBUZZ;
    }

    public function setFIZZBUZZ(string $FIZZBUZZ): self
    {
        $this->FIZZBUZZ = $FIZZBUZZ;

        return $this;
    }
}
