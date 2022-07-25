<?php

use App\Exports\AssetsExport;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\ServiceLocationController;
use App\Http\Livewire\Asset\EditAsset;
use App\Http\Livewire\Asset\ShowAsset;
use App\Http\Livewire\Users\UserTable;
use App\Models\Asset;
use App\Models\Employee;
use App\Models\ServiceLocation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;



Route::get('/', function () {
    return redirect('/dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $assets = Asset::count();
        $locations = ServiceLocation::count();
        $users = User::count();
        $employees = Employee::count();
        return view('dashboard', compact('assets', 'locations', 'users', 'employees'));
    })->name('dashboard');

    Route::group(['prefix' => 'service-locations', 'as' => 'service_locations'], function () {
        Route::get('/', [ServiceLocationController::class, 'index'])->name('.index');
    });

    Route::group(['prefix' => 'model', 'as' => 'model'], function () {
        Route::get('/', \App\Http\Livewire\Hardware\Models::class)->name('.index');
    });

    Route::group(['prefix' => 'specification', 'as' => 'specification'], function () {
        Route::get('/', \App\Http\Livewire\Specification\All::class)->name('.index');
    });
    Route::group(['prefix' => 'status', 'as' => 'status'], function () {
        Route::get('/', \App\Http\Livewire\Status\AllStatus::class)->name('.index');
    });


    Route::group(['prefix' => 'users', 'as' => 'users'], function () {
        Route::get('/', UserTable::class)->name('.index');
    });

    Route::group(['prefix' => 'asstes', 'as' => 'asstes'], function () {
        Route::get('/', function () {
            return view('assets');
        })->name('.index');

        Route::get('new', function () {
            return view('new_asset');
        })->name('.new');

        Route::get('download', function () {


            return Excel::download(new AssetsExport, 'assets.xlsx');
        })->name('.download');

        Route::get('/{asset}', ShowAsset::class)->name('.show');

        Route::get('/{asset}/edit', EditAsset::class)->name('.edit');
    });
});
