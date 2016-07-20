@if ( ! is_null($instance))
    <td>
    <a href="{{ $instance['href']  }}"
    @foreach($attributes as $key=>$value)
    {{ $key }}="{{   $value }}"
    @endforeach
    >{{ $instance['text'] }}</a>
    </td>
@endif