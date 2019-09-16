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
                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('office.pages.home') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-12 control-label pl-0"><b>Page Title</b></label>
                            <div class="">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $page->title }}" required autofocus>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-12 control-label pl-0"><b>Page Description</b></label>
                            <input id="description" type="text" class="form-control" name="description" value="{{ $page->description }}" required>
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

                        <div class="form-group{{ $errors->has('slide_one_p') ? ' has-error' : '' }}">
                            <label for="slide_one_p" class="col-md-12 control-label pl-0"><b>Slide One Sub Heading</b></label>
                            <input id="slide_one_p" type="slide_one_p" class="form-control" name="slide_one_p" value="{{ $page->slide_one_p }}" required>
                            @if ($errors->has('slide_one_p'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_one_p') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_one_h2') ? ' has-error' : '' }}">
                            <label for="slide_one_h2" class="col-md-12 control-label pl-0"><b>Slide One Main Heading</b></label>
                            <input id="slide_one_h2" type="slide_one_h2" class="form-control" name="slide_one_h2" value="{{ $page->slide_one_h2 }}" required>
                            @if ($errors->has('slide_one_h2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_one_h2') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_one_image') ? ' has-error' : '' }}">
                            <label for="slide_one_image" class="col-md-12 control-label pl-0"><b>Slide One Image</b></label>
                            <div class="form-control">
                                <input id="slide_one_image" type="file" name="slide_one_image">
                                @if ($errors->has('slide_one_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slide_one_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('slide_one_url') ? ' has-error' : '' }}">
                            <label for="slide_one_url" class="col-md-12 control-label pl-0"><b>Link Slide One</b></label>
                            <input id="slide_one_url" type="text" class="form-control" name="slide_one_url" value="{{ $page->slide_one_url }}" required>
                            @if ($errors->has('slide_one_url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_one_url') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_two_p') ? ' has-error' : '' }}">
                            <label for="slide_two_p" class="col-md-12 control-label pl-0"><b>Slide Two Sub Heading</b></label>
                            <input id="slide_two_p" type="slide_two_p" class="form-control" name="slide_two_p" value="{{ $page->slide_two_p }}" required>
                            @if ($errors->has('slide_two_p'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_two_p') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_two_h2') ? ' has-error' : '' }}">
                            <label for="slide_two_h2" class="col-md-12 control-label pl-0"><b>Slide Two Main Heading</b></label>
                            <input id="slide_two_h2" type="slide_two_h2" class="form-control" name="slide_two_h2" value="{{ $page->slide_two_h2 }}" required>
                            @if ($errors->has('slide_two_h2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_two_h2') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_two_image') ? ' has-error' : '' }}">
                            <label for="slide_two_image" class="col-md-12 control-label pl-0"><b>Slide Two Image</b></label>
                            <div class="form-control">
                                <input id="slide_two_image" type="file" name="slide_two_image">
                                @if ($errors->has('slide_two_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slide_two_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('slide_two_url') ? ' has-error' : '' }}">
                            <label for="slide_two_url" class="col-md-12 control-label pl-0"><b>Link Slide Two</b></label>
                            <input id="slide_two_url" type="text" class="form-control" name="slide_two_url" value="{{ $page->slide_two_url }}" required>
                            @if ($errors->has('slide_two_url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_two_url') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group{{ $errors->has('slide_three_p') ? ' has-error' : '' }}">
                            <label for="slide_three_p" class="col-md-12 control-label pl-0"><b>Slide Three Sub Heading</b></label>
                            <input id="slide_three_p" type="slide_three_p" class="form-control" name="slide_three_p" value="{{ $page->slide_three_p }}" required>
                            @if ($errors->has('slide_three_p'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_three_p') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_three_h2') ? ' has-error' : '' }}">
                            <label for="slide_three_h2" class="col-md-12 control-label pl-0"><b>Slide Three Main Heading</b></label>
                            <input id="slide_three_h2" type="slide_three_h2" class="form-control" name="slide_three_h2" value="{{ $page->slide_three_h2 }}" required>
                            @if ($errors->has('slide_three_h2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_three_h2') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_three_image') ? ' has-error' : '' }}">
                            <label for="slide_three_image" class="col-md-12 control-label pl-0"><b>Slide Three Image</b></label>
                            <div class="form-control">
                                <input id="slide_three_image" type="file" name="slide_three_image">
                                @if ($errors->has('slide_three_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slide_three_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('slide_three_url') ? ' has-error' : '' }}">
                            <label for="slide_three_url" class="col-md-12 control-label pl-0"><b>Link Slide Three</b></label>
                            <input id="slide_three_url" type="text" class="form-control" name="slide_three_url" value="{{ $page->slide_three_url }}" required>
                            @if ($errors->has('slide_three_url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_three_url') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_four_p') ? ' has-error' : '' }}">
                            <label for="slide_four_p" class="col-md-12 control-label pl-0"><b>Slide Four Sub Heading</b></label>
                            <input id="slide_four_p" type="text" class="form-control" name="slide_four_p" value="{{ $page->slide_four_p }}" required>
                            @if ($errors->has('slide_four_p'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_four_p') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_four_h2') ? ' has-error' : '' }}">
                            <label for="slide_four_h2" class="col-md-12 control-label pl-0"><b>Slide Four Main Heading</b></label>
                            <input id="slide_four_h2" type="text" class="form-control" name="slide_four_h2" value="{{ $page->slide_four_h2 }}" required>
                            @if ($errors->has('slide_four_h2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_four_h2') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_four_image') ? ' has-error' : '' }}">
                            <label for="slide_four_image" class="col-md-12 control-label pl-0"><b>Slide Four Image</b></label>
                            <div class="form-control">
                                <input id="slide_four_image" type="file" name="slide_four_image">
                                @if ($errors->has('slide_four_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slide_four_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('slide_four_url') ? ' has-error' : '' }}">
                            <label for="slide_four_url" class="col-md-12 control-label pl-0"><b>Link Slide Four</b></label>
                            <input id="slide_four_url" type="text" class="form-control" name="slide_four_url" value="{{ $page->slide_four_url }}" required>
                            @if ($errors->has('slide_four_url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_four_url') }}</strong>
                                </span>
                            @endif
                        </div>                        

                        <div class="form-group{{ $errors->has('slide_five_p') ? ' has-error' : '' }}">
                            <label for="slide_five_p" class="col-md-12 control-label pl-0"><b>Slide Five Sub Heading</b></label>
                            <input id="slide_five_p" type="text" class="form-control" name="slide_five_p" value="{{ $page->slide_five_p }}" required>
                            @if ($errors->has('slide_five_p'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_five_p') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_five_h2') ? ' has-error' : '' }}">
                            <label for="slide_five_h2" class="col-md-12 control-label pl-0"><b>Slide Five Main Heading</b></label>
                            <input id="slide_five_h2" type="text" class="form-control" name="slide_five_h2" value="{{ $page->slide_five_h2 }}" required>
                            @if ($errors->has('slide_five_h2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_five_h2') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slide_five_image') ? ' has-error' : '' }}">
                            <label for="slide_five_image" class="col-md-12 control-label pl-0"><b>Slide Five Image</b></label>
                            <div class="form-control">
                                <input id="slide_five_image" type="file" name="slide_five_image">
                                @if ($errors->has('slide_five_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slide_five_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('slide_five_url') ? ' has-error' : '' }}">
                            <label for="slide_five_url" class="col-md-12 control-label pl-0"><b>Link Slide Five</b></label>
                            <input id="slide_five_url" type="text" class="form-control" name="slide_five_url" value="{{ $page->slide_five_url }}" required>
                            @if ($errors->has('slide_five_url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('slide_five_url') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('widget_one_title') ? ' has-error' : '' }}">
                            <label for="widget_one_title" class="col-md-12 control-label pl-0"><b>Widget One Title</b></label>
                            <input id="widget_one_title" type="text" class="form-control" name="widget_one_title" value="{{ $page->widget_one_title }}" required>
                            @if ($errors->has('widget_one_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('widget_one_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('widget_one_desc') ? ' has-error' : '' }}">
                            <label for="widget_one_desc" class="col-md-12 control-label pl-0"><b>Widget One Description</b></label>
                            <textarea id="widget_one_desc" class="form-control texteditor widget_one_desc" name="widget_one_desc">{!! $page->widget_one_desc !!}</textarea>
                            @if ($errors->has('widget_one_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('widget_one_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('widget_two_title') ? ' has-error' : '' }}">
                            <label for="widget_two_title" class="col-md-12 control-label pl-0"><b>Widget Two Title</b></label>
                            <input id="widget_two_title" type="text" class="form-control" name="widget_two_title" value="{{ $page->widget_two_title }}" required>
                            @if ($errors->has('widget_two_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('widget_two_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('widget_two_desc') ? ' has-error' : '' }}">
                            <label for="widget_two_desc" class="col-md-12 control-label pl-0"><b>Widget One Description</b></label>
                            <textarea id="widget_two_desc" class="form-control texteditor widget_two_desc" name="widget_two_desc">{!! $page->widget_two_desc !!}</textarea>
                            @if ($errors->has('widget_two_desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('widget_two_desc') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('services_title') ? ' has-error' : '' }}">
                            <label for="services_title" class="col-md-12 control-label pl-0"><b>Services Title</b></label>
                            <input id="services_title" type="text" class="form-control" name="services_title" value="{{ $page->services_title }}" required>
                            @if ($errors->has('services_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('services_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('work_with_title') ? ' has-error' : '' }}">
                            <label for="work_with_title" class="col-md-12 control-label pl-0"><b>Work with Title</b></label>
                            <textarea id="work_with_title" class="form-control texteditor work_with_title" name="work_with_title">{!! $page->work_with_title !!}</textarea>
                            @if ($errors->has('work_with_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('work_with_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('work_with_widget_one') ? ' has-error' : '' }}">
                            <label for="work_with_widget_one" class="col-md-12 control-label pl-0"><b>Work with Widget One</b></label>
                            <textarea id="work_with_widget_one" class="form-control texteditor work_with_widget_one" name="work_with_widget_one">{!! $page->work_with_widget_one !!}</textarea>
                            @if ($errors->has('work_with_widget_one'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('work_with_widget_one') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('work_with_widget_two') ? ' has-error' : '' }}">
                            <label for="work_with_widget_two" class="col-md-12 control-label pl-0"><b>Work with Widget One</b></label>
                            <textarea id="work_with_widget_two" class="form-control texteditor work_with_widget_two" name="work_with_widget_two">{!! $page->work_with_widget_two !!}</textarea>
                            @if ($errors->has('work_with_widget_two'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('work_with_widget_two') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('testimonial_title') ? ' has-error' : '' }}">
                            <label for="testimonial_title" class="col-md-12 control-label pl-0"><b>Testimonials Title</b></label>
                            <input id="testimonial_title" type="text" class="form-control" name="testimonial_title" value="{{ $page->testimonial_title }}" required>
                            @if ($errors->has('testimonial_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('testimonial_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('awards_title') ? ' has-error' : '' }}">
                            <label for="awards_title" class="col-md-12 control-label pl-0"><b>Awards Title</b></label>
                            <input id="awards_title" type="text" class="form-control" name="awards_title" value="{{ $page->awards_title }}" required>
                            @if ($errors->has('awards_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('awards_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('notice_title') ? ' has-error' : '' }}">
                            <label for="notice_title" class="col-md-12 control-label pl-0"><b>Notice Modal Title</b></label>
                            <input id="notice_title" type="text" class="form-control" name="notice_title" value="{{ $page->notice_title }}" required>
                            @if ($errors->has('notice_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('notice_title') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('notice_body') ? ' has-error' : '' }}">
                            <label for="notice_body" class="col-md-12 control-label pl-0"><b>Notice Modal Content</b></label>
                            <textarea id="notice_body" class="form-control texteditor notice_body" name="notice_body">{!! $page->notice_body !!}</textarea>
                            @if ($errors->has('notice_body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('notice_body') }}</strong>
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
