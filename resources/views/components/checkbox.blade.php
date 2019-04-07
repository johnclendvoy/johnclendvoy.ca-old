<div class="form-group">
	<input type="hidden" name="{{$name}}" value="0">
	<div class="checkbox">
		<label>
			<input type="checkbox" name="{{$name}}" value="1"
			{{ !empty($item->id) && $item->{$name} == '1' ? 'checked' : '' }}
			{{ empty($item) && old($name) == '1' ? 'checked' : '' }}
			> {{ $title ?? title_case($name)}}
		</label>
	</div>
</div>