@extends('layouts.app')
@section('content')
    <div class="card border-light mb-3 mt-3">
        <div class="card-header"><strong>Edit Page</strong></div>
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
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.pages.modify',$page->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('page') ? ' has-error' : '' }}">
                            <label for="page" class="col-md-12 control-label pl-0"><b>Select Page</b></label>
                            <div class="">
                                <select class="form-control page">
                                    @foreach($pages as $p)
                                    <option value="{{ $p->id }}" {{ ($p->id==$page->id)? 'selected':'' }}>{{ $p->page }}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('page') ? ' has-error' : '' }} mt-5">
                            <label for="page" class="col-md-12 control-label pl-0"><b>Page Name</b></label>
                            <div class="">
                                <input id="page" type="text" class="form-control" name="page" value="{{ $page->page }}" required autofocus>
                                @if ($errors->has('page'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('page') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-12 control-label pl-0"><b>Title</b></label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ $page->title }}" required>
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="subtitle" class="col-md-12 control-label pl-0"><b>Sub Title</b></label>
                            <input id="subtitle" type="subtitle" class="form-control" name="subtitle" value="{{ $page->subtitle }}" required>
                            @if ($errors->has('subtitle'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('subtitle') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('alias') ? ' has-error' : '' }}">
                            <label for="alias" class="col-md-12 control-label pl-0"><b>Page Alias</b></label>
                            <input id="alias" type="text" class="form-control" name="alias" value="{{ $page->alias }}" required>
                            @if ($errors->has('alias'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('alias') }}</strong>
                                </span>
                            @endif
                        </div>                        

                        <div class="form-group{{ $errors->has('breadcrumbs_background') ? ' has-error' : '' }}">
                            <label for="breadcrumbs_background" class="col-md-12 control-label pl-0"><b>Breadcrumbs Background Image</b></label>
                            <div class="form-control">
                                <input id="breadcrumbs_background" type="file" name="breadcrumbs_background">
                                @if ($errors->has('breadcrumbs_background'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('breadcrumbs_background') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('parent') ? ' has-error' : '' }}">
                            <label for="parent" class="col-md-12 control-label pl-0"><b>Menu</b></label>
                            <input id="parent" type="text" class="form-control" name="parent" value="{{ $page->parent }}" required>
                            @if ($errors->has('parent'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('parent') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-12 control-label pl-0"><b>Description</b></label>
                            <input id="description" type="text" class="form-control" name="description" value="{{ $page->description }}" required>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('content_title') ? ' has-error' : '' }}">
                            <label for="content_title" class="col-md-12 control-label pl-0"><b>Content Title</b></label>
                            <textarea class="form-control d-none d-md-none content_title" name="content_title">{!! $page->content_title !!}</textarea>
                            <textarea id="content_title" class="form-control texteditor content_title" name="content_title">{!! $page->content_title !!}</textarea>
                            @if ($errors->has('content_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('content_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-12 control-label pl-0"><b>Page Content</b></label>
                            <textarea class="form-control d-none d-md-none content" name="content">{!! $page->content !!}</textarea>
                            <textarea id="content" class="form-control texteditor content height" name="content">{!! $page->content !!}</textarea>
                            @if ($errors->has('content'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Save Page</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('select.page').change(function(){
            $(location).attr('href',"{{ url('office/pages/modify/') }}/"+$(this).val() );
        })
    </script>
@endsection
