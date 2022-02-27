<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211208144934 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX uniq_880e0d76e7927c74');
        $this->addSql('ALTER TABLE admin DROP email');
        $this->addSql('ALTER TABLE admin ALTER username TYPE VARCHAR(180)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_880E0D76F85E0677 ON admin (username)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP INDEX UNIQ_880E0D76F85E0677');
        $this->addSql('ALTER TABLE admin ADD email VARCHAR(180) NOT NULL');
        $this->addSql('ALTER TABLE admin ALTER username TYPE VARCHAR(255)');
        $this->addSql('CREATE UNIQUE INDEX uniq_880e0d76e7927c74 ON admin (email)');
    }
}
