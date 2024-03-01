<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%fulltext_index_on_video}}`.
 */
class m240227_072817_create_fulltext_index_on_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE {{%video}} ADD FULLTEXT(title, description, tags)");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200418_064142_create_fulltext_index_on_video cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200418_064142_create_fulltext_index_on_video cannot be reverted.\n";

        return false;
    }
    */
}
