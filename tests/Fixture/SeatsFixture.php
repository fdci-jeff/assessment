<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SeatsFixture
 */
class SeatsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'seat_number' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-06-10 06:28:27',
                'modified' => '2023-06-10 06:28:27',
            ],
        ];
        parent::init();
    }
}
