@extends('layouts.app')
@section('content')
    <div class="card border-light mb-3 mt-3">
        <div class="card-header"><strong>Edit Menu</strong></div>
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
                    <form class="form-horizontal col-md-12 main-menu mt-5" style="display:{{ ($param[1]=='main')?'block':'none' }}" method="POST" action="{{ route('office.menu.modify',[$param[0].'::'.$param[1]]) }}">
                        {{ csrf_field() }}
                        <h2>Main Menu</h2>
                        <input id="table" type="text" style="display:none" class="form-control" name="table" value="navigations">

                        <div class="form-group{{ $errors->has('page') ? ' has-error' : '' }} mt-5">
                            <label for="page" class="col-md-12 control-label pl-0"><b>Page Name</b></label>
                            <input id="page" type="text" class="form-control" name="page" value="{{ $selected->page }}" required="required" autofocus>
                            @if ($errors->has('page'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('page') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                            <label for="slug" class="col-md-12 control-label pl-0"><b>Menu Slug</b></label>
                            <input id="slug" type="text" class="form-control" name="slug" value="{{ $selected->slug }}" required="required">
                            @if ($errors->has('slug'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slug') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-12 control-label pl-0"><b>Page Url</b></label>
                            <input id="url" type="text" class="form-control" name="url" value="{{ $selected->url }}" required="required">
                            @if ($errors->has('url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="page" class="col-md-12 control-label pl-0"><b>Select Menu Type</b></label>
                            <select class="form-control" name="sub" required="required">
                                <option value="0" {{ ($selected->sub==0)?'selected':'' }}>Single Menu</option>
                                <option value="1" {{ ($selected->sub==1)?'selected':'' }}>Sub Menu</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Save Menu</button>
                        </div>
                    </form>

                    <form class="form-horizontal col-md-12 sub-menu mt-5"  style="display:{{ ($param[1]=='sub')?'block':'none' }}" method="POST"  action="{{ route('office.menu.modify',[$param[0].'::'.$param[1]]) }}">
                        {{ csrf_field() }}
                        <h2>Sub Menu</h2>
                        <input id="table" type="text" style="display:none" class="form-control" name="table" value="navmenus">

                        <div class="form-group{{ $errors->has('page') ? ' has-error' : '' }}">
                            <label for="page" class="col-md-12 control-label pl-0"><b>Parent Menu</b></label>
                            <select class="form-control page-top" name="top">
                                @foreach($menu as $p)
                                <option value="{{ $p->id }}" data-slug="{{ $p->slug }}" {{ ($selected->top==$p->id)?'selected':'' }}>{{ $p->page }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group{{ $errors->has('page') ? ' has-error' : '' }}" style="display:none">
                            <label for="page" class="col-md-12 control-label pl-0"><b>Select Page</b></label>
                            <select class="form-control page-parent" name="parent">
                                @foreach($menu as $p)
                                <option value="{{ $p->slug }}" {{ ($selected->parent==$p->page)?'selected':'' }}>{{ $p->page }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group{{ $errors->has('page') ? ' has-error' : '' }} mt-5">
                            <label for="page" class="col-md-12 control-label pl-0"><b>Page Name</b></label>
                            <input id="page" type="text" class="form-control" name="page" value="{{ $selected->page }}" required autofocus>
                            @if ($errors->has('page'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('page') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                            <label for="slug" class="col-md-12 control-label pl-0"><b>Menu Slug</b></label>
                            <input id="slug" type="text" class="form-control" name="slug" value="{{ $selected->slug }}" required>
                            @if ($errors->has('slug'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slug') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-12 control-label pl-0"><b>Page Url</b></label>
                            <input id="url" type="text" class="form-control" name="url" value="{{ $selected->url }}" required>
                            @if ($errors->has('url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit">Save Menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('select.page-top').change(function(){
            $('.page-parent').val($(this).children('option:selected').data('slug')).change();
        });
    </script>
@endsection
