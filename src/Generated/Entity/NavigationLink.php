<?php

namespace App\Generated\Entity;

use App\Generated\Repository\NavigationLinkRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NavigationLinkRepository::class)]
class NavigationLink
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $link;

    #[ORM\Column(type: 'string', length: 255)]
    private $displayName;

    #[ORM\ManyToMany(targetEntity: Navigation::class, mappedBy: 'navigationLinks')]
    private $navigations;

    #[ORM\Column(type: 'integer')]
    private $position;

    public function __construct()
    {
        $this->navigations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return Collection<int, Navigation>
     */
    public function getNavigations(): Collection
    {
        return $this->navigations;
    }

    public function addNavigation(Navigation $navigation): self
    {
        if (!$this->navigations->contains($navigation)) {
            $this->navigations[] = $navigation;
            $navigation->addNavigationLink($this);
        }

        return $this;
    }

    public function removeNavigation(Navigation $navigation): self
    {
        if ($this->navigations->removeElement($navigation)) {
            $navigation->removeNavigationLink($this);
        }

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }
}
