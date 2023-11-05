<?php

namespace Modules\Blog\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class BlogsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Blogs';

        // module name
        $this->module_name = 'blogs';

        // directory path of the module
        $this->module_path = 'blog::backend';

        // module icon
        $this->module_icon = 'fa fa-lightbulb';

        // module model name, path
        $this->module_model = "Modules\Blog\Models\Blog";
    }

}
