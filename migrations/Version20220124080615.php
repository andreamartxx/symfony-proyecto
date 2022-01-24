<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124080615 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE azulejo ADD coleccion_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE azulejo ADD CONSTRAINT FK_56D567A3A840E940 FOREIGN KEY (coleccion_id) REFERENCES coleccion (id)');
        $this->addSql('CREATE INDEX IDX_56D567A3A840E940 ON azulejo (coleccion_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE azulejo DROP FOREIGN KEY FK_56D567A3A840E940');
        $this->addSql('DROP INDEX IDX_56D567A3A840E940 ON azulejo');
        $this->addSql('ALTER TABLE azulejo DROP coleccion_id');
    }
}
