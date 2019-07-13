<?php

use Illuminate\Database\Seeder;
use App\Modelos\Usuario;
class UsurioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Usuario::create([
        	'username'=>'admin',
        	'password'=>'123456',]);
        Usuario::create([
        	'username'=>'admin',
        	'password'=>'admin',]);
    }
}
