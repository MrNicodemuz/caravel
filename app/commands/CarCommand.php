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
        $types =
            "Commands types:\n\t" .
            implode("\n\t", array(
                'byModel model',
                'byColor color',
                'newCar model',
                'byId id',
                'distinct',
                'delete id'
            )) .
            "\n";
        
        if (empty($commandType)) {
            $this->info($types);
        }
        
        switch ($commandType) {
            case 'byModel':
                $model = $this->argument('arg1');
                
                $this->info("Searching for '$model*'");
                $cars = Car::ofModel($model)->get();
                print_r($cars);
                break;
            case 'byColor':
                $color = $this->argument('arg1');
                
                $this->info("Searching color $color");
                $cars = Car::ofColor($color)->get();
                print_r($cars);
                break;
            case 'byId':
                $id = intval($this->argument('arg1'));
                
                $this->info("Searching id $id");
                $car = Car::find($id);
                
                if (empty($car)) {
                    $this->error("Id $id not found!\n");
                }
                else {
                    print_r($car);
                }
                break;
            case 'newCar':
                $car = Car::create(array(
                    'model' => $this->argument('arg1')
                ));
                
                $car->save();
                
                print_r($car);
                break;
            case 'distinct':
                $model = $this->argument('arg1');
                
                if (empty($model)) {
                    // Get all distinct cars
                    $distinct = Car::getDistinct()->get();
                }
                else {
                    // Get distinct cars matching the model
                    $distinct = Car::ofModel($model)->getDistinct()->get();
                }
                
                print_r($distinct);
                break;
            case 'delete':
                $id = intval($this->argument('arg1'));
                
                $this->info("Deleting id $id");
                $car = Car::find($id);
                
                if (empty($car)) {
                    $this->error("Id $id not found!\n");
                }
                else {
                    $car->delete();
                }
                break;
            default:
                $this->error("Unknown command '$commandType'");
                $this->info($types);
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
