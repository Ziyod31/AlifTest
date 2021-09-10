<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Email;
use App\Models\Phone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Contact::factory(20)->create();
        Phone::factory(50)->create();
        Email::factory(50)->create();
    }
}