@extends('layouts.app')
@section('content')
    <div class="card border-light mb-3 mt-3">
        <div class="card-header"><strong>Add {{ ucwords($resource->type) }}</strong> <a href="{{ route('office.resources.view',[$resource->type]) }}" class="btn btn-sm btn-danger float-right" title="Go Back"><i class="fas fa-arrow-circle-left"></i> Back</a></div>
            <div class="card-body">
                <div class="row">
                    @if (session()->has('success'))
                        <div class="alert alert-success w-100">
                            @if(is_array(session()->get('success')))
                            <ul>
                                @foreach (session()->get('success') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @else
                                {{ session()->get('success') }}
                            @endif
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger w-100">
                            @if(is_array(session()->get('error')))
                            <ul>
                                @foreach (session()->get('error') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @else
                                {{ session()->get('error') }}
                            @endif
                        </div>
                    @endif

                    @if($resource->type=='awards')
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.resources.create',$resource->type) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-12 control-label pl-0"><b>Title</b></label>
                            <div class="">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('award') ? ' has-error' : '' }}">
                            <label for="award" class="col-md-12 control-label pl-0"><b>Award</b></label>
                            <input id="award" type="text" class="form-control" name="award" required>
                            @if ($errors->has('award'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('award') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-12 control-label pl-0"><b>Description</b></label>
                            <textarea id="description" class="form-control texteditor" name="description"></textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-12 control-label pl-0"><b>Image</b></label>
                            <div class="form-control">
                                <input id="image" type="file" name="image">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Add {{ ucwords($resource->type) }}</button>
                        </div>
                    </form>
                    @endif

                    @if($resource->type=='branches')
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.resources.create',$resource->type) }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-12 control-label pl-0"><b>Branch Title</b></label>
                            <div class="">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-12 control-label pl-0"><b>Branch State</b></label>
                            <select name="state" tabindex="9" class="sm-form-control required form-control"  required="required">
                                <option>-- Select State --</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Adamawa</option>
                                <option value="FCT - Abuja">FCT - Abuja</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value= "Zamfara">Zamfara</option>
                            </select>
                            @if ($errors->has('state'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('state') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('personnel') ? ' has-error' : '' }}">
                            <label for="personnel" class="col-md-12 control-label pl-0"><b>Branch Contact Person</b></label>
                            <input id="personnel" type="text" class="form-control" name="personnel" required>
                            @if ($errors->has('personnel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('personnel') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-12 control-label pl-0"><b>Branch Address</b></label>
                            <textarea id="address" class="form-control texteditor" name="address"></textarea>
                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-12 control-label pl-0"><b>Branch Mobile Number</b></label>
                            <input id="mobile" type="text" class="form-control" name="mobile" required>
                            @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-12 control-label pl-0"><b>Branch Telephone Number</b></label>
                            <input id="phone" type="text" class="form-control" name="phone" required>
                            @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('page') ? ' has-error' : '' }}">
                            <label for="page" class="col-md-12 control-label pl-0"><b>Make Visible in Frontend</b></label>
                            <div class="">
                                <select class="form-control" name="display">
                                    <option value="0">Disable</option>
                                    <option value="1" selected="selected">Visible</option>
                                </select>
                            </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Add {{ ucwords($resource->type) }}</button>
                        </div>
                    </form>
                    @endif

                    @if($resource->type=='files')
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.resources.create',$resource->type) }}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-12 control-label pl-0"><b>File Title</b></label>
                            <div class="">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-12 control-label pl-0"><b>Category</b></label>
                            <div class="">
                                <select class="form-control category" name="category">
                                    <option value="Checklist Requirement" selected="selected">Checklist Requirement</option>
                                    <option value="Data Re-capture">Data Re-capture</option>
                                    <option value="Letters">Letter</option>
                                    <option value="Multifund">Multifund</option>
                                    <option value="Guidelines">Guidelines</option>
                                    <option value="Newsletters">Newsletters</option>
                                    <option value="Forms">Forms</option>
                                    <option value="Financial Statement">Financial Statement</option>
                                    <option value="Financial Funds Statements">Financial Funds Statements </option>
                                    <option value="Corporate Governance Statement">Corporate Governance Statement</option>
                                </select>
                            </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <label for="file" class="col-md-12 control-label pl-0"><b>Upload File</b></label>
                            <div class="form-control">
                                <input id="file" type="file" name="file">
                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-12 control-label pl-0"><b>Description</b></label>
                            <textarea id="description" class="form-control texteditor" name="description"></textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Add {{ ucwords($resource->type) }}</button>
                        </div>
                    </form>
                    @endif

                    @if($resource->type=='faqs')
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.resources.create',$resource->type) }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-12 control-label pl-0"><b>Category</b></label>
                            <div class="">
                                <select class="form-control" name="category">
                                    <option value="General FAQs">General FAQs</option>
                                    <option value="My Retirement Savings Account">My Retirement Savings Account</option>
                                    <option value="About My Retirement">About My Retirement</option>
                                    <option value="Multi Funds">Multi Funds</option>
                                    <option value="Micro Pension Funds">Micro Pension Funds</option>
                                </select>
                            </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                            <label for="question" class="col-md-12 control-label pl-0"><b>Question</b></label>
                            <textarea class="form-control d-none d-md-none question" name="question"></textarea>
                            <textarea id="question" class="form-control texteditor question" name="question"></textarea>
                            @if ($errors->has('question'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('question') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('answer') ? ' has-error' : '' }}">
                            <label for="answer" class="col-md-12 control-label pl-0"><b>Answer</b></label>
                            <textarea class="form-control d-none d-md-none answer" name="answer"></textarea>
                            <textarea id="answer" class="form-control texteditor answer" name="answer"></textarea>
                            @if ($errors->has('answer'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('answer') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('page') ? ' has-error' : '' }}">
                            <label for="display" class="col-md-12 control-label pl-0"><b>Make Visible in Frontend</b></label>
                            <div class="">
                                <select class="form-control" name="display">
                                    <option value="0">Disable</option>
                                    <option value="1" selected="selected">Visible</option>
                                </select>
                            </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Add {{ ucwords($resource->type) }}</button>
                        </div>
                    </form>
                    @endif

                    @if($resource->type=='jobs')
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.resources.create',$resource->type) }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-12 control-label pl-0"><b>File Title</b></label>
                            <div class="">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-12 control-label pl-0"><b>Description</b></label>
                            <textarea id="description" class="form-control texteditor description" name="description"></textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('requirements') ? ' has-error' : '' }}">
                            <label for="roles" class="col-md-12 control-label pl-0"><b>Requirements</b></label>
                            <textarea id="requirements" class="form-control texteditor requirements" name="requirements"></textarea>
                            @if ($errors->has('requirements'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('requirements') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">
                            <label for="roles" class="col-md-12 control-label pl-0"><b>Roles</b></label>
                            <textarea id="roles" class="form-control texteditor roles" name="roles"></textarea>
                            @if ($errors->has('roles'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('roles') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('needs') ? ' has-error' : '' }}">
                            <label for="needs" class="col-md-12 control-label pl-0"><b>Needs</b></label>
                            <textarea id="needs" class="form-control texteditor needs" name="needs"></textarea>
                            @if ($errors->has('needs'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('needs') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('page') ? ' has-error' : '' }}">
                            <label for="display" class="col-md-12 control-label pl-0"><b>Make Visible in Frontend</b></label>
                            <div class="">
                                <select class="form-control" name="status">
                                    <option value="0">Disable</option>
                                    <option value="1" selected="selected">Visible</option>
                                </select>
                            </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Add {{ ucwords($resource->type) }}</button>
                        </div>
                    </form>
                    @endif

                    @if($resource->type=='resources')
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.resources.create',$resource->type) }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('resource') ? ' has-error' : '' }}">
                            <label for="resource" class="col-md-12 control-label pl-0"><b>Resource</b></label>
                            <div class="">
                                <input id="resource" type="text" class="form-control" name="resource" required autofocus>
                                @if ($errors->has('resource'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('resource') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('page') ? ' has-error' : '' }}">
                            <label for="page" class="col-md-12 control-label pl-0"><b>Page</b></label>
                            <div class="">
                                <input id="page" type="text" class="form-control" name="page" required>
                                @if ($errors->has('page'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('page') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-12 control-label pl-0"><b>Slug</b></label>
                            <div class="">
                                <input id="type" type="text" class="form-control" name="type" required>
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-12 control-label pl-0"><b>Description</b></label>
                            <div class="">
                                <input id="description" type="text" class="form-control" name="description" required>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Add {{ ucwords($resource->type) }}</button>
                        </div>
                    </form>
                    @endif

                    @if($resource->type=='services')
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.resources.create',$resource->type) }}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-12 control-label pl-0"><b>Title</b></label>
                            <div class="">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-12 control-label pl-0"><b>Description</b></label>
                            <textarea id="description" class="form-control texteditor" name="description"></textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-12 control-label pl-0"><b>Award Image</b></label>
                            <div class="form-control">
                                <input id="image" type="file" name="image">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Add {{ ucwords($resource->type) }}</button>
                        </div>
                    </form>
                    @endif

                    @if($resource->type=='teams')
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.resources.create',$resource->type) }}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label pl-0"><b>Name</b></label>
                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                            <label for="position" class="col-md-12 control-label pl-0"><b>Position</b></label>
                            <div class="">
                                <input id="position" type="text" class="form-control" name="position" required>
                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-12 control-label pl-0"><b>Category</b></label>
                            <div class="">
                                <select class="form-control" name="category">
                                    <option value="Director">Director</option>
                                    <option value="Management">Management</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('profile') ? ' has-error' : '' }}">
                            <label for="profile" class="col-md-12 control-label pl-0"><b>Profile</b></label>
                            <textarea class="form-control d-none d-md-none profile" name="profile"></textarea>
                            <textarea id="profile" class="form-control texteditor profile" name="profile"></textarea>
                            @if ($errors->has('profile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('profile') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-12 control-label pl-0"><b>Image</b></label>
                            <div class="form-control">
                                <input id="image" type="file" name="image">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Add {{ ucwords($resource->type) }}</button>
                        </div>
                    </form>
                    @endif

                    @if($resource->type=='testimonials')
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.resources.create',$resource->type) }}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label pl-0"><b>Name</b></label>
                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="company" class="col-md-12 control-label pl-0"><b>Company</b></label>
                            <div class="">
                                <input id="company" type="text" class="form-control" name="company" required>
                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('testimony') ? ' has-error' : '' }}">
                            <label for="testimony" class="col-md-12 control-label pl-0"><b>Profile</b></label>
                            <textarea id="testimony" class="form-control texteditor testimony" name="testimony"></textarea>
                            @if ($errors->has('testimony'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('testimony') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-12 control-label pl-0"><b>Image</b></label>
                            <div class="form-control">
                                <input id="image" type="file" name="image">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Add {{ ucwords($resource->type) }}</button>
                        </div>
                    </form>
                    @endif

                    @if($resource->type=='history')
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.resources.create',$resource->type) }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('fundi') ? ' has-error' : '' }}">
                            <label for="fundi" class="col-md-12 control-label pl-0"><b>Fund I</b></label>
                            <div class="">
                                <input id="fundi" type="text" class="form-control" name="fundi" required autofocus>
                                @if ($errors->has('fundi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fundi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fundii') ? ' has-error' : '' }}">
                            <label for="fundii" class="col-md-12 control-label pl-0"><b>Fund II</b></label>
                            <div class="">
                                <input id="fundii" type="text" class="form-control" name="fundii" required>
                                @if ($errors->has('fundii'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fundii') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fundiii') ? ' has-error' : '' }}">
                            <label for="fundiii" class="col-md-12 control-label pl-0"><b>Fund III</b></label>
                            <div class="">
                                <input id="fundiii" type="text" class="form-control" name="fundiii" required>
                                @if ($errors->has('fundiii'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fundiii') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('fundiv') ? ' has-error' : '' }}">
                            <label for="fundiv" class="col-md-12 control-label pl-0"><b>Fund IV</b></label>
                            <div class="">
                                <input id="fundiv" type="text" class="form-control" name="fundiv" required>
                                @if ($errors->has('fundiv'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fundiv') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('fundiv') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-12 control-label pl-0"><b>Report Date</b></label>
                            <div class="">
                                <input id="date" type="text" class="form-control" name="date" required>
                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Add {{ ucwords($resource->type) }}</button>
                        </div>
                    </form>
                    @endif

                    @if($resource->type=='rate')
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.resources.create',$resource->type) }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-12 control-label pl-0"><b>Return Date</b></label>
                            <div class="">
                                <input id="date" type="text" class="form-control" name="date" required autofocus>
                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="annual" class="col-md-12 control-label pl-0"><b>Annual Rate</b></label>
                            <input id="annual" type="text" class="form-control" name="annual" required>
                            @if ($errors->has('annual'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('annual') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('triannual') ? ' has-error' : '' }}">
                            <label for="triannual" class="col-md-12 control-label pl-0"><b>3 Years Average Return</b></label>
                            <input id="triannual" type="text" class="form-control" name="triannual" required>
                            @if ($errors->has('triannual'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('triannual') }}</strong>
                                </span>
                            @endif
                        </div>
                                                
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-12 control-label pl-0"><b>Return Category</b></label>
                            <div class="">
                                <select class="form-control" name="type">
                                    <option value="RSA">RSA</option>
                                    <option value="Retiree" selected="selected">Retiree</option>
                                </select>
                            </div>
                            @if ($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Add {{ ucwords($resource->type) }}</button>
                        </div>
                    </form>
                    @endif


                </div>
            </div>
        </div>
    </div>
@endsection
