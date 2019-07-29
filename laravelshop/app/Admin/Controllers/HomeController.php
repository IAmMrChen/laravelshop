<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (content $content) {

            $content->header('Dashboard');
            $content->description('Description...');

            $content->row(Dashboard::title());

            $content->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
        });
    }

    public function test () {

    }

    public function testTow () {

    }

}
