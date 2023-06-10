<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'username' => 'test',
                'role'  => 'admin',
                'password' => '$2y$10$JeulRNQzPvluUN3XXqxHBenMXL71dsqh79oBzlp.ajaIpJLSgN4mq', // test
                'created' => '2023-06-10 03:25:54',
                'modified' => '2023-06-10 03:25:54',
            ],
            [
                'id' => 2,
                'username' => 'tests',
                'role'  => 'admin',
                'password' => '$2y$10$8rzcvB8eaW4HMkUyeaZEzesEhD0kkOEHEoaqgtV3t2eaGNgMrPP5e', // tests
                'created' => '2023-06-10 06:05:00',
                'modified' => '2023-06-10 06:05:00',
            ],
            [
                'id' => 3,
                'username' => 'jeff',
                'role'  => 'admin',
                'password' => '$2y$10$EDYKIDL.1EnL6AmPK3v9ROHPHgBOifDpqb4d2MAHj31CxGEspsZJK', // jeff
                'created' => '2023-06-10 07:30:38',
                'modified' => '2023-06-10 07:30:38',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
