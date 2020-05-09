<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200509154750 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE provider (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL COMMENT \'Provider name\', status TINYINT(1) DEFAULT \'1\' NOT NULL COMMENT \'Provider status\', created_at DATETIME NOT NULL COMMENT \'Created at\', updated_at DATETIME NOT NULL COMMENT \'Updated at\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE provider_exchange (id INT AUTO_INCREMENT NOT NULL, provider_id INT DEFAULT NULL, dollar DOUBLE PRECISION DEFAULT \'0\' NOT NULL COMMENT \'Dollar rate\', euro DOUBLE PRECISION DEFAULT \'0\' NOT NULL COMMENT \'Euro rate\', sterling DOUBLE PRECISION DEFAULT \'0\' NOT NULL COMMENT \'Sterling rate\', created_at DATETIME NOT NULL COMMENT \'Created at\', updated_at DATETIME NOT NULL COMMENT \'Updated at\', UNIQUE INDEX UNIQ_9B79DE90A53A8AA (provider_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE provider_exchange ADD CONSTRAINT FK_9B79DE90A53A8AA FOREIGN KEY (provider_id) REFERENCES provider (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE provider_exchange DROP FOREIGN KEY FK_9B79DE90A53A8AA');
        $this->addSql('DROP TABLE provider');
        $this->addSql('DROP TABLE provider_exchange');
    }
}
