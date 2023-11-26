@extends('admin.master')
@section('title')
    Manage Contact Requests
@endsection
@section('menu-name')
    Manage Contacts
@endsection
@section('body')
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->phone}}</td>
                                            <td>{{$contact->created_at}}</td>
                                            <td>{{$contact->msg}}</td>
                                            <td class="bt-switch">
                                                <a href="{{ route('contact-status', ['id' => $contact->id]) }}">
                                                    <input type="checkbox" {{ $contact->status == 1 ? 'checked' : '' }} data-sze="mini" data-on-text="Checked" data-off-text="Unchecked" data-on-color="primary" data-on-color="danger">
                                                </a>
                                                <a href="{{ route('delete-contact', ['id' => $contact->id]) }}" class="btn btn-danger"><i class="fas fa-window-close"></i></a>
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

@endsection
