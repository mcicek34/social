<?php

use yii\db\Migration;

/**
 * Class m210116_014704_sosyal
 */
class m210116_014704_sosyal extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }


        $this->createTable('kullanicilar',[
            'id'=>$this->primaryKey(),
            'UserID' => $this->integer(),
            'F_UserID' => $this->integer(),
            'Username' => $this->text(),
            'Password' => $this->text(),
            'Name' => $this->text(),
            'Surname'=> $this->text(),
            'Age'=> $this->text(),
            'Location'=> $this->text(),
            'Mail'=> $this->text(),
            'Gender'=> $this->text()

        ],$tableOptions);


        $this->createTable('share',[
            'id'=>$this->primaryKey(),
            'UserID' => $this->integer(),
            'Date'=> $this->text(),
            'Text'=>$this->text()
        ],$tableOptions);


        $this->createTable('friendship',[
            'id'=>$this->primaryKey(),
            'UserID' => $this->integer(),
            'FriendID'=> $this->text(),
            'Relation_start_date'=>$this->text()
        ],$tableOptions);

    }

    public function Down()
    {

        $this->dropTable('kullanicilar');
        $this->dropTable('share');
        $this->dropTable('friendship');

        return false;
    }

}