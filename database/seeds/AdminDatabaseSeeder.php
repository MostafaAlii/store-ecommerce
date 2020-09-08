<?php
use App\Models\Admin;
use Illuminate\Database\Seeder;
class AdminDatabaseSeeder extends Seeder
{

    public function run()
    {
        Admin::create([
            'name'  =>  'Mostafa Ali',
            'password'  =>  bcrypt('123456'),
            'email' =>  'mostafa0alii@gmail.com',
            'phone' =>  '01015558628',
            'address'   =>  'Othman Ahmed Othman Marytia Haram',
        ]);
    }
}
