<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    // php-cs-fixer のテスト用
    public function example()
    {
        $example = "billy";

        return $example + 'liberty ';
    }
}
