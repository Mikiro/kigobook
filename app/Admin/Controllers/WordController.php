<?php

namespace App\Admin\Controllers;

use App\Word;
use App\Post;
use App\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WordController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Word';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Word);

        $grid->column('id', __('Id'))->sortable();
        $grid->category()->name('季節'); 
        $grid->column('name', __('季語'));
        $grid->column('explain',__('説明文'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        
        $grid->filter(function ($filter) {
            $filter->column(1/2, function ($filter) {
                $filter->disableIdFilter();
                // $filter->category()->startsWith('name','季節');      // 前方一致
                $filter->startsWith('name','季語');
            });
            // $filter->column(1/2, function ($filter) {
            //     $filter->contains('name','名前');          // Like検索
            // });
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Word::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category_id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $categories = Category::pluck('name', 'id');
        $form = new Form(new Word);

        $form->text('name', __('Name'));
        $form->text('explain', __('explain'));
        $form->select('category_id', 'Category')->options($categories);

        return $form;
    }
}
