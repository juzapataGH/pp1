<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250826214649 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, producto_id INT NOT NULL, orden_id INT NOT NULL, cantidad INT NOT NULL, INDEX IDX_1F1B251E7645698E (producto_id), INDEX IDX_1F1B251E9750851F (orden_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE orden (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, estado VARCHAR(50) NOT NULL, iniciada DATETIME NOT NULL, confirmada DATETIME NOT NULL, INDEX IDX_E128CFD7A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item ADD CONSTRAINT FK_1F1B251E7645698E FOREIGN KEY (producto_id) REFERENCES producto (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item ADD CONSTRAINT FK_1F1B251E9750851F FOREIGN KEY (orden_id) REFERENCES orden (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orden ADD CONSTRAINT FK_E128CFD7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE item DROP FOREIGN KEY FK_1F1B251E7645698E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item DROP FOREIGN KEY FK_1F1B251E9750851F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE orden DROP FOREIGN KEY FK_E128CFD7A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE item
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE orden
        SQL);
    }
}
