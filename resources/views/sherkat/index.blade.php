
@foreach($sherkat as $sh)

    <a href="{{route('sherkat.show',$sh->id)}}">{{ $sh->name }}</a>

@endforeach
