<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CarCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'caravel:car';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Search cars";

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
     * @return void
     */
    public function fire()
    {
        $commandType = $this->argument('commandType');
        
        if (empty($commandType)) {
            $this->info("Commands types:\n\tsearchModel model\n");
            return;
        }
        
        switch ($commandType) {
            case 'searchModel':
                $model = $this->argument('arg1');
                
                $this->info("Searching for '$model*'");
                $cars = Car::ofModel($model)->get();
                print_r($cars);
                break;
            default:
                $this->error("Unknown command '$commandType'");
                break;
        }
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('commandType', InputArgument::OPTIONAL, 'Command type (searchModel, ...).'),
            array('arg1', InputArgument::OPTIONAL, 'Argument 1.')
        );
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
            //array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
        );
    }

}
