<?php

use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$professions = DB::select('SELECT id FROM professions WHERE title = ?', ['Desarrollador back-end']);

        $professionId = Profession::where('title', 'Desarrollador back-end')->value('id');

        factory(User::class)->create([
            'name' => 'Arche Klein',
            'email' => 'arche@klein.top',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);
        factory(User::class)->create([
            'name' => 'Mint Adenade',
            'email' => 'mint@adenade.top',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
        ]);
        factory(User::class)->create([
            'name' => 'Edward D Morrisson',
            'email' => 'edward@morrisson.top',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
        ]);
        factory(User::class)->create([
            'name' => 'Claus Valca',
            'email' => 'claus@valca.le',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
        ]);

        factory(User::class)->create([
            'profession_id' => $professionId
        ]);

        factory(User::class, 48)->create();
    }
}
