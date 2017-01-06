<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Contracts\Auth\UserProvider;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Admin user';

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
        $user = App/User::class;

        $this->user->name= $this->ask('Enter user name?', 'admin');
        $this->user->password = $this->ask('Enter your password?', 'admin');
        $this->user->email = $this->ask('Enter your email address','');
        $this->user->save();
        $this->info("{$this->user->name} has been generated and saved.");
    }
}
