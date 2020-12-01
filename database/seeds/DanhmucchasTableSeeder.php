<?php

use Illuminate\Database\Seeder;

class DanhmucchasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('danhmucchas')->truncate();

        DB::table('danhmucchas')->insert(
            [
                [
                    'name' => 'Cơm'
                ],
                [
                    'name' => 'Bánh'
                ],
                [
                    'name' => 'Kem'
                ],
                [
                    'name' => 'Nước'
                ],
                [
                    'name' => 'Gà'
                ],
                [
                    'name' => 'Khác'
                ],
            ]
        );
    }
}
