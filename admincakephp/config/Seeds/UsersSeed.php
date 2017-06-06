<?php
use Migrations\AbstractSeed;

class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username' => 'Admin',
                'password' => '$2y$10$BqPY.S851yOFv7OMinIxae.73VplhsLtD3ECgO6Euqoma3Q8YGToi',
                'email' => 'admin@localhost.io',
                'first_name' => '',
                'last_name' => '',
                'avatar' => '../img/avatar.png',
                'biography' => '',
                'signature' => '',
                'facebook' => '',
                'twitter' => '',
                'group_id' => '5',
                'language' => 'fr_FR',
                'blog_articles_comment_count' => '1',
                'blog_article_count' => '1',
                'password_code' => '',
                'password_code_expire' => '2014-09-22 10:18:08',
                'password_reset_count' => '0',
                'register_ip' => '::1',
                'last_login_ip' => '::1',
                'last_login' => '2014-09-22 10:18:08',
                'is_deleted' => '0',
                'created' => '2014-09-22 10:18:08',
                'modified' => '2016-10-31 14:44:34'
            ],
            [
                'username' => 'Test',
                'password' => '$2y$10$FTHTun8uEC5GSysxXepZ1ugkaUyT29vHW5R5Ek41sGGoNHYWkAD4u',
                'email' => 'test@localhost.io',
                'first_name' => '',
                'last_name' => '',
                'avatar' => '../img/avatar.png',
                'biography' => '',
                'signature' => '',
                'facebook' => '',
                'twitter' => '',
                'group_id' => '2',
                'language' => 'fr_FR',
                'blog_articles_comment_count' => '1',
                'blog_article_count' => '0',
                'password_code' => '',
                'password_code_expire' => '2014-09-22 10:18:08',
                'password_reset_count' => '0',
                'register_ip' => '::1',
                'last_login_ip' => '::1',
                'last_login' => '2014-09-22 10:18:08',
                'is_deleted' => '0',
                'created' => '2014-09-22 10:18:08',
                'modified' => '2016-10-31 14:44:34'
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
