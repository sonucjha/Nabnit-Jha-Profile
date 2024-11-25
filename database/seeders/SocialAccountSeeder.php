<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialAccount;

class SocialAccountSeeder extends Seeder
{
    public function run()
    {
        SocialAccount::create([
            'name' => 'Facebook',
            'url' => 'https://facebook.com',
        ]);

        SocialAccount::create([
            'name' => 'Twitter',
            'url' => 'https://twitter.com',
        ]);

        SocialAccount::create([
            'name' => 'Instagram',
            'url' => 'https://instagram.com',
        ]);
    }
}
