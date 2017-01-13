<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\App;

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

    protected $user;

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
        $user = new User();

        $user->name = $this->ask('Enter user name?', 'admin');
        $user->password = $this->secret('Enter your password?', 'admin');
        $user->email = $this->ask('Enter your email address', '');
        $user->is_admin = true;
        $user->save();
        $this->info("{$user->name} has been generated and saved with role: Admin.");
    }
}
