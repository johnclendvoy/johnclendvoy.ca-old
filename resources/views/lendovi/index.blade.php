

<div id="lendovi"></div>

<script>

var word = '{{$word}}';
var offset_x = {{$x}};
var offset_y = {{$y}};

var center_x;
var center_y;

@if($cx != '')
center_x = {{$cx}};
@endif

@if($cy != '')
center_y = {{$cy}};
@endif

var font_size = {{$size}};

var bg_color = '#{{$bg}}';

var colors = [
@foreach($colors as $col)
'#{{$col}}',
@endforeach
];

</script>

<script type="text/javascript" src="/plugins/p5/libraries/p5.js"></script>
<script language="javascript" type="text/javascript" src="/js/sketches/lendovi/lendovi.js"></script>

