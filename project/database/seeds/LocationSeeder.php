<?php


use App\Employee;
use App\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (Location::class, 10) -> create() -> each(function($location){

          $employees = Employee::inRandomOrder() -> take(rand(1, 10)) -> get();
          $location -> employees() -> attach($employees);
        });
    }
}
