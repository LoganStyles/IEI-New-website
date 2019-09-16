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
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.pages.strategy') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
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

                        <div class="form-group{{ $errors->has('selection_criteria_title') ? ' has-error' : '' }}">
                            <label for="selection_criteria_title" class="col-md-12 control-label pl-0"><b>Criteria Title</b></label>
                            <input id="selection_criteria_title" type="text" class="form-control" name="selection_criteria_title" value="{{ $page->selection_criteria_title }}" required>
                            @if ($errors->has('selection_criteria_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('selection_criteria_title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('selection_criteria_image') ? ' has-error' : '' }}">
                            <label for="selection_criteria_image" class="col-md-12 control-label pl-0"><b>Criteria Image</b></label>
                            <div class="form-control">
                                <input id="selection_criteria_image" type="file" name="selection_criteria_image">
                                @if ($errors->has('selection_criteria_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('selection_criteria_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('selection_criteria_desc') ? ' has-error' : '' }}">
                            <label for="selection_criteria_desc" class="col-md-12 control-label pl-0"><b>Criteria Description</b></label>
                            <textarea id="selection_criteria_desc" class="form-control texteditor selection_criteria_desc" name="selection_criteria_desc">{!! $page->selection_criteria_desc !!}</textarea>
                            @if ($errors->has('selection_criteria_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('selection_criteria_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('exit_strategy_title') ? ' has-error' : '' }}">
                            <label for="exit_strategy_title" class="col-md-12 control-label pl-0"><b>Exit Strategy Title</b></label>
                            <input id="exit_strategy_title" type="text" class="form-control" name="exit_strategy_title" value="{{ $page->exit_strategy_title }}" required>
                            @if ($errors->has('exit_strategy_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('exit_strategy_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('exit_strategy_desc') ? ' has-error' : '' }}">
                            <label for="exit_strategy_desc" class="col-md-12 control-label pl-0"><b>Exit Strategy Description</b></label>
                            <textarea id="exit_strategy_desc" class="form-control texteditor exit_strategy_desc" name="exit_strategy_desc">{!! $page->exit_strategy_desc !!}</textarea>
                            @if ($errors->has('exit_strategy_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('exit_strategy_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('need_help_title') ? ' has-error' : '' }}">
                            <label for="need_help_title" class="col-md-12 control-label pl-0"><b>Need Help Title</b></label>
                            <input id="need_help_title" type="text" class="form-control" name="need_help_title" value="{{ $page->need_help_title }}" required>
                            @if ($errors->has('need_help_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('need_help_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('need_help_desc') ? ' has-error' : '' }}">
                            <label for="need_help_desc" class="col-md-12 control-label pl-0"><b>Need Help Description</b></label>
                            <textarea id="need_help_desc" class="form-control texteditor need_help_desc" name="need_help_desc">{!! $page->need_help_desc !!}</textarea>
                            @if ($errors->has('need_help_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('need_help_desc') }}</strong>
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
