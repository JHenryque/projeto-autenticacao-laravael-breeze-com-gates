<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Posts as PostModel;

class PostComponent extends Component
{
    public postModel $post;
    /**
     * Create a new component instance.
     */
    public function __construct(PostModel $post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-component');
    }
}
