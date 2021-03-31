@extends('layout')

@section('section')
    <h1>Team</h1>
    @foreach($teamWork as $item)
        <a href="{{route('team',$item)}}">{{$item}}</a><br>
    @endforeach
    @if(!empty($name))
        @switch($name)
            @case($name == 'Andres')
                <h2 class="mt-5">El nombre es {{$name}}</h2>
                <p>{{ $name }} suscipit risus libero, id dictum est hendrerit vitae. Etiam vitae eros et felis varius ullamcorper sed sed arcu. Praesent lacinia magna et rutrum dictum. Cras euismod nisi vitae enim semper euismod. Ut nulla purus, malesuada blandit lorem nec, interdum consequat lacus. Phasellus dapibus id purus at suscipit. Praesent egestas felis risus, ut facilisis arcu tincidunt sit amet.</p>
            @break
            @case($name == 'Fidel')
                <h2 class="mt-5">El nombre es {{$name}}</h2>
                <p>{{ $name }} suscipit risus libero, id dictum est hendrerit vitae. Etiam vitae eros et felis varius ullamcorper sed sed arcu. Praesent lacinia magna et rutrum dictum. Cras euismod nisi vitae enim semper euismod. Ut nulla purus, malesuada blandit lorem nec, interdum consequat lacus. Phasellus dapibus id purus at suscipit. Praesent egestas felis risus, ut facilisis arcu tincidunt sit amet.</p>
            @break
            @case($name == 'Ariel')
                <h2 class="mt-5">El nombre es {{$name}}</h2>
                <p>{{ $name }} suscipit risus libero, id dictum est hendrerit vitae. Etiam vitae eros et felis varius ullamcorper sed sed arcu. Praesent lacinia magna et rutrum dictum. Cras euismod nisi vitae enim semper euismod. Ut nulla purus, malesuada blandit lorem nec, interdum consequat lacus. Phasellus dapibus id purus at suscipit. Praesent egestas felis risus, ut facilisis arcu tincidunt sit amet.</p>
            @break
            @case($name == 'Daniel')
                <h2 class="mt-5">El nombre es {{$name}}</h2>
                <p>{{ $name }} suscipit risus libero, id dictum est hendrerit vitae. Etiam vitae eros et felis varius ullamcorper sed sed arcu. Praesent lacinia magna et rutrum dictum. Cras euismod nisi vitae enim semper euismod. Ut nulla purus, malesuada blandit lorem nec, interdum consequat lacus. Phasellus dapibus id purus at suscipit. Praesent egestas felis risus, ut facilisis arcu tincidunt sit amet.</p>
            @break
            @case($name == 'Rimer')
                <h2 class="mt-5">El nombre es {{$name}}</h2>
                <p>{{ $name }} suscipit risus libero, id dictum est hendrerit vitae. Etiam vitae eros et felis varius ullamcorper sed sed arcu. Praesent lacinia magna et rutrum dictum. Cras euismod nisi vitae enim semper euismod. Ut nulla purus, malesuada blandit lorem nec, interdum consequat lacus. Phasellus dapibus id purus at suscipit. Praesent egestas felis risus, ut facilisis arcu tincidunt sit amet.</p>
            @break
        @endswitch
    @endif
@endsection
