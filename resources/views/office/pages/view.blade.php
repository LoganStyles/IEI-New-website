@extends('layouts.app')
@section('content')
    <div class="card border-light mb-3 mt-3">
        <div class="card-header"><strong>View Pages</strong></div>
            <div class="card-body">
                <div class="row">
                    
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Page</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Last Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Page</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Last Updated</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->page }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->subtitle }}</td>
                                <td>{{ $page->updated_at }}</td>
                                <td>
                                    <a href="{{ url($page->url)}}" target="_blank" class="btn btn-xs btn-success"><i class="fas fa-eye"></i> View</a>
                                    <a href="{{ route('office.pages.modify', $page->id) }}" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
