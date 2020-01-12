<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class UserAdd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add';
    // protected $signature = 'quiz:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '(Add users) for system Admin';

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
        try {
            $data = [];
            $data['username'] = $this->ask('Enter User Name');
            $data['first_name'] = $this->ask('Enter First Name');
            $data['last_name'] = $this->ask('Enter Last Name');
            $data['email'] = $this->ask('Enter Email');
            $data['password'] = $this->secret('Enter Password');
            $data['role_id'] = $this->choice('Role? 0=> admin,1=> client,2=> others', [0, 1, 2], 1);
            $data['password'] = bcrypt($data['password']);
            $this->line($data);
            if ($this->confirm('Do you wish to continue?')) {
                User::Create($data);
                $this->info("Thanks. User has been added successfully");
            }
        } catch (\Exception $e) {
            if($e){
                $this->error("Something went wrong. Please enter coorect values.");
            }
        }

    }
}
