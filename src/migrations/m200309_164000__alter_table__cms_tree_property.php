<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 28.08.2015
 */

use yii\db\Migration;

class m200309_164000__alter_table__cms_tree_property extends Migration
{
    public function safeUp()
    {
        $tableName = "cms_tree_property";

        $this->addColumn($tableName, "value_enum_id", $this->integer());

        $this->createIndex("value_enum_id", $tableName, "value_enum_id");

        $this->addForeignKey(
            "{$tableName}}__value_enum_id", $tableName,
            'value_enum_id', '{{%cms_tree_type_property_enum}}', 'id', 'CASCADE', 'CASCADE'
        );
    }

    public function safeDown()
    {
        echo "m200129_095515__alter_table__cms_content cannot be reverted.\n";
        return false;
    }
}