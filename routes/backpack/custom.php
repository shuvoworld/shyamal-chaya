<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('division', 'DivisionCrudController');
    Route::crud('district', 'DistrictCrudController');
    Route::crud('upazila', 'UpazilaCrudController');
    Route::crud('occupation', 'OccupationCrudController');
    Route::crud('marital-status', 'MaritalStatusCrudController');
    Route::crud('member', 'MemberCrudController');
    Route::crud('phase', 'PhaseCrudController');
    Route::crud('road', 'RoadCrudController');
    Route::crud('mouza', 'MouzaCrudController');
    Route::crud('plot', 'PlotCrudController');
    Route::crud('plot-assign', 'PlotAssignCrudController');
}); // this should be the absolute last line of this file