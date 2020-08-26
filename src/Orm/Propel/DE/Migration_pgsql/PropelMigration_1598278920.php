<?php

use Propel\Generator\Manager\MigrationManager;

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1598278920.
 * Generated on 2020-08-24 14:22:00 by spryker
 */
class PropelMigration_1598278920
{
    public $comment = '';

    public function preUp(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postUp(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    public function preDown(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postDown(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        return array (
  'zed' => '
BEGIN;

CREATE SEQUENCE "pyz_hello_spryker_pk_seq";

CREATE TABLE "pyz_hello_spryker"
(
    "id_hello_spryker" INTEGER NOT NULL,
    "reversed_string" VARCHAR(12) NOT NULL,
    PRIMARY KEY ("id_hello_spryker")
);

COMMIT;
',
);
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        return array (
  'zed' => '
BEGIN;

DROP TABLE IF EXISTS "pyz_hello_spryker" CASCADE;

DROP SEQUENCE "pyz_hello_spryker_pk_seq";

COMMIT;
',
);
    }

}