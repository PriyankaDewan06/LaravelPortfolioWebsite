<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ProfileImage extends Component
{
    use WithPagination;
    use WithFileUploads;

    public function render()
    {
        $images = \App\Models\admin\ProfileImage::all();
        return view('livewire.profile-image');
    }
    public function del($id)
    {
        $image  = \App\Models\admin\ProfileImage::findOrFail($id);
        if (isset($image->file))
        {
            unlink($image->file);
        }

        $image->delete();
        return redirect()->back();
    }
}
