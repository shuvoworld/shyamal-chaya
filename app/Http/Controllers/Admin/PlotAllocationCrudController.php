<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PlotAllocationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PlotAllocationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PlotAllocationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\PlotAllocation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/plot-allocation');
        CRUD::setEntityNameStrings('plot allocation', 'plot allocations');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('road');
        CRUD::column('plot_no');
        CRUD::column('plot_no_rs');
        CRUD::column('mouza');
        CRUD::column('khatian_no');
        CRUD::column('quantity_of_land_in_katha');
        CRUD::column('total_land_in_katha');
        CRUD::column('member');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PlotAllocationRequest::class);

        CRUD::field('mouza');
        CRUD::field('road');
        CRUD::field('plot_no');
        CRUD::field('khatian_no');
        CRUD::field('plot_no_rs');
        CRUD::field('khatian_no_two');
        CRUD::field('plot_no_rs_two');

        CRUD::field('quantity_of_land_in_katha');
        CRUD::field('total_land_in_katha');
        CRUD::field('member');
        CRUD::field('document_information');
        CRUD::field('registration_date');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
