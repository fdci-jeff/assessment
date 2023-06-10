<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Seats seed.
 */
class SeatsSeed extends AbstractSeed
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
                'seat_number' => '1101',
                'status' => 'available',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],
            [
                'seat_number' => '1102',
                'status' => 'available',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],
            [
                'seat_number' => '1103',
                'status' => 'available',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],
            [
                'seat_number' => '1104',
                'status' => 'available',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],
        ];

        $table = $this->table('seats');
        $table->insert($data)->save();
    }
}
