<?php

use Phinx\Migration\AbstractMigration;

class StudentTable extends AbstractMigration
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
        CREATE TABLE `student` (
  `studentId` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board` VARCHAR(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`studentId`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci";

        $this->query($sql);

        $sql = "INSERT INTO `student` (
`name`, `board`
) VALUES (
'Milan', 'CSM'), ('Goran', 'CSM'), ('Jelena', 'CSM'), ('John', 'CSMB')";
        $this->query($sql);
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->query("DROP TABLE `student`");
    }

}
