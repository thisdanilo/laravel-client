<?php

namespace App\Jobs;

use App\Notifications\NotificationWelcomeClient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class WelcomeClient implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected $client)
    {
        $this->client = $client;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->client->notify(new NotificationWelcomeClient($this->client));
    }
}
