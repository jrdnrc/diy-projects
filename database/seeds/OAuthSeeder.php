<?php

use Illuminate\Database\Seeder;
use Laravel\Passport\Client;

class OAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::truncate();

        $clients = [
            [
                'name'            => 'DIY Insomnia Password Client',
                'password_client' => true,
                'secret'          => 'Bmw30mzUABZGaqSM5UzfiVgZkuVEuwaBW2HOEQZ9',
            ],
            [
                'name'     => 'DIY Web Client',
                'secret'   => 'uC14PhArqtTx2sWGEotr9As2t36FYajL14nGJVK8',
            ],
        ];

        collect($clients)->each(
            function ($client) {
                factory(Client::class)->create($client);
            }
        );
    }
}
