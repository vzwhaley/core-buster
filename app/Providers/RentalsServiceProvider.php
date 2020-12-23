<?php

namespace App\Providers;

use App\Movie;
use Illuminate\Support\ServiceProvider;

class RentalsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Providers\RentalsServiceProvider',function($app){
            return new RentalsServiceProvider($app);
        });
    }

    /**
     * Calculate movie rental fees.
     *
     * @param $rentalsData
     * @return array
     */
    public function calculateRentalFees($rentalsData): array
    {
//        die(var_dump('test'));
        $totalAmount = 0;
        $frequentRenterPoints = 0;
        $rentals = [];

        foreach ($rentalsData as $rental) {

            $thisAmount = 0;

            switch($rental->code_name) {
                case Movie::REGULAR:
                case Movie::SCI_FI:
                    $thisAmount += 2;
                    if ($rental->duration > 2) {
                        $thisAmount += ($rental->duration - 2) * 1.5;
                    }
                    break;
                case Movie::NEW_RELEASE:
                    $thisAmount += $rental->total_rentals * 3;
                    if ($rental->duration > 1) {
                        $frequentRenterPoints++;
                    }
                    break;
                case Movie::CHILDRENS:
                    $thisAmount += 1.5;
                    if ($rental->duration > 3) {
                        $thisAmount += ($rental->duration - 3) * 1.5;
                    }
                    break;
            }

            $totalAmount += $thisAmount;
            $frequentRenterPoints++;
            $rentals[] = [
                'name' => $rental->name,
                'total_rentals' => $rental->total_rentals,
                'duration' => $rental->duration,
                'individual_amount_owed' => number_format($thisAmount, 2, '.', '')
            ];
        }

        $totals = [
            'total_amount_owed' => number_format($totalAmount, 2, '.', ''),
            'frequent_renter_points' => $frequentRenterPoints
        ];

        return [
            'rentals' => $rentals,
            'totals' => $totals
        ];
    }
}
