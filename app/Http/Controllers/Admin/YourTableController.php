<?php
namespace App\Http\Controllers\Admin;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Facades\Admin;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Layout\Content;
use App\Models\YourTable;

class YourTableController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->header('YourTable')
            ->description('Description')
            ->body($this->grid());
    }

    protected function grid()
    {
        $grid = new Grid(new YourTable());

        $grid->column('id', 'ID');
        $grid->column('column_name', 'Column Name'); // Replace 'column_name' with your actual column names

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new YourTable());

        $form->text('column_name', 'Column Name'); // Replace 'column_name' with your actual column names

        return $form;
    }
}

