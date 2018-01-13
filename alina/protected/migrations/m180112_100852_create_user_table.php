<?php

class m180112_100852_create_user_table extends CDbMigration
{
	public function up()
	{
	    $this->createTable('user',[
	        'id' => 'pk',
            'username' => 'string NOT NULL',
            'first_name' => 'string',
            'last_name' => 'string',
            'email' => 'string NOT NULL',
            'status' => 'int DEFAULT 0'
        ]);
	}

	public function down()
	{
		$this->dropTable('user');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}