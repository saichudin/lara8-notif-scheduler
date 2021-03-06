<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\AdminNotif;
use Illuminate\Console\Command;

class SendNotif extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notif:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a notification';

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
     * @return int
     */
    public function handle()
    {
        $user = User::find(2);
        $notif = [
            'message' => 'this is scheduler notif'
        ];

        $user->notify(new AdminNotif($notif));
    }
}
