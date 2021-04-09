<?php
namespace App\Controllers\Frontend;
use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function single($yazar=null)
    {
        echo "Blog tekil sayfası".'<br>';

    }
    public function category()
    {
        echo 'category';
    }
}