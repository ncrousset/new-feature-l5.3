<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ncrousset:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prueba de conmando en artisan';

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
        $users = User::all();

        dd($users);

        echo 'Prueba de todos';
    }
}
