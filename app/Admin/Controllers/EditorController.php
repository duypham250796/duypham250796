<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Editor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EditorController extends AdminController
{
    // /**
    //  * Title for current resource.
    //  *
    //  * @var string
    //  */
    protected $title = 'Editor';

    // /**
    //  * Make a grid builder.
    //  *
    //  * @return Grid
    //  */
    protected function grid()
    {
        $grid = new Grid(new Editor());
        
        $grid->column('title', __('Title'));
        $grid->column('ckeditor', __('Description'));
        
        return $grid;
    }

    // /**
    //  * Make a show builder.
    //  *
    //  * @param mixed $id
    //  * @return Show
    //  */
    protected function detail($id)
    {
        $show = new Show(Editor::findOrFail($id));

        // $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('ckeditor', __('Description'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Editor());

        
        $form->text('title', __('Title'));
        $form->ckeditor('ckeditor', __('Description'));
        return $form;
    }

}
