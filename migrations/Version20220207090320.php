<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220207090320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resultado ADD azulejo_seleccionado VARCHAR(255) NOT NULL, ADD superficie INT NOT NULL, ADD num_azulejo INT NOT NULL, ADD azulejo_metro INT NOT NULL, ADD azulejos_metro INT NOT NULL, ADD num_caja INT NOT NULL, ADD azulejo_caja INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resultado DROP azulejo_seleccionado, DROP superficie, DROP num_azulejo, DROP azulejo_metro, DROP azulejos_metro, DROP num_caja, DROP azulejo_caja');
    }
}
