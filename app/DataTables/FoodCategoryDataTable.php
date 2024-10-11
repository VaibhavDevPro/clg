<?php

namespace App\DataTables;

use App\Models\FoodCategory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class FoodCategoryDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($data) {
                $string = '<div class="d-flex align-items-center gap-2">';
                $string .= '<a href="' . route('food-categories.edit', $data->id) . '" data-bs-toggle="modal" data-bs-target="#global_modal" data-bs-whatever="Edit Food Category" class="btn box-32 btn-clean btn-icon" title="Edit details"><span class="material-symbols-outlined text-color-secondary fs-1">edit</span></a>';
                $string .= '<a href="javascript:void(0)" data-url="' . route('food-categories.destroy', $data->id) . '" class="btn box-32 btn-clean btn-icon delete-item" title="Delete Food Category"><span class="material-symbols-outlined text-color-secondary fs-1">delete</span></a>';
                $string .= '</div>';
                return $string;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(FoodCategory $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the HTML builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('foodcategory-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload'),
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('S.No'),
            Column::make('name')->title('Food Category'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'FoodCategory_' . date('YmdHis');
    }
}
