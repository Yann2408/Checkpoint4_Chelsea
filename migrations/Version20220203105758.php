<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220203105758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, gardien_id INT DEFAULT NULL, defenseur1_id INT DEFAULT NULL, defenseur2_id INT DEFAULT NULL, defenseur3_id INT DEFAULT NULL, defenseur4_id INT DEFAULT NULL, defenseur5_id INT DEFAULT NULL, milieu1_id INT DEFAULT NULL, milieu2_id INT DEFAULT NULL, milieu3_id INT DEFAULT NULL, milieu4_id INT DEFAULT NULL, milieu5_id INT DEFAULT NULL, attaquant1_id INT DEFAULT NULL, attaquant2_id INT DEFAULT NULL, attaquant3_id INT DEFAULT NULL, remplacant1_id INT DEFAULT NULL, remplacant2_id INT DEFAULT NULL, remplacant3_id INT DEFAULT NULL, remplacant4_id INT DEFAULT NULL, remplacant5_id INT DEFAULT NULL, remplacant6_id INT DEFAULT NULL, remplacant7_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_C4E0A61F36F5263E (gardien_id), UNIQUE INDEX UNIQ_C4E0A61F98FA7D21 (defenseur1_id), UNIQUE INDEX UNIQ_C4E0A61F8A4FD2CF (defenseur2_id), UNIQUE INDEX UNIQ_C4E0A61F32F3B5AA (defenseur3_id), UNIQUE INDEX UNIQ_C4E0A61FAF248D13 (defenseur4_id), UNIQUE INDEX UNIQ_C4E0A61F1798EA76 (defenseur5_id), UNIQUE INDEX UNIQ_C4E0A61F16A51E3B (milieu1_id), UNIQUE INDEX UNIQ_C4E0A61F410B1D5 (milieu2_id), UNIQUE INDEX UNIQ_C4E0A61FBCACD6B0 (milieu3_id), UNIQUE INDEX UNIQ_C4E0A61F217BEE09 (milieu4_id), UNIQUE INDEX UNIQ_C4E0A61F99C7896C (milieu5_id), UNIQUE INDEX UNIQ_C4E0A61F4A11151D (attaquant1_id), UNIQUE INDEX UNIQ_C4E0A61F58A4BAF3 (attaquant2_id), UNIQUE INDEX UNIQ_C4E0A61FE018DD96 (attaquant3_id), UNIQUE INDEX UNIQ_C4E0A61F9DE462A4 (remplacant1_id), UNIQUE INDEX UNIQ_C4E0A61F8F51CD4A (remplacant2_id), UNIQUE INDEX UNIQ_C4E0A61F37EDAA2F (remplacant3_id), UNIQUE INDEX UNIQ_C4E0A61FAA3A9296 (remplacant4_id), UNIQUE INDEX UNIQ_C4E0A61F1286F5F3 (remplacant5_id), UNIQUE INDEX UNIQ_C4E0A61F335A1D (remplacant6_id), UNIQUE INDEX UNIQ_C4E0A61FB88F3D78 (remplacant7_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F36F5263E FOREIGN KEY (gardien_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F98FA7D21 FOREIGN KEY (defenseur1_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F8A4FD2CF FOREIGN KEY (defenseur2_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F32F3B5AA FOREIGN KEY (defenseur3_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61FAF248D13 FOREIGN KEY (defenseur4_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F1798EA76 FOREIGN KEY (defenseur5_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F16A51E3B FOREIGN KEY (milieu1_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F410B1D5 FOREIGN KEY (milieu2_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61FBCACD6B0 FOREIGN KEY (milieu3_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F217BEE09 FOREIGN KEY (milieu4_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F99C7896C FOREIGN KEY (milieu5_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F4A11151D FOREIGN KEY (attaquant1_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F58A4BAF3 FOREIGN KEY (attaquant2_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61FE018DD96 FOREIGN KEY (attaquant3_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F9DE462A4 FOREIGN KEY (remplacant1_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F8F51CD4A FOREIGN KEY (remplacant2_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F37EDAA2F FOREIGN KEY (remplacant3_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61FAA3A9296 FOREIGN KEY (remplacant4_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F1286F5F3 FOREIGN KEY (remplacant5_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F335A1D FOREIGN KEY (remplacant6_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61FB88F3D78 FOREIGN KEY (remplacant7_id) REFERENCES joueur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE team');
        $this->addSql('ALTER TABLE atelier CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE categorie categorie VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE calendar CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE background_color background_color VARCHAR(7) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE text_color text_color VARCHAR(7) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE joueur CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nationalite nationalite VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE poste poste VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE statut statut VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
