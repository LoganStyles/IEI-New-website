@extends('layouts.app')
@section('content')
    <div class="card border-light mb-3 mt-3">
        <div class="card-header"><strong>Resources</strong> <a href="{{ route('office.resources.create', ['resources']) }}" class="btn btn-sm btn-success float-right" title="Add Resources"><i class="fas fa-plus"></i> Add  Resources</a></div>
            <div class="card-body">
                <div class="row">
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Resource</th>
                                <th>Page</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Resource</th>
                                <th>Page</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach($resources as $resource)
                            <tr>
                                <td>{{ $resource->resource }}</td>
                                <td>{{ $resource->page }}</td>
                                <td>{{ $resource->description }}</td>
                                <td> 
                                    @if($resource->resource!="Contacts" && $resource->resource!="Applications")
                                    <a href="{{ route('office.resources.create', [$resource->type]) }}" class="btn btn-xs btn-success"><i class="fas fa-plus"></i> Add</a>
                                    @endif
                                    <a href="{{ route('office.resources.view', [$resource->type]) }}" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> View</a>
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
