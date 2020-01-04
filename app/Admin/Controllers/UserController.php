<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);

       
        $grid->id('Id')->sortable();
        $grid->column('name', __('名前'))->sortable();
        // $grid->name('名前')->sortable();
        $grid->column('email', __('Email'));
        // $grid->column('password', __('Password'));
        // $grid->column('remember_token', __('Remember token'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

        $grid->filter(function ($filter) {
            $filter->column(1/2, function ($filter) {
                $filter->disableIdFilter();
                $filter->startsWith('name','名前');      // 前方一致
                $filter->startsWith('email','Email');
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
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
        $form = new Form(new User);

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->password('password', __('Password'));
        $form->text('remember_token', __('Remember token'));

        return $form;
    }
    
}
