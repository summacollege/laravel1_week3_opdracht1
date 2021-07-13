<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class ImportTitels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:titels';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'custom command voor het importeren van titels tabel (database laravel1_opdrachten moet aanwezig zijn)';

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
        $sql_dump = File::get(base_path() . '\importTitels.sql');
        DB::connection()->getPdo()->exec($sql_dump);
        return 1;
    }
}
