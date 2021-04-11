<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function delete()
    {
        echo "delete";
        echo "<a href=".route_to('admin_blog_insert',2).">View Gallery</a>";
    }

    public function insert(){
        echo "insert";
    }
    
    public function get(){
        echo "get";
    }
}