<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Mail;

use App\Mail\GathrMail;

class GathrEmailTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gathr:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Gathr Email';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $mail = new GathrMail();
        Mail::send($mail);


        // Mail::raw('Sending emails with Mailgun and Laravel is easy!', function ($message) {
        //     $message->to('rowanxmas@gmail.com');
        // });
        return Command::SUCCESS;
    }
}