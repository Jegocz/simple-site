<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220315221755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE header (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mast_head (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, sub_title VARCHAR(255) DEFAULT NULL, link VARCHAR(255) DEFAULT NULL, button_title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE navigation (id INT AUTO_INCREMENT NOT NULL, text_left VARCHAR(255) DEFAULT NULL, menu_title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE navigation_navigation_link (navigation_id INT NOT NULL, navigation_link_id INT NOT NULL, INDEX IDX_F707B99739F79D6D (navigation_id), INDEX IDX_F707B997EB260C02 (navigation_link_id), PRIMARY KEY(navigation_id, navigation_link_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE navigation_link (id INT AUTO_INCREMENT NOT NULL, link VARCHAR(255) NOT NULL, display_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page_view (id INT AUTO_INCREMENT NOT NULL, header_id INT NOT NULL, navigation_id INT NOT NULL, mast_head_id INT NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_7939B7545E237E06 (name), UNIQUE INDEX UNIQ_7939B7542EF91FD8 (header_id), UNIQUE INDEX UNIQ_7939B75439F79D6D (navigation_id), UNIQUE INDEX UNIQ_7939B75493311B9 (mast_head_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page_view_section (page_view_id INT NOT NULL, section_id INT NOT NULL, INDEX IDX_BA32C35BF975F352 (page_view_id), INDEX IDX_BA32C35BD823E37A (section_id), PRIMARY KEY(page_view_id, section_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE section (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, template_id VARCHAR(255) NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, place_holder VARCHAR(255) DEFAULT NULL, button_title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE section_sub_section (section_id INT NOT NULL, sub_section_id INT NOT NULL, INDEX IDX_445A5964D823E37A (section_id), INDEX IDX_445A5964F4E870B7 (sub_section_id), PRIMARY KEY(section_id, sub_section_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE section_social_media_link (section_id INT NOT NULL, social_media_link_id INT NOT NULL, INDEX IDX_9C3F92EAD823E37A (section_id), INDEX IDX_9C3F92EA7AC90AAC (social_media_link_id), PRIMARY KEY(section_id, social_media_link_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE social_media_link (id INT AUTO_INCREMENT NOT NULL, link VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sub_section (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(255) DEFAULT NULL, is_link TINYINT(1) NOT NULL, image VARCHAR(255) DEFAULT NULL, image_align_left TINYINT(1) NOT NULL, icon VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE navigation_navigation_link ADD CONSTRAINT FK_F707B99739F79D6D FOREIGN KEY (navigation_id) REFERENCES navigation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE navigation_navigation_link ADD CONSTRAINT FK_F707B997EB260C02 FOREIGN KEY (navigation_link_id) REFERENCES navigation_link (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE page_view ADD CONSTRAINT FK_7939B7542EF91FD8 FOREIGN KEY (header_id) REFERENCES header (id)');
        $this->addSql('ALTER TABLE page_view ADD CONSTRAINT FK_7939B75439F79D6D FOREIGN KEY (navigation_id) REFERENCES navigation (id)');
        $this->addSql('ALTER TABLE page_view ADD CONSTRAINT FK_7939B75493311B9 FOREIGN KEY (mast_head_id) REFERENCES mast_head (id)');
        $this->addSql('ALTER TABLE page_view_section ADD CONSTRAINT FK_BA32C35BF975F352 FOREIGN KEY (page_view_id) REFERENCES page_view (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE page_view_section ADD CONSTRAINT FK_BA32C35BD823E37A FOREIGN KEY (section_id) REFERENCES section (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE section_sub_section ADD CONSTRAINT FK_445A5964D823E37A FOREIGN KEY (section_id) REFERENCES section (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE section_sub_section ADD CONSTRAINT FK_445A5964F4E870B7 FOREIGN KEY (sub_section_id) REFERENCES sub_section (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE section_social_media_link ADD CONSTRAINT FK_9C3F92EAD823E37A FOREIGN KEY (section_id) REFERENCES section (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE section_social_media_link ADD CONSTRAINT FK_9C3F92EA7AC90AAC FOREIGN KEY (social_media_link_id) REFERENCES social_media_link (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page_view DROP FOREIGN KEY FK_7939B7542EF91FD8');
        $this->addSql('ALTER TABLE page_view DROP FOREIGN KEY FK_7939B75493311B9');
        $this->addSql('ALTER TABLE navigation_navigation_link DROP FOREIGN KEY FK_F707B99739F79D6D');
        $this->addSql('ALTER TABLE page_view DROP FOREIGN KEY FK_7939B75439F79D6D');
        $this->addSql('ALTER TABLE navigation_navigation_link DROP FOREIGN KEY FK_F707B997EB260C02');
        $this->addSql('ALTER TABLE page_view_section DROP FOREIGN KEY FK_BA32C35BF975F352');
        $this->addSql('ALTER TABLE page_view_section DROP FOREIGN KEY FK_BA32C35BD823E37A');
        $this->addSql('ALTER TABLE section_sub_section DROP FOREIGN KEY FK_445A5964D823E37A');
        $this->addSql('ALTER TABLE section_social_media_link DROP FOREIGN KEY FK_9C3F92EAD823E37A');
        $this->addSql('ALTER TABLE section_social_media_link DROP FOREIGN KEY FK_9C3F92EA7AC90AAC');
        $this->addSql('ALTER TABLE section_sub_section DROP FOREIGN KEY FK_445A5964F4E870B7');
        $this->addSql('DROP TABLE header');
        $this->addSql('DROP TABLE mast_head');
        $this->addSql('DROP TABLE navigation');
        $this->addSql('DROP TABLE navigation_navigation_link');
        $this->addSql('DROP TABLE navigation_link');
        $this->addSql('DROP TABLE page_view');
        $this->addSql('DROP TABLE page_view_section');
        $this->addSql('DROP TABLE section');
        $this->addSql('DROP TABLE section_sub_section');
        $this->addSql('DROP TABLE section_social_media_link');
        $this->addSql('DROP TABLE social_media_link');
        $this->addSql('DROP TABLE sub_section');
    }
}
