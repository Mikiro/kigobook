<?php

namespace App\Admin\Controllers;

use App\Category;
use App\Post;
use App\Word;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category);

        $grid->column('id', __('Id'))->sortable();
        $grid->column('name', __('季節 分類'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));
        
        $grid->filter(function ($filter) {
            $filter->column(1/2, function ($filter) {
                $filter->disableIdFilter();
                // $filter->category()->startsWith('name','季節');      // 前方一致
                $filter->startsWith('name','季節 分類');
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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        // $show->field('created_at', __('Created at'));
        // $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        
        
        $form = new Form(new Category);
        

        $form->text('name', __('Name'));
        
        
        return $form;
    }
}
