<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220203104619 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE attaquant1');
        $this->addSql('DROP TABLE attaquant2');
        $this->addSql('DROP TABLE attaquant3');
        $this->addSql('DROP TABLE defenseur1');
        $this->addSql('DROP TABLE defenseur2');
        $this->addSql('DROP TABLE defenseur3');
        $this->addSql('DROP TABLE defenseur4');
        $this->addSql('DROP TABLE defenseur5');
        $this->addSql('DROP TABLE gardien');
        $this->addSql('DROP TABLE milieu1');
        $this->addSql('DROP TABLE milieu2');
        $this->addSql('DROP TABLE milieu3');
        $this->addSql('DROP TABLE milieu4');
        $this->addSql('DROP TABLE milieu5');
        $this->addSql('DROP TABLE remplacant1');
        $this->addSql('DROP TABLE remplacant2');
        $this->addSql('DROP TABLE remplacant3');
        $this->addSql('DROP TABLE remplacant4');
        $this->addSql('DROP TABLE remplacant5');
        $this->addSql('DROP TABLE remplacant6');
        $this->addSql('DROP TABLE remplacant7');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE attaquant1 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_5F2936853D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE attaquant2 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_C620673F3D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE attaquant3 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_B12757A93D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE defenseur1 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_7CE180183D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE defenseur2 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_E5E8D1A23D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE defenseur3 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_92EFE1343D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE defenseur4 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_C8B74973D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE defenseur5 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_7B8C44013D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE gardien (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_D20581033D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE milieu1 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_F900A4E3D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE milieu2 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_96995BF43D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE milieu3 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_E19E6B623D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE milieu4 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_7FFAFEC13D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE milieu5 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_8FDCE573D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE remplacant1 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_71095FFE3D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE remplacant2 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_E8000E443D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE remplacant3 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_9F073ED23D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE remplacant4 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_163AB713D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE remplacant5 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_76649BE73D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE remplacant6 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_EF6DCA5D3D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE remplacant7 (id INT AUTO_INCREMENT NOT NULL, nom_joueur_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_986AFACB3D13A62D (nom_joueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE attaquant1 ADD CONSTRAINT FK_5F2936853D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE attaquant2 ADD CONSTRAINT FK_C620673F3D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE attaquant3 ADD CONSTRAINT FK_B12757A93D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE defenseur1 ADD CONSTRAINT FK_7CE180183D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE defenseur2 ADD CONSTRAINT FK_E5E8D1A23D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE defenseur3 ADD CONSTRAINT FK_92EFE1343D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE defenseur4 ADD CONSTRAINT FK_C8B74973D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE defenseur5 ADD CONSTRAINT FK_7B8C44013D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE gardien ADD CONSTRAINT FK_D20581033D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE milieu1 ADD CONSTRAINT FK_F900A4E3D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE milieu2 ADD CONSTRAINT FK_96995BF43D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE milieu3 ADD CONSTRAINT FK_E19E6B623D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE milieu4 ADD CONSTRAINT FK_7FFAFEC13D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE milieu5 ADD CONSTRAINT FK_8FDCE573D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE remplacant1 ADD CONSTRAINT FK_71095FFE3D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE remplacant2 ADD CONSTRAINT FK_E8000E443D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE remplacant3 ADD CONSTRAINT FK_9F073ED23D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE remplacant4 ADD CONSTRAINT FK_163AB713D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE remplacant5 ADD CONSTRAINT FK_76649BE73D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE remplacant6 ADD CONSTRAINT FK_EF6DCA5D3D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE remplacant7 ADD CONSTRAINT FK_986AFACB3D13A62D FOREIGN KEY (nom_joueur_id) REFERENCES joueur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE atelier CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE categorie categorie VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE calendar CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE background_color background_color VARCHAR(7) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE text_color text_color VARCHAR(7) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE joueur CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nationalite nationalite VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE poste poste VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE statut statut VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
