<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <button type="button" data-toggle="modal" data-target="#formx" class="btn btn-outline-primary">Add Image</button>
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
                                        <th>Image Url</th>
                                        <th>Image File</th>
                                        <th>Placing Target</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $image)
                                        <tr>
                                            <td>{{$image->url}}</td>
                                            <td>
                                                @if(isset($image->url))
                                                    <a href="{{$image->url}}" target="_blank">
                                                        <img src="{{$image->url}}" style="height: 100px;width: 100px;" alt="{{ $image->target.' image' }}">
                                                    </a>
                                                @elseif (isset($image->file))

                                                    <img src="{{ asset($image->file) }}" style="height: 100px; width: 100px;" alt="{{ $image->target.' image' }}">
                                                @else
                                                    <img src="{{asset('/')}}front/img/no-image.jpg" alt="no-image" style="height: 100px;width: 100px;">
                                                @endif

                                            </td>
                                            <td>{{$image->target}}</td>

                                            <td class="bt-switch">
                                                {{--                                                <a href="{{ route('contact-status', ['id' => $image->id]) }}">--}}
                                                {{--                                                    <input type="checkbox" {{ $image->status == 1 ? 'checked' : '' }} data-sze="mini" data-on-text="Checked" data-off-text="Unchecked" data-on-color="primary" data-on-color="danger">--}}
                                                {{--                                                </a>--}}
                                                <a href="{{ route('del-img', ['id' => $image->id]) }}" class="btn btn-danger"><i class="fas fa-window-close"></i></a>
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
                    <h4>Add Profile Image</h4>
                    <a href="javascript:void(0)" class="btn btn-outline-danger float-right" style="border-radius: 50%;" data-dismiss="modal">x</a>
                </div>
                <div class="modal-body">
                    <div>
                        <form action="{{ route('new-img') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="Image_Url">Image Url</label>
                                <input type="text" name="url" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Image_Url">Image File</label>
                                <input type="file" name="file" class="form-control-file">
                            </div>
                            <div class="form-group">
                                <label for="Image_Url">Image Target</label>
                                <select name="target" id="" class="form-control" required>
                                    <option value=""><-- Select a target --></option>
                                    <option value="mini">Header Mini Size</option>
                                    <option value="big">Header Big Size</option>
                                </select>
                            </div>
                            <div class="form-group float-right">
                                <input type="button" data-dismiss="modal" class="btn btn-outline-danger" value="Close">
                                <input type="submit" class="btn btn-outline-success" value="Add Image">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
