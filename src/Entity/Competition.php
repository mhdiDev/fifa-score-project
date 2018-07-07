<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompetitionRepository")
 */
class Competition
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CompetitionType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $competitionTypeId;

    public function getId()
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getCompetitionTypeId(): ?CompetitionType
    {
        return $this->competitionTypeId;
    }

    public function setCompetitionTypeId(?CompetitionType $competitionTypeId): self
    {
        $this->competitionTypeId = $competitionTypeId;

        return $this;
    }
}
