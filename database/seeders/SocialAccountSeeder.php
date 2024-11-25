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
            'icon' => 'facebook-icon.png',
        ]);

        SocialAccount::create([
            'name' => 'Twitter',
            'url' => 'https://twitter.com',
            'icon' => 'twitter-icon.png',
        ]);

        SocialAccount::create([
            'name' => 'Instagram',
            'url' => 'https://instagram.com',
            'icon' => 'instagram-icon.png',
        ]);
    }
}
