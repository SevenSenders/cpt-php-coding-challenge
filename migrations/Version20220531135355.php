<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220531135355 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO `orders` (`id`, `created_at`, `updated_at`) VALUES (1, now(), now())');
        $this->addSql('INSERT INTO `orders` (`id`, `created_at`, `updated_at`) VALUES (2, now(), now())');
        $this->addSql('INSERT INTO `shipments` (`order_id`, `tracking_code`, `warehouse_address`, `shipment_status`, `weight`, `created_at`, `updated_at`) 
        VALUES (1, "code_1", "Berlin", "New", 3, now(), now())');
        $this->addSql('INSERT INTO `shipments` (`order_id`, `tracking_code`, `warehouse_address`, `shipment_status`, `weight`, `created_at`, `updated_at`) 
        VALUES (2, "code_2", "Köln", "Delivered", 6.5, now(), now())');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('TRUNCATE `orders`');
        $this->addSql('TRUNCATE `shipments`');
    }
}
