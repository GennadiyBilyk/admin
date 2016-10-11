<td>
	<a class="{{ $class }} btnAction" id={{$id}} href="{{ $url }}" data-href="{{ $url }}" @if ($style == 'short') data-toggle="tooltip" title="{{ $value }}" @endif target="{{ $target }}">
		@if ($icon)
			<i class="fa {{ $icon }}"></i>
		@endif
		@if ($style == 'long')
			{{ $value }}
		@endif
	</a>

</td>


@if($confirm)
	<script>
		$( document ).ready(function() {
			$('#{{ $id  }}').click(function () {
				return confirm('{{ $confirm }}');
			});
		});
	</script>
@endif