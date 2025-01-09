<?php

namespace Database\Seeders;
// use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\HASH;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class userProfile extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(
            [
                'roleid'=>1,
                'name'=>'admin',
                'address'=>'--',
                'contact_no'=>'--',
                'reference_by'=>'--',
                'nationalid'=>'---',
                'agreement_paper'=>'---',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('4444'),
            ]
        );

        DB::table('company_datails')->insert(
            [
                'companyName'=>"-",
                'companyEmail'=>"example@gmail.com",
                'phone'=>"-",
                'address'=>"-",
                'logo'=>"-",
            ]
        );

    }
}
