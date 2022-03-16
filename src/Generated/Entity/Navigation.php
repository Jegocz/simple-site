<?php

namespace App\Generated\Entity;

use App\Generated\Repository\NavigationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NavigationRepository::class)]
class Navigation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $textLeft;

    #[ORM\Column(type: 'string', length: 255)]
    private $menuTitle;

    #[ORM\ManyToMany(targetEntity: NavigationLink::class, inversedBy: 'navigations')]
    private $navigationLinks;

    public function __construct()
    {
        $this->navigationLinks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTextLeft(): ?string
    {
        return $this->textLeft;
    }

    public function setTextLeft(?string $textLeft): self
    {
        $this->textLeft = $textLeft;

        return $this;
    }

    public function getMenuTitle(): ?string
    {
        return $this->menuTitle;
    }

    public function setMenuTitle(string $menuTitle): self
    {
        $this->menuTitle = $menuTitle;

        return $this;
    }

    /**
     * @return Collection<int, NavigationLink>
     */
    public function getNavigationLinks(): Collection
    {
        return $this->navigationLinks;
    }

    public function addNavigationLink(NavigationLink $navigationLink): self
    {
        if (!$this->navigationLinks->contains($navigationLink)) {
            $this->navigationLinks[] = $navigationLink;
        }

        return $this;
    }

    public function removeNavigationLink(NavigationLink $navigationLink): self
    {
        $this->navigationLinks->removeElement($navigationLink);

        return $this;
    }
}
