<?php

namespace App\Http\Livewire\Front;

use App\Models\admin\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Site extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
//    public $projects;
    public function render()
    {
        $projects   = Project::where('status',1)->orderBy('id', 'DESC')->paginate(6);
        return view('livewire.front.site', [
            'projects'  => $projects,
        ]);
    }
}
