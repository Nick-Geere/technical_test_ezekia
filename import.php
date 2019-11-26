<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class import extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:candidates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports people and job data into a table and prints it out in the console.';

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
        //grab the csv

        //import the csv into an array

        //create the tables in the database

        //import the data from the arrays into the database tables

        //fetch data from the tables and print them out

        //complete
    }
}
