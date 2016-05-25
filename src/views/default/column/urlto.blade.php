@if ( ! is_null($instance))
    <a href="{{ $instance['href']  }}"
    @foreach($params as $key=>$value)
    {{ $key }}="{{   $value }}"
    @endforeach
    >{{ $instance['text'] }}</a>
@endif