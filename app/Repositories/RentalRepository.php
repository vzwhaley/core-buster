<?php

namespace App\Repositories;

use App\Rental;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class RentalRepository
{
    /**
     * @return Rental[]|Collection
     */
    public function all()
    {
        return Rental::all();
    }

    /**
     * @param Rental $rental
     * @return Rental[]|Collection
     */
    public function getByRental(Rental $rental)
    {
        return Rental::where('id'. $rental->id)->get();
    }

    /**
     * @param $user
     * @return \Illuminate\Support\Collection
     */
    public function getUserRentals($user): \Illuminate\Support\Collection
    {
        return DB::table('rentals')
            ->join('users', 'users.id', '=', 'rentals.rented_by')
            ->join('movies', 'movies.id', '=', 'rentals.movie_id')
            ->join('price_codes', 'price_codes.id', '=', 'movies.price_code_id')
            ->select('movies.name', DB::raw('COUNT(rentals.movie_id) AS total_rentals'),
                DB::raw('SUM(rentals.duration) AS duration'), 'price_codes.code_name')
            ->where('rentals.rented_by', $user->getAuthIdentifier())
            ->groupBy('movies.name', 'price_codes.code_name')
            ->get();
    }
}
