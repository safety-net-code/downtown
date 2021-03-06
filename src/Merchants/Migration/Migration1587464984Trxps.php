<?php declare(strict_types=1);

namespace Shopware\Production\Merchants\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1587464984Trxps extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1585325412;
    }

    public function update(Connection $connection): void
    {
        $connection->executeQuery('ALTER TABLE `merchant`
            ADD `trxps_prod_key` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            ADD `trxps_test_key` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            ADD `trxps_prod_shop_id` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            ADD `trxps_test_shop_id` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            ADD `trxps_test_enabled` tinyint(1) DEFAULT 0,
            ADD `payment_methods` MEDIUMTEXT DEFAULT NULL
        ');

    }

    public function updateDestructive(Connection $connection): void
    {
    }
}
