@extends('layouts.app')
@section('content')
    <div class="card border-light mb-3 mt-3">
        <div class="card-header"><strong>Manage {{ ucwords($resource->type) }}</strong> <a href="{{ route('office.resources') }}" class="btn btn-sm btn-danger float-right" title="Go Back"><i class="fas fa-arrow-circle-left"></i> Back</a><?php echo ($resource->type!='contacts' && $resource->type!='applications')?'<a href="'.route("office.resources.create", [$resource->type]).'" class="btn btn-sm btn-success float-right mr-3"><i class="fas fa-plus"></i> Add  '.ucwords($resource->type) .'</a>':'' ?></div>
            <div class="card-body">
                <div class="row">
                    @if($resource->type=='applications')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Birthday</th>
                                <th>State</th>
                                <th>Position</th>
                                <th>Docs</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Birthday</th>
                                <th>State</th>
                                <th>Position</th>
                                <th>Docs</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resourc)
                            <tr>
                                <td>{{ $resourc->first_name }} {{ $resource->last_name }}</td>
                                <td>{{ $resourc->email }}</td>
                                <td>{{ $resourc->mobile }}</td>
                                <td>{{ $resourc->birthday }}</td>
                                <td>{{ $resourc->state }}</td>
                                <td>{{ $resourc->position }}</td>
                                <td> 
                                    <a href="{{ asset('/uploads/careers/').'/'.$resourc->cv}}" target="_blank" class="btn btn-xs btn-danger p-2" title="View CV"><i class="fas fa-file-pdf fa-2x"></i></a>
                                    <a href="{{ asset('/uploads/careers/').'/'.$resourc->letter}}" target="_blank" class="btn btn-xs btn-info p-2" title="View Cover Letter"><i class="fas fa-file-word fa-2x"></i></a>
                                </td>
                                <td>{{ $resource->created_at }}</td>
                                <td> 
                                    @if(Auth::user()->id==1)
                                    <a data-href="{{ route('office.resources.resource.delete', ['type'=>$resource->type,'id'=>$resourc->id]) }}" class="btn btn-xs btn-danger del"><i class="fas fa-trash text-white"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    
                    @if($resource->type=='awards')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Award</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Award</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resourc)
                            <tr>
                                <td>{{ $resourc->title }}</td>
                                <td>{{ $resourc->award }}</td>
                                <td>{{ $resourc->description }}</td>
                                <td> 
                                    <a href="{{ asset('/media/images/awards/').'/'.$resourc->image}}" target="_blank" class="btn btn-xs btn-warning p-2 rounded" title="View Award Image"><img src="{{ asset('/media/images/awards/').'/'.$resourc->image}}" class="img-responsive rounded mx-auto d-block" alt="Award Image" itemprop="image" width="50"></a>
                                </td>
                                <td>{{ $resourc->created_at }}</td>
                                <td> 
                                    <a href="{{ route('office.resources.resource.modify', [$resource->type,$resourc->id]) }}" class="btn btn-xs btn-primary p-2 mx-auto" title="View Award"><i class="fas fa-eye"></i> View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif

                    @if($resource->type=='branches')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>State</th>
                                <th>Personnel</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Telephone</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>State</th>
                                <th>Personnel</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Telephone</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resourc)
                            <tr>
                                <td>{{ $resourc->title }}</td>
                                <td>{{ $resourc->state }}</td>
                                <td>{{ $resourc->personnel }}</td>
                                <td>{{ $resourc->address }}</td>
                                <td>{{ $resourc->mobile }}</td>
                                <td>{{ $resourc->phone }}</td>
                                <td>{{ $resourc->created_at }}</td>
                                <td> 
                                    <a href="{{ route('office.resources.resource.modify', [$resource->type,$resourc->id]) }}" class="btn btn-xs btn-primary p-2 mx-auto" title="View Branches"><i class="fas fa-eye"></i> View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif

                    @if($resource->type=='contacts')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Pin</th>
                                <th>Employer</th>
                                <th>Subject</th>
                                <th>Type</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Pin</th>
                                <th>Employer</th>
                                <th>Subject</th>
                                <th>Type</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resource)
                            <tr>
                                <td>{{ $resource->name }}</td>
                                <td>{{ $resource->email }}</td>
                                <td>{{ $resource->mobile }}</td>
                                <td>{{ $resource->pin }}</td>
                                <td>{{ $resource->employer }}</td>
                                <td>{{ $resource->subject }}</td>
                                <td>{{ $resource->type }}</td>
                                <td>{{ $resource->message }}</td>                                
                                <td>{{ $resource->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    
                    @if($resource->type=='files')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Size</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Size</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resourc)
                            <tr>
                                <td>{{ $resourc->title }}</td>
                                <td>{{ $resourc->size }}</td>
                                <td>{{ $resourc->category }}</td>
                                <td>{{ $resourc->description }}</td>
                                <td> 
                                    <a href="{{ asset('/uploads/documents/').'/'. strtolower(str_ireplace(' ','-',$resourc->category)).'/'. $resourc->file }}" target="_blank" class="btn btn-xs btn-danger p-2" title="View File"><i class="fas fa-file-pdf fa-2x"></i></a>
                                </td>
                                <td>{{ $resourc->created_at }}</td>
                                <td> 
                                    <a href="{{ route('office.resources.resource.modify', [$resource->type,$resourc->id]) }}" class="btn btn-xs btn-primary p-2 mx-auto" title="View Files"><i class="fas fa-eye"></i> View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif                    
                    
                    @if($resource->type=='faqs')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Category</th>
                                <th>Display</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Category</th>
                                <th>Visibility</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resourc)
                            <tr>
                                <td>{{ $resourc->question }}</td>
                                <td>{{ $resourc->answer }}</td>
                                <td>{{ $resourc->category }}</td>
                                <td>{{ ($resourc->display)? 'Visible' :'Disabled'}}</td>
                                <td>{{ $resourc->created_at }}</td>
                                <td> 
                                    <a href="{{ route('office.resources.resource.modify', [$resource->type,$resourc->id]) }}" class="btn btn-xs btn-primary p-2 mx-auto" title="View Files"><i class="fas fa-eye"></i> View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    
                    @if($resource->type=='jobs')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Requirements</th>
                                <th>Needs</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Requirements</th>
                                <th>Needs</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resourc)
                            <tr>
                                <td>{{ $resourc->title }}</td>
                                <td>{!! $resourc->description !!}</td>
                                <td>{!! $resourc->requirements !!}</td>
                                <td>{!! $resourc->needs !!}</td>
                                <td>{{ $resourc->status }}</td>
                                <td>{{ $resourc->created_at }}</td>
                                <td> 
                                    <a href="{{ route('office.resources.resource.modify', [$resource->type,$resourc->id]) }}" class="btn btn-xs btn-primary p-2 mx-auto" title="View Files"><i class="fas fa-eye"></i> View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    
                    @if($resource->type=='resources')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Resource</th>
                                <th>Page</th>
                                <th>Description</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Resource</th>
                                <th>Page</th>
                                <th>Description</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resourc)
                            <tr>
                                <td>{{ $resourc->resource }}</td>
                                <td>{{ $resourc->page }}</td>
                                <td>{{ $resourc->description }}</td>
                                <td>{{ $resourc->created_at }}</td>
                                <td> 
                                    <a href="{{ route('office.resources.resource.modify', [$resource->type,$resourc->id]) }}" class="btn btn-xs btn-primary p-2 mx-auto" title="View Files"><i class="fas fa-eye"></i> View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    
                    @if($resource->type=='services')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resourc)
                            <tr>
                                <td>{{ $resourc->title }}</td>
                                <td>{{ $resourc->description }}</td>
                                <td>
                                    <a href="{{ asset('/media/images/misc/').'/'.$resourc->image}}" target="_blank" class="btn btn-xs btn-danger p-2 rounded" title="View Service Image"><img src="{{ asset('/media/images/misc/').'/'.$resourc->image}}" class="img-responsive rounded mx-auto d-block" alt="Award Image" itemprop="image" width="50"></a>
                                </td>
                                <td>{{ $resourc->created_at }}</td>
                                <td> 
                                    <a href="{{ route('office.resources.resource.modify', [$resource->type,$resourc->id]) }}" class="btn btn-xs btn-primary p-2 mx-auto" title="View Files"><i class="fas fa-eye"></i> View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    
                    @if($resource->type=='teams')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Profile</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Profile</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resourc)
                            <tr>
                                <td>{{ $resourc->name }}</td>
                                <td>{{ $resourc->position }}</td>
                                <td>
                                    <a href="{{ asset('/media/images/team/').'/'.$resourc->image}}" target="_blank" class="btn btn-xs btn-danger p-2 rounded" title="View Profile Image"><img src="{{ asset('/media/images/team/').'/'.$resourc->image}}" class="img-responsive rounded mx-auto d-block" alt="Award Image" itemprop="image" width="50"></a>
                                </td>
                                <td>{!! $resourc->profile !!}</td>
                                <td>{!! $resourc->category !!}</td>
                                <td>{{ $resourc->created_at }}</td>
                                <td> 
                                    <a href="{{ route('office.resources.resource.modify', [$resource->type,$resourc->id]) }}" class="btn btn-xs btn-primary p-2 mx-auto" title="View Files"><i class="fas fa-eye"></i> View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    
                    @if($resource->type=='testimonials')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Testimony</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Testimony</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resourc)
                            <tr>
                                <td>{{ $resourc->name }}</td>
                                <td>{{ $resourc->company }}</td>
                                <td>{{ $resourc->testimony }}</td>
                                <td>
                                    <a href="{{ asset('/media/images/testimonials/').'/'.$resourc->image}}" target="_blank" class="btn btn-xs btn-danger p-2 rounded" title="View Profile Image"><img src="{{ asset('/media/images/testimonials/').'/'.$resourc->image}}" class="img-responsive rounded mx-auto d-block" alt="View Testimonial Image" itemprop="image" width="50"></a>
                                </td>
                                <td>{{ $resourc->created_at }}</td>
                                <td> 
                                    <a href="{{ route('office.resources.resource.modify', [$resource->type,$resourc->id]) }}" class="btn btn-xs btn-primary p-2 mx-auto" title="View Files"><i class="fas fa-eye"></i> View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    
                    @if($resource->type=='history')
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                    <thead>
                            <tr>
                                <th>RSA Fund I</th>
                                <th>RSA Fund II</th>
                                <th>RSA Fund III</th>
                                <th>RSA Fund IV</th>
                                <th>Report Date</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>RSA Fund I</th>
                                <th>RSA Fund II</th>
                                <th>RSA Fund III</th>
                                <th>RSA Fund IV</th>
                                <th>Report Date</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($resources as $resourc)
                            <tr>
                                <td>{{ $resourc->fundi }}</td>
                                <td>{{ $resourc->fundii }}</td>
                                <td>{{ $resourc->fundiii }}</td>
                                <td>{{ $resourc->fundiv }}</td>
                                <td>{{ $resourc->date }}</td>
                                <td>{{ $resourc->created_at }}</td>
                                <td> 
                                    <a href="{{ route('office.resources.resource.modify', [$resource->type,$resourc->id]) }}" class="btn btn-xs btn-primary p-2 mx-auto" title="View Files"><i class="fas fa-eye"></i> View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
