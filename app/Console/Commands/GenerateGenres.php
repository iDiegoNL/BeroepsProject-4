<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Genre;

class GenerateGenres extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:genres';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate all the genres';

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
        $genres = [
            'Alternative',
            'Classical',
            'Dance',
            'Rap',
            'Jazz',
            'Metal',
            'Other',
            'Pop',
            'RnB',
            'Reggae',
            'Rock',
            'Festivals',
        ];

        // Init the progress bar
        $bar = $this->output->createProgressBar(count($genres));
        // Start the progress bar
        $bar->start();
        // Basic while x loop
        $x = 0;
        foreach ($genres as $genre) {
            // Create the category
            $genre = Genre::create([
                'name' => $genre,
                'cover_photo' => strtolower($genre) . '.jpg',
            ]);
            // Up x with one
            $x++;
            // Advance the progress bar
            $bar->advance();
        }
        // While loop is done, make the progress bar finish
        $bar->finish();
        // Show the info text in the console that x genres have been added.
        $this->line('');
        $this->info(count($genres) . ' genres added.');
    }
}
