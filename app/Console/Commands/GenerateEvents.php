<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Event;
use App\Venue;
use App\Band;
use Carbon\Carbon;

class GenerateEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:events';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate test events and venues if there are 0';

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
        $events = $this->ask('How many test events do you want to generate?', 5);
        // Init the progress bar
        $bar = $this->output->createProgressBar($events);
        // Start the progress bar
        $bar->start();
        // Check if there is a test venue. If not, create one
        if (Venue::where('name', 'testvenue')->value('id') === NULL) {
            $this->line('');
            $this->info('No venue named TESTVENUE is found, creating one now.');

            $venue = Venue::create([
                'name' => 'TESTVENUE',
                'type' => 'TESTVENUE',
                'capacity' => 999,
                'postal_code' => 999,
                'city' => 'TESTVENUE',
                'country' => 'TESTVENUE',
                'timezone' => 'TESTVENUE',
                'address' => 'TESTVENUE',
                'cover_photo' => 'TESTVENUE.jpg',
            ]);
            $this->info('Venue named TESTVENUE created');
        }
        $venue = Venue::where('name', 'TESTVENUE')->first();

        // Check if there is a test band. If not, create one
        if (Band::where('name', 'TESTBAND')->value('id') === NULL) {
            $this->line('');
            $this->info('No band named TESTBAND is found, creating one now.');

            $band = Band::create([
                'name' => 'TESTBAND-' . uniqid(),
                'bio' => 'TESTBAND',
                'genre_ids' => 1,
                'members' => 'Test Member, Test Member and Test Member',
                'email' => 'info@example.com',
                'website' => 'https://example.com',
                'spotify_link' => '3YQKmKGau1PzlVlkL1iodx',
                'soundcloud_link' => 'twentyonepilots',
            ]);
            $this->info('Band named TESTBAND created');
        }
        $band = Band::where('name', 'TESTBAND')->first();
        $this->line('');
        $this->info('Creating ' . $events . ' test events.');
        $eventinfo ='
        <h5 class="weight-normal">TWENTY ØNE PILØTS will perform at the Ziggo Dome as part of their THE BANDITØ TØUR on Thuesday the 12th of March!</h5>
        <p>TWENTY ØNE PILØTS is well known for their energetic live performances. Tyler Joseph and Josh Dun started their career by performing in their birthplace Columbus, Ohio. The catchy mix of hiphop, pop and electronic music was one of the reasons for their quick breakthrough. In 2015 the band\'s success single Ride was the follow up hit for the mega hit Stressed Out, which reached a double platinum status.</p>
        <h5 class="weight-normal">Attention:</h5>
        Bear in mind that it is forbidden to bring a bag with you to this show. Only handbags that aren’t bigger than the size of an A4-paper (8.27 x 11.69 inches) and no thicker than 10 cm (3.9 inches) are allowed inside. If you do bring a bag bigger than this, you will not be allowed to enter the venue. The organizer of this event will do its best to reduce queues as much as possible. We politely ask for your understanding and cooperation.';
        // Basic while x loop
        $x = 0;
        while ($x < $events) {
            // Create the event
            $event = Event::create([
                'name' => 'TESTEVENT-' . uniqid() . uniqid(),
                'attendees' => "[1]",
                'info' => $eventinfo,
                'type' => 'TESTEVENT',
                'venue_id' => $venue->id,
                'presale' => 0,
                'public_start' => Carbon::now()->toDateTimeString(),
                'public_end' => Carbon::parse('first day of January 2030')->toDateTimeString(),
                'public_price' => 99.99,
                'start_date' => Carbon::parse('first day of January 2030')->toDateTimeString(),
                'genre_id' => 1,
                'max_order_quantity' => 5,
                'cover_photo' => "https://www.rocksound.tv/assets/uploads/Dh0vsYsWsAATs_1.jpg",
            ]);
            // Up x with one
            $x++;
            // Advance the progress bar
            $bar->advance();
        }
        // While loop is done, make the progress bar finish
        $bar->finish();
        // Show the info text in the console that x test events have been generated.
        $this->line('');
        $this->info($events . ' test events generated.');
    }
}
