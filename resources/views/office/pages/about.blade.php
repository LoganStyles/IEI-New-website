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
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.pages.about') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-12 control-label pl-0"><b>About Image</b></label>
                            <div class="form-control">
                                <input id="image" type="file" name="image">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-12 control-label pl-0"><b>About Button Link</b></label>
                            <input id="url" type="text" class="form-control" name="url" value="{{ $page->url }}" required>
                            @if ($errors->has('url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('success_count') ? ' has-error' : '' }}">
                            <label for="success_count" class="col-md-12 control-label pl-0"><b>Success Count</b></label>
                            <div class="">
                                <input id="success_count" type="number" class="form-control" name="success_count" value="{{ $page->success_count }}" required autofocus>
                                @if ($errors->has('success_count'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('success_count') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('success_icon') ? ' has-error' : '' }}">
                            <label for="success_icon" class="col-md-12 control-label pl-0"><b>Success Icon</b></label>
                            <div class="form-control">
                                <input id="success_icon" type="file" name="success_icon">
                                @if ($errors->has('success_icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('success_icon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('success_desc') ? ' has-error' : '' }}">
                            <label for="success_desc" class="col-md-12 control-label pl-0"><b>Success Description</b></label>
                            <input id="success_desc" type="text" class="form-control" name="success_desc" value="{{ $page->success_desc }}" required>
                            @if ($errors->has('success_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('success_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('vision_title') ? ' has-error' : '' }}">
                            <label for="vision_title" class="col-md-12 control-label pl-0"><b>Vision Title</b></label>
                            <input id="vision_title" type="text" class="form-control" name="vision_title" value="{{ $page->vision_title }}" required>
                            @if ($errors->has('vision_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('vision_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('vision_icon') ? ' has-error' : '' }}">
                            <label for="vision_icon" class="col-md-12 control-label pl-0"><b>Vision Icon</b></label>
                            <input id="vision_icon" type="text" class="form-control" name="vision_icon" value="{{ $page->vision_icon }}" required>
                            @if ($errors->has('vision_icon'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('vision_icon') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('vision_desc') ? ' has-error' : '' }}">
                            <label for="vision_desc" class="col-md-12 control-label pl-0"><b>Vision Description</b></label>
                            <textarea id="vision_desc" class="form-control texteditor vision_desc" name="vision_desc">{!! $page->vision_desc !!}</textarea>
                            @if ($errors->has('vision_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('vision_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('mission_title') ? ' has-error' : '' }}">
                            <label for="mission_title" class="col-md-12 control-label pl-0"><b>Mission Title</b></label>
                            <input id="mission_title" type="text" class="form-control" name="mission_title" value="{{ $page->mission_title }}" required>
                            @if ($errors->has('mission_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mission_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('mission_icon') ? ' has-error' : '' }}">
                            <label for="mission_icon" class="col-md-12 control-label pl-0"><b>Mission Icon</b></label>
                            <input id="mission_icon" type="text" class="form-control" name="mission_icon" value="{{ $page->mission_icon }}" required>
                            @if ($errors->has('mission_icon'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mission_icon') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('mission_desc') ? ' has-error' : '' }}">
                            <label for="mission_desc" class="col-md-12 control-label pl-0"><b>Mission Description</b></label>
                            <textarea id="mission_desc" class="form-control texteditor mission_desc" name="mission_desc">{!! $page->mission_desc !!}</textarea>
                            @if ($errors->has('mission_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mission_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('ownership_title') ? ' has-error' : '' }}">
                            <label for="ownership_title" class="col-md-12 control-label pl-0"><b>Ownership Title</b></label>
                            <input id="ownership_title" type="text" class="form-control" name="ownership_title" value="{{ $page->ownership_title }}" required>
                            @if ($errors->has('ownership_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ownership_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('ownership_title') ? ' has-error' : '' }}">
                            <label for="ownership_title" class="col-md-12 control-label pl-0"><b>Ownership Icon</b></label>
                            <input id="ownership_title" type="text" class="form-control" name="ownership_title" value="{{ $page->ownership_title }}" required>
                            @if ($errors->has('ownership_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ownership_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('ownership_desc') ? ' has-error' : '' }}">
                            <label for="ownership_desc" class="col-md-12 control-label pl-0"><b>Ownership Description</b></label>
                            <textarea id="ownership_desc" class="form-control texteditor ownership_desc" name="ownership_desc">{!! $page->ownership_desc !!}</textarea>
                            @if ($errors->has('ownership_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ownership_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_one_title') ? ' has-error' : '' }}">
                            <label for="feature_one_title" class="col-md-12 control-label pl-0"><b>Featured Item One Title</b></label>
                            <input id="feature_one_title" type="text" class="form-control" name="feature_one_title" value="{{ $page->feature_one_title }}" required>
                            @if ($errors->has('feature_one_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_one_title') }}</strong>
                                </span>
                            @endif
                        </div>
                                                
                        <div class="form-group{{ $errors->has('feature_one_icon') ? ' has-error' : '' }}">
                            <label for="feature_one_icon" class="col-md-12 control-label pl-0"><b>Feature Item One Icon</b></label>
                            <div class="form-control">
                                <input id="feature_one_icon" type="file" name="feature_one_icon">
                                @if ($errors->has('feature_one_icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('feature_one_icon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_one_desc') ? ' has-error' : '' }}">
                            <label for="feature_one_desc" class="col-md-12 control-label pl-0"><b>Featured Item One Description</b></label>
                            <textarea id="feature_one_desc" class="form-control texteditor feature_one_desc" name="feature_one_desc">{!! $page->feature_one_desc !!}</textarea>
                            @if ($errors->has('feature_one_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_one_desc') }}</strong>
                                </span>
                            @endif
                        </div>                        
                        
                        <div class="form-group{{ $errors->has('feature_two_title') ? ' has-error' : '' }}">
                            <label for="feature_two_title" class="col-md-12 control-label pl-0"><b>Featured Item Two Title</b></label>
                            <input id="feature_two_title" type="text" class="form-control" name="feature_two_title" value="{{ $page->feature_two_title }}" required>
                            @if ($errors->has('feature_two_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_two_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_two_icon') ? ' has-error' : '' }}">
                            <label for="feature_two_icon" class="col-md-12 control-label pl-0"><b>Feature Item Two Icon</b></label>
                            <div class="form-control">
                                <input id="feature_two_icon" type="file" name="feature_two_icon">
                                @if ($errors->has('feature_two_icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('feature_two_icon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_two_desc') ? ' has-error' : '' }}">
                            <label for="feature_two_desc" class="col-md-12 control-label pl-0"><b>Featured Item Two Description</b></label>
                            <textarea id="feature_two_desc" class="form-control texteditor feature_two_desc" name="feature_two_desc">{!! $page->feature_two_desc !!}</textarea>
                            @if ($errors->has('feature_two_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_two_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_three_title') ? ' has-error' : '' }}">
                            <label for="feature_three_title" class="col-md-12 control-label pl-0"><b>Featured Item Three Title</b></label>
                            <input id="feature_three_title" type="text" class="form-control" name="feature_three_title" value="{{ $page->feature_three_title }}" required>
                            @if ($errors->has('feature_three_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_three_title') }}</strong>
                                </span>
                            @endif
                        </div>
                                                
                        <div class="form-group{{ $errors->has('feature_three_icon') ? ' has-error' : '' }}">
                            <label for="feature_three_icon" class="col-md-12 control-label pl-0"><b>Feature Item Three Icon</b></label>
                            <div class="form-control">
                                <input id="feature_three_icon" type="file" name="feature_three_icon">
                                @if ($errors->has('feature_three_icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('feature_three_icon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_three_desc') ? ' has-error' : '' }}">
                            <label for="feature_three_desc" class="col-md-12 control-label pl-0"><b>Featured Item Three Description</b></label>
                            <textarea id="feature_three_desc" class="form-control texteditor feature_three_desc" name="feature_three_desc">{!! $page->feature_three_desc !!}</textarea>
                            @if ($errors->has('feature_three_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_three_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_four_title') ? ' has-error' : '' }}">
                            <label for="feature_four_title" class="col-md-12 control-label pl-0"><b>Featured Item Four Title</b></label>
                            <input id="feature_four_title" type="text" class="form-control" name="feature_four_title" value="{{ $page->feature_four_title }}" required>
                            @if ($errors->has('feature_four_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_four_title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('feature_four_icon') ? ' has-error' : '' }}">
                            <label for="feature_four_icon" class="col-md-12 control-label pl-0"><b>Feature Item Four Icon</b></label>
                            <div class="form-control">
                                <input id="feature_four_icon" type="file" name="feature_four_icon">
                                @if ($errors->has('feature_four_icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('feature_four_icon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_four_desc') ? ' has-error' : '' }}">
                            <label for="feature_four_desc" class="col-md-12 control-label pl-0"><b>Featured Item Four Description</b></label>
                            <textarea id="feature_four_desc" class="form-control texteditor feature_four_desc" name="feature_four_desc">{!! $page->feature_four_desc !!}</textarea>
                            @if ($errors->has('feature_four_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_four_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_five_title') ? ' has-error' : '' }}">
                            <label for="feature_five_title" class="col-md-12 control-label pl-0"><b>Featured Item Five Title</b></label>
                            <input id="feature_five_title" type="text" class="form-control" name="feature_five_title" value="{{ $page->feature_five_title }}" required>
                            @if ($errors->has('feature_five_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_five_title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('feature_five_icon') ? ' has-error' : '' }}">
                            <label for="feature_five_icon" class="col-md-12 control-label pl-0"><b>Feature Item Five Icon</b></label>
                            <div class="form-control">
                                <input id="feature_five_icon" type="file" name="feature_five_icon">
                                @if ($errors->has('feature_five_icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('feature_five_icon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_five_desc') ? ' has-error' : '' }}">
                            <label for="feature_five_desc" class="col-md-12 control-label pl-0"><b>Featured Item Five Description</b></label>
                            <textarea id="feature_five_desc" class="form-control texteditor feature_five_desc" name="feature_five_desc">{!! $page->feature_five_desc !!}</textarea>
                            @if ($errors->has('feature_five_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_five_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_six_title') ? ' has-error' : '' }}">
                            <label for="feature_six_title" class="col-md-12 control-label pl-0"><b>Featured Item Six Title</b></label>
                            <input id="feature_six_title" type="text" class="form-control" name="feature_six_title" value="{{ $page->feature_six_title }}" required>
                            @if ($errors->has('feature_six_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_six_title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('feature_six_icon') ? ' has-error' : '' }}">
                            <label for="feature_six_icon" class="col-md-12 control-label pl-0"><b>Feature Item Six Icon</b></label>
                            <div class="form-control">
                                <input id="feature_six_icon" type="file" name="feature_six_icon">
                                @if ($errors->has('feature_six_icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('feature_six_icon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('feature_six_desc') ? ' has-error' : '' }}">
                            <label for="feature_six_desc" class="col-md-12 control-label pl-0"><b>Featured Item Six Description</b></label>
                            <textarea id="feature_six_desc" class="form-control texteditor feature_six_desc" name="feature_six_desc">{!! $page->feature_six_desc !!}</textarea>
                            @if ($errors->has('feature_six_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('feature_six_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('help_call_action') ? ' has-error' : '' }}">
                            <label for="help_call_action" class="col-md-12 control-label pl-0"><b>Help Description</b></label>
                            <textarea id="help_call_action" class="form-control texteditor help_call_action" name="help_call_action">{!! $page->help_call_action !!}</textarea>
                            @if ($errors->has('help_call_action'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('help_call_action') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('help_call_links') ? ' has-error' : '' }}">
                            <label for="help_call_links" class="col-md-12 control-label pl-0"><b>Help Link</b></label>
                            <input id="help_call_links" type="text" class="form-control" name="help_call_links" value="{{ $page->help_call_links }}" required>
                            @if ($errors->has('help_call_links'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('help_call_links') }}</strong>
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
