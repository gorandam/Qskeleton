<?php

use Phinx\Migration\AbstractMigration;

class GradeTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
//    public function change()
//    {
//
//    }

    /**
    * Migrate Up.
    */
    public function up()
    {
        $sql = "
        CREATE TABLE `grade` (
  `gradeId` INT NOT NULL AUTO_INCREMENT,
  `studentId` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  PRIMARY KEY (`gradeId`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci";

        $this->query($sql);

        $sql = "INSERT INTO `grade` (
`studentId`, `grade`
) VALUES (
1, 5), (1, 7), (2, 8), (2, 7), (3, 9), (3, 6), (3, 7), (3, 9), (4, 9), (4, 9), (4, 7), (4, 6)";
        $this->query($sql);
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->query("DROP TABLE `grade`");
    }
}
