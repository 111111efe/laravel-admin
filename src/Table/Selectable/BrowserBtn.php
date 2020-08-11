<?php

namespace Encore\Admin\Table\Selectable;

use Illuminate\Contracts\Support\Renderable;

class BrowserBtn implements Renderable
{
    public function render()
    {
        $text = admin_trans('admin.choose');

        return <<<HTML
<a href="javascript:void(0)" class="btn btn-primary btn-sm float-left select-relation">
    <i class="glyphicon glyphicon-folder-open"></i>
    &nbsp;&nbsp;{$text}
</a>
HTML;
    }
}
