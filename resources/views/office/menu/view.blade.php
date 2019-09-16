@extends('layouts.app')
@section('content')
    <div class="card border-light mb-3 mt-3">
        <div class="card-header"><strong>View Menu</strong></div>
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
                    <table class="datatable table table-striped table-hover table-bordered table-responsive w-100">
                    <colgroup span="3"></colgroup>
                        <thead>
                            <tr>
                            <th scope="col">Page</th>
                            <th scope="col">Link</th>
                            <th scope="col">Last Updated</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                            @foreach($pages as $menu)
                                @if($menu->sub)
                                <tr>
                                    <th scope="row">{{ $menu->page }}</th>
                                    <th>Sub Menu</th>
                                    <th>Link</th>
                                    <th>
                                        <a href="{{ route('office.menu.modify', ['type'=>$menu->slug.'::main']) }}" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> Edit {{ $menu->page }}</a>
                                        <a data-href="{{ route('office.menu.delete', ['type'=>$menu->slug.'::main']) }}" class="btn btn-xs btn-danger del text-white"><i class="fas fa-trash"></i> Delete</a>
                                    </th>
                                </tr>
                                <tr>
                                    <th rowspan="{{ count($menu->menu)+1 }}" scope="rowgroup"></th>
                                </tr>
                                @foreach($menu->menu as $sub)
                                <tr>
                                    <td>{{ $sub->page }}</td>
                                    <td>{{ $sub->url }}</td>
                                    <td>
                                        <a href="{{ route('office.menu.modify', ['type'=>$sub->slug.'::sub']) }}" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                        <a data-href="{{ route('office.menu.delete', ['type'=>$sub->slug.'::sub']) }}" class="btn btn-xs btn-danger del text-white"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td>{{ $menu->page }}</td>
                                    <td>{{ $menu->url }}</td>
                                    <td>{{ $menu->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('office.menu.modify', ['type'=>$menu->slug.'::main']) }}" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                        <a data-href="{{ route('office.menu.delete', ['type'=>$menu->slug.'::main']) }}" class="btn btn-xs btn-danger del text-white"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
