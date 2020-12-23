<?php

namespace App\Http\Controllers;

use App\Providers\RentalsServiceProvider;
use App\Repositories\RentalRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;


class HomeController extends Controller
{
    private $rentalRepository;

    /**
     * Create a new controller instance.
     *
     * @param RentalRepository $rentalRepository
     */
    public function __construct(RentalRepository $rentalRepository)
    {
        $this->middleware('auth');
        $this->rentalRepository = $rentalRepository;
    }

    /**
     * Show the user's current rental fees
     *
     * @return Factory|View
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->getAuthIdentifier() !== NULL) {
            return view('rentals/index');
        }

    }

    /**
     * Load the user's current rental fees
     *
     * @param Request $request
     * @param RentalsServiceProvider $rentalsServiceProvider
     * @return JsonResponse
     */
    public function loadUserRentals(Request $request, RentalsServiceProvider $rentalsServiceProvider): JsonResponse
    {
        $user = Auth::user();

        // Load the current user's movie rental data
        $rentalsData = $this->rentalRepository->getUserRentals($user);

        // Calculate the current user's movie rental fees
        $rentals = $rentalsServiceProvider->calculateRentalFees($rentalsData);

        // Set an array to hold the current user's movie rental data
        $data = [
            'data' => $rentals['rentals'],
            'totals' => $rentals['totals']
        ];

        // Return movie rental data to view
        return response()->json($data);
    }
}
