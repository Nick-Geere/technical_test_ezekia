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
        //Importing the candidates csv into an array
        //grab the candidates csv
        $candidates_csv = fopen('candidates.csv', 'r');
        //setup an empty array to store the data in
        $candidates_array = array();

        //while loop to loop through the data
        $i = 1;
        while($csv_line = fgetcsv($candidates_csv, 1000, ",")) {
          $candidates_array[$i]['candidate_id'] = $csv_line[0];
          $candidates_array[$i]['forename'] = $csv_line[1];
          $candidates_array[$i]['surname'] = $csv_line[2];
          $candidates_array[$i]['email_address'] = $csv_line[3];
        }

        //close the csv
        fclose($candidates_csv);

        //Importing the jobs csv into an array
        //grab the jobs csv
        $jobs_csv = fopen('jobs.csv', 'r');
        //setup an empty array to store the data in
        $jobs_array = array();

        //while loop to loop through the data
        $i = 1;
        while($csv_line = fgetcsv($jobs_csv, 1000, ",")) {
          $jobs_array[$i]['candidate_jobs_id'] = $csv_line[0];
          $jobs_array[$i]['candidate_id'] = $csv_line[1];
          $jobs_array[$i]['job_title'] = $csv_line[2];
          $jobs_array[$i]['company_name'] = $csv_line[3];
          $jobs_array[$i]['start_date'] = $csv_line[4];
          $jobs_array[$i]['end_date'] = $csv_line[5];
        }

        //close the csv
        fclose($jobs_csv);

        //create the tables in the database

        //import the data from the arrays into the database tables

        //fetch data from the tables and print them out

        //complete
    }
}
