<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220316224839 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navigation_link ADD position INT NOT NULL');
        $this->addSql('ALTER TABLE section ADD position INT NOT NULL');
        $this->addSql('ALTER TABLE social_media_link ADD position INT NOT NULL');
        $this->addSql('ALTER TABLE sub_section ADD position INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navigation_link DROP position');
        $this->addSql('ALTER TABLE section DROP position');
        $this->addSql('ALTER TABLE social_media_link DROP position');
        $this->addSql('ALTER TABLE sub_section DROP position');
    }
}
