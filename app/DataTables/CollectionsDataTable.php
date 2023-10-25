<?php

namespace App\DataTables;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
// Muhammad Dhafa Ramadhani - 6706223068 - 4604
class CollectionsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'collections.action')
            ->addColumn('jenisKoleksi', function($collection){

                switch ($collection->jenisKoleksi) {
                    case 1:
                        return "Buku";
                        break;
                    case 2:
                        return "Majalah";
                        break;
                    case 3:
                        return "Cakram Digital";
                        break;
                }
            })
            ->addColumn('action', function (Collection $collection) {
                return '<div class="btn-group flex btn-group-sm gap-4" role="group" aria-label="Action Buttons">
                            <a href="/koleksiView/' . $collection->id . '" class="btn btn-gray">View</a>
                            <a href="/editKoleksi/' . $collection->id . '" class="btn btn-primary">Edit</a>
                        </div>';
            })            
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Collection $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('collections-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('namaKoleksi'),
            Column::make('jenisKoleksi'),
            Column::make('jumlahKoleksi'),
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
        return 'Collections_' . date('YmdHis');
    }
}
