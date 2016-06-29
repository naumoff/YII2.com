<?php

use yii\db\Migration;

/**
 * Handles adding role_id to table `user`.
 */
class m160629_112029_add_role_id_to_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('user', 'role_id', $this->integer(11)->notNull()->defaultValue(10)->after('email'));
        $this->addColumn('user', 'user_type_id', $this->integer(11)->notNull()->defaultValue(10)->after('role_id'));
        $this->addColumn('user', 'status_id', $this->integer(11)->notNull()->defaultValue(10)->after('user_type_id'));
        $this->dropColumn('user', 'status');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'role_id');
        $this->dropColumn('user', 'user_type_id');
        $this->dropColumn('user', 'status_id');
        $this->addColumn('user', 'status',$this->integer(11)->notNull());
    }
}
