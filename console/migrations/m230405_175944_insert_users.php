<?php

use yii\db\Migration;

/**
 * Class m230405_175944_insert_users
 */
class m230405_175944_insert_users extends Migration
{

    public function up()
    {
        $this->insert('user', ['id' => 1, 'username' => 'test0', 'auth_key' => '5R-TUOKWkC51Z_Fv4LhR1bQZVHT9qFxR', 'password_hash' => '$2y$13$nwETMQ8OviBLWc6SFAMmWOFiah/kDl8cBCjPGetwrLBUwyvHUHK3O', 'password_reset_token' => Yii::$app->security->generateRandomString() . '_' . time(), 'email' => 'test0@test.ru', 'status' => '10', 'created_at' => '1680719317', 'updated_at' => '1680719317', 'verification_token' => 'OeyFuJoh9DNPM0H6Gs1BbaoUbIMpSSs5_1680719317']);
        $this->insert('user', ['id' => 2, 'username' => 'admin', 'auth_key' => '5R-TUOKWkC51Z_Fv4LhR1bQZVHT9qFxR', 'password_hash' => '$2y$13$fn8/vn96oUl1kzmtkSe7ruT2VKbVHDmG2eGRlIpamlzqnDbSBtX/.', 'password_reset_token' => Yii::$app->security->generateRandomString() . '_' . time(), 'email' => 'admin@test.ru', 'status' => '10', 'created_at' => '1680719317', 'updated_at' => '1680719317', 'verification_token' => 'OeyFuJoh9DNPM0H6Gs1BbaoUbIMpSSs5_1680719317']);
        $this->insert('user', ['id' => 3, 'username' => 'test1', 'auth_key' => '5R-TUOKWkC51Z_Fv4LhR1bQZVHT9qFxR', 'password_hash' => '$2y$13$nwETMQ8OviBLWc6SFAMmWOFiah/kDl8cBCjPGetwrLBUwyvHUHK3O', 'password_reset_token' => Yii::$app->security->generateRandomString() . '_' . time(), 'email' => 'test1@test.ru', 'status' => '10', 'created_at' => '1680719317', 'updated_at' => '1680719317', 'verification_token' => 'OeyFuJoh9DNPM0H6Gs1BbaoUbIMpSSs5_1680719317']);
        $this->insert('user', ['id' => 4, 'username' => 'test2', 'auth_key' => '5R-TUOKWkC51Z_Fv4LhR1bQZVHT9qFxR', 'password_hash' => '$2y$13$nwETMQ8OviBLWc6SFAMmWOFiah/kDl8cBCjPGetwrLBUwyvHUHK3O', 'password_reset_token' => Yii::$app->security->generateRandomString() . '_' . time(), 'email' => 'test2@test.ru', 'status' => '10', 'created_at' => '1680719317', 'updated_at' => '1680719317', 'verification_token' => 'OeyFuJoh9DNPM0H6Gs1BbaoUbIMpSSs5_1680719317']);
        $this->insert('user', ['id' => 5, 'username' => 'test3', 'auth_key' => '5R-TUOKWkC51Z_Fv4LhR1bQZVHT9qFxR', 'password_hash' => '$2y$13$nwETMQ8OviBLWc6SFAMmWOFiah/kDl8cBCjPGetwrLBUwyvHUHK3O', 'password_reset_token' => Yii::$app->security->generateRandomString() . '_' . time(), 'email' => 'test3@test.ru', 'status' => '10', 'created_at' => '1680719317', 'updated_at' => '1680719317', 'verification_token' => 'OeyFuJoh9DNPM0H6Gs1BbaoUbIMpSSs5_1680719317']);
    }

    public function down()
    {
        $this->delete('user', ['id' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]]);
    }
}
