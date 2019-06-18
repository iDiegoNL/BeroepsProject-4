<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Hash;

class GenerateUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate test users with test123 as the password.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Prompt the input
        $users = $this->ask('How many test users do you want to generate?', 5);
        // Init the progress bar
        $bar = $this->output->createProgressBar($users);
        // Start the progress bar
        $bar->start();
        // Basic while x loop
        $x = 0;
        while ($x < $users) {
            // Create the user
            $user = User::create([
                'username' => 'test-' . substr(md5(microtime()), rand(0, 26), 5),
                'email' => substr(md5(microtime()), rand(0, 26), 15) . '@gmail.com',
                'password' => Hash::make('test123'),
            ]);
            // Up x with one
            $x++;
            // Advance the progress bar
            $bar->advance();
        }
        // While loop is done, make the progress bar finish
        $bar->finish();
        // Show the info text in the console that x test users have been generated.
        $this->line('');
        $this->info($users . ' test users generated.');
    }
}
