<?php

namespace App\Admin\Controllers;

use App\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Category;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post);

        $grid->column('id', __('Id'));
        $grid->column('content_upper', __('Content upper'));
        $grid->column('content_middle', __('Content middle'));
        $grid->column('content_bottom', __('Content bottom'));
        $grid->column('author', __('Author'));
        $grid->column('date', __('Date'));
        $grid->category()->name('Category');
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('content_upper', __('Content upper'));
        $show->field('content_middle', __('Content middle'));
        $show->field('content_bottom', __('Content bottom'));
        $show->field('author', __('Author'));
        $show->field('date', __('Date'));
        $show->field('category_id', __('Category_id'));
        // $grid->field('created_at', __('Created at'));
        // $grid->field('updated_at', __('Updated at'));

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
        
        $form = new Form(new Post);

        $form->textarea('content_upper', __('Content upper'));
        $form->textarea('content_middle', __('Content middle'));
        $form->textarea('content_bottom', __('Content bottom'));
        $form->textarea('author', __('Author'));
        $form->textarea('date', __('Date'));
        $form->select('category_id', 'Category')->options($categories);

        return $form;
    }
}
