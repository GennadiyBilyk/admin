<td>
@if ( ! is_null($instance))
    <a href="{{ $instance['href']  }}"
    @foreach($attributes as $key=>$value)
    {{ $key }}="{{   $value }}"
    @endforeach
    >{{ $instance['text'] }}</a>
@endif
</td>