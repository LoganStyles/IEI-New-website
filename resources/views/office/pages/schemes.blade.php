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
                        <div class="form-group{{ $errors->has('advisory_service_title') ? ' has-error' : '' }}">
                            <label for="advisory_service_title" class="col-md-12 control-label pl-0"><b>Advisory Service Title</b></label>
                            <input id="advisory_service_title" type="text" class="form-control" name="advisory_service_title" value="{{ $page->advisory_service_title }}" required>
                            @if ($errors->has('advisory_service_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('advisory_service_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('advisory_service_sub') ? ' has-error' : '' }}">
                            <label for="advisory_service_sub" class="col-md-12 control-label pl-0"><b>Advisory Service Subtitle</b></label>
                            <input id="advisory_service_sub" type="text" class="form-control" name="advisory_service_sub" value="{{ $page->advisory_service_sub }}" required>
                            @if ($errors->has('advisory_service_sub'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('advisory_service_sub') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('advisory_service_desc') ? ' has-error' : '' }}">
                            <label for="advisory_service_desc" class="col-md-12 control-label pl-0"><b>Advisory Service Description</b></label>
                            <textarea id="advisory_service_desc" class="form-control texteditor advisory_service_desc" name="advisory_service_desc">{!! $page->advisory_service_desc !!}</textarea>
                            @if ($errors->has('advisory_service_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('advisory_service_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('contribution_scheme_title') ? ' has-error' : '' }}">
                            <label for="contribution_scheme_title" class="col-md-12 control-label pl-0"><b>Contribution Scheme Title</b></label>
                            <input id="contribution_scheme_title" type="text" class="form-control" name="contribution_scheme_title" value="{{ $page->contribution_scheme_title }}" required>
                            @if ($errors->has('contribution_scheme_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contribution_scheme_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('contribution_scheme_sub') ? ' has-error' : '' }}">
                            <label for="contribution_scheme_sub" class="col-md-12 control-label pl-0"><b>Contribution Scheme Subtitle</b></label>
                            <input id="contribution_scheme_sub" type="text" class="form-control" name="contribution_scheme_sub" value="{{ $page->contribution_scheme_sub }}" required>
                            @if ($errors->has('contribution_scheme_sub'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contribution_scheme_sub') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('contribution_scheme_desc') ? ' has-error' : '' }}">
                            <label for="contribution_scheme_desc" class="col-md-12 control-label pl-0"><b>Contribution Scheme Description</b></label>
                            <textarea id="contribution_scheme_desc" class="form-control texteditor contribution_scheme_desc" name="contribution_scheme_desc">{!! $page->contribution_scheme_desc !!}</textarea>
                            @if ($errors->has('contribution_scheme_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contribution_scheme_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('planning_service_title') ? ' has-error' : '' }}">
                            <label for="planning_service_title" class="col-md-12 control-label pl-0"><b>Planning Service Title</b></label>
                            <input id="planning_service_title" type="text" class="form-control" name="planning_service_title" value="{{ $page->planning_service_title }}" required>
                            @if ($errors->has('planning_service_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('planning_service_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('planning_service_desc') ? ' has-error' : '' }}">
                            <label for="planning_service_desc" class="col-md-12 control-label pl-0"><b>Planning Service Description</b></label>
                            <textarea id="planning_service_desc" class="form-control texteditor planning_service_desc" name="planning_service_desc">{!! $page->planning_service_desc !!}</textarea>
                            @if ($errors->has('planning_service_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('planning_service_desc') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('service_scheme_image') ? ' has-error' : '' }}">
                            <label for="service_scheme_image" class="col-md-12 control-label pl-0"><b>Service Scheme Image</b></label>
                            <div class="form-control">
                                <input id="service_scheme_image" type="file" name="service_scheme_image">
                                @if ($errors->has('service_scheme_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('service_scheme_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('when_retired_title') ? ' has-error' : '' }}">
                            <label for="when_retired_title" class="col-md-12 control-label pl-0"><b>When Retired Title</b></label>
                            <input id="when_retired_title" type="text" class="form-control" name="when_retired_title" value="{{ $page->when_retired_title }}" required>
                            @if ($errors->has('when_retired_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('when_retired_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('when_retired_desc') ? ' has-error' : '' }}">
                            <label for="when_retired_desc" class="col-md-12 control-label pl-0"><b>When Retired Title</b></label>
                            <textarea id="when_retired_desc" class="form-control texteditor when_retired_desc" name="when_retired_desc">{!! $page->when_retired_desc !!}</textarea>
                            @if ($errors->has('when_retired_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('when_retired_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('what_activity_title') ? ' has-error' : '' }}">
                            <label for="what_activity_title" class="col-md-12 control-label pl-0"><b>What Activity Title</b></label>
                            <input id="what_activity_title" type="text" class="form-control" name="what_activity_title" value="{{ $page->what_activity_title }}" required>
                            @if ($errors->has('what_activity_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('what_activity_title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('what_activity_desc') ? ' has-error' : '' }}">
                            <label for="what_activity_desc" class="col-md-12 control-label pl-0"><b>What Activity Title</b></label>
                            <textarea id="what_activity_desc" class="form-control texteditor what_activity_desc" name="what_activity_desc">{!! $page->what_activity_desc !!}</textarea>
                            @if ($errors->has('what_activity_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('what_activity_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('what_income_title') ? ' has-error' : '' }}">
                            <label for="what_income_title" class="col-md-12 control-label pl-0"><b>What Income Title</b></label>
                            <input id="what_income_title" type="text" class="form-control" name="what_income_title" value="{{ $page->what_income_title }}" required>
                            @if ($errors->has('what_income_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('what_income_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('what_income_desc') ? ' has-error' : '' }}">
                            <label for="what_income_desc" class="col-md-12 control-label pl-0"><b>What Income Description</b></label>
                            <textarea id="what_income_desc" class="form-control texteditor what_income_title" name="what_income_desc">{!! $page->what_income_desc !!}</textarea>
                            @if ($errors->has('what_income_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('what_income_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('income_expect_title') ? ' has-error' : '' }}">
                            <label for="income_expect_title" class="col-md-12 control-label pl-0"><b>Income Expecting Title</b></label>
                            <input id="income_expect_title" type="text" class="form-control" name="income_expect_title" value="{{ $page->income_expect_title }}" required>
                            @if ($errors->has('income_expect_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('income_expect_title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('income_expect_desc') ? ' has-error' : '' }}">
                            <label for="income_expect_desc" class="col-md-12 control-label pl-0"><b>Income Expect Desceiption</b></label>
                            <textarea id="income_expect_desc" class="form-control texteditor" name="income_expect_desc">{!! $page->income_expect_desc !!}</textarea>
                            @if ($errors->has('income_expect_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('income_expect_desc') }}</strong>
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
