<?php

namespace App\Generated\Entity;

use App\Generated\Repository\SectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SectionRepository::class)]
class Section
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    #[ORM\Column(type: 'string', length: 255)]
    private $templateId;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $title;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $text;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $image;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $placeHolder;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $buttonTitle;

    #[ORM\ManyToMany(targetEntity: SubSection::class, inversedBy: 'sections')]
    private $subSections;

    #[ORM\ManyToMany(targetEntity: SocialMediaLink::class, inversedBy: 'sections')]
    private $socialMediaLinks;

    #[ORM\ManyToMany(targetEntity: PageView::class, mappedBy: 'sections')]
    private $pageViews;

    public function __construct()
    {
        $this->subSections = new ArrayCollection();
        $this->socialMediaLinks = new ArrayCollection();
        $this->pageViews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }

    public function setTemplateId(string $templateId): self
    {
        $this->templateId = $templateId;

        return $this;
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPlaceHolder(): ?string
    {
        return $this->placeHolder;
    }

    public function setPlaceHolder(?string $placeHolder): self
    {
        $this->placeHolder = $placeHolder;

        return $this;
    }

    public function getButtonTitle(): ?string
    {
        return $this->buttonTitle;
    }

    public function setButtonTitle(?string $buttonTitle): self
    {
        $this->buttonTitle = $buttonTitle;

        return $this;
    }

    /**
     * @return Collection<int, SubSection>
     */
    public function getSubSections(): Collection
    {
        return $this->subSections;
    }

    public function addSubSection(SubSection $subSection): self
    {
        if (!$this->subSections->contains($subSection)) {
            $this->subSections[] = $subSection;
        }

        return $this;
    }

    public function removeSubSection(SubSection $subSection): self
    {
        $this->subSections->removeElement($subSection);

        return $this;
    }

    /**
     * @return Collection<int, SocialMediaLink>
     */
    public function getSocialMediaLinks(): Collection
    {
        return $this->socialMediaLinks;
    }

    public function addSocialMediaLink(SocialMediaLink $socialMediaLink): self
    {
        if (!$this->socialMediaLinks->contains($socialMediaLink)) {
            $this->socialMediaLinks[] = $socialMediaLink;
        }

        return $this;
    }

    public function removeSocialMediaLink(SocialMediaLink $socialMediaLink): self
    {
        $this->socialMediaLinks->removeElement($socialMediaLink);

        return $this;
    }

    /**
     * @return Collection<int, PageView>
     */
    public function getPageViews(): Collection
    {
        return $this->pageViews;
    }

    public function addPageView(PageView $pageView): self
    {
        if (!$this->pageViews->contains($pageView)) {
            $this->pageViews[] = $pageView;
            $pageView->addSection($this);
        }

        return $this;
    }

    public function removePageView(PageView $pageView): self
    {
        if ($this->pageViews->removeElement($pageView)) {
            $pageView->removeSection($this);
        }

        return $this;
    }
}
