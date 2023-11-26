@extends('admin.master')
@section('title')
    Manage Recent Projects
@endsection
@section('menu-name')
    Manage Recent Projects
@endsection
@section('body')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <button type="button" data-toggle="modal" data-target="#formx" class="btn btn-outline-primary">Add Project</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">File export</h4>
                            <h6 class="card-subtitle">Exporting data from a table can often be a key part of a complex application. The Buttons extension for DataTables provides three plug-ins that provide overlapping functionality for data export.  You can refer full documentation from here <a href="https://datatables.net/">Datatables</a></h6>
                            <div class="table-responsive">
                                <table id="file_export" class="table table-striped table-bordered display">
                                    <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Project Url</th>
                                        <th>Image Url</th>
                                        <th>Image File</th>
                                        <th>Is Checked</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($projects as $project)
                                        <tr>
                                            <td>{{$project->name}}</td>
                                            <td>{{$project->url}}</td>
                                            <td>
                                                <a href="{{$project->image_url}}" target="_blank">
                                                    <img src="{!! $project->image_url !!}" style="height: 100px;width: 100px;" alt="{{ $project->name }}">
                                                </a>

                                            </td>
                                            <td>
                                                @if(isset($project->file))
                                                    <img src="{{ asset($project->file) }}" style="height: 100px; width: 100px;" alt="{{ $project->name }}">
                                                @else
                                                    <span>Check Image Url. No uploaded file founded..</span>
                                                @endif
                                            </td>
                                            <td>{{$project->status == 1 ? 'Published' : 'Unpublished'}}</td>

                                            <td class="bt-switch">
                                                <a href="{{ route('project-status', ['id' => $project->id]) }}">
                                                    <input type="checkbox" {{ $project->status == 1 ? 'checked' : '' }} data-sze="mini" data-on-text="Yes" data-off-text="No" data-on-color="primary" data-on-color="danger">
                                                </a>
                                                <a href="{{ route('del-project', ['id' => $project->id]) }}" class="btn btn-danger"><i class="fas fa-window-close"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="formx" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add Project Details</h4>
                    <a href="javascript:void(0)" class="btn btn-outline-danger float-right" style="border-radius: 50%;" data-dismiss="modal">x</a>
                </div>
                <div class="modal-body">
                    <div>
                        <form action="{{ route('new-project') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="Image_Url">Project Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Image_Url">Project Url</label>
                                <input type="text" name="url" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Image_Url">Image Url</label>
                                <input type="text" name="image_url" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Image_Url">Image File</label>
                                <input type="file" name="file" class="form-control-file">
                            </div>
                            <div class="form-group float-right">
                                <input type="button" data-dismiss="modal" class="btn btn-outline-danger" value="Close">
                                <input type="submit" class="btn btn-outline-success" value="Add Project">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    <style>--}}
    {{--        .modal-backdrop {--}}
    {{--            display: block!important;--}}
    {{--        }--}}
    {{--    </style>--}}
    <img src="" alt="">
@endsection
