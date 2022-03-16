<?php

namespace App\Generated\Entity;

use App\Generated\Repository\SubSectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubSectionRepository::class)]
class SubSection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $title;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $text;

    #[ORM\Column(type: 'boolean')]
    private $isLink;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $image;

    #[ORM\Column(type: 'boolean')]
    private $imageAlignLeft;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $icon;

    #[ORM\ManyToMany(targetEntity: Section::class, mappedBy: 'subSections')]
    private $sections;

    public function __construct()
    {
        $this->sections = new ArrayCollection();
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getIsLink(): ?bool
    {
        return $this->isLink;
    }

    public function setIsLink(bool $isLink): self
    {
        $this->isLink = $isLink;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getImageAlignLeft(): ?bool
    {
        return $this->imageAlignLeft;
    }

    public function setImageAlignLeft(bool $imageAlignLeft): self
    {
        $this->imageAlignLeft = $imageAlignLeft;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return Collection<int, Section>
     */
    public function getSections(): Collection
    {
        return $this->sections;
    }

    public function addSection(Section $section): self
    {
        if (!$this->sections->contains($section)) {
            $this->sections[] = $section;
            $section->addSubSection($this);
        }

        return $this;
    }

    public function removeSection(Section $section): self
    {
        if ($this->sections->removeElement($section)) {
            $section->removeSubSection($this);
        }

        return $this;
    }

}
