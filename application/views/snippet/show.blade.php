@layout('master')

@section('stylesheets')
	{{ HTML::style('code-prettify/src/prettify.css') }}
@endsection

@section('main')
	<pre class="prettyprint linenums">{{htmlspecialchars($snippet)}}</pre>

	<div class="btn-group nav">
	{{ HTML::link_to_route('fork_snippet', 'Fork', $id, array('class' => 'btn btn-warning')) }}
	{{ HTML::link_to_route('new_snippet', 'New', '', array('class' => 'btn btn-success'))}}
	</div>
@endsection


@section('scripts')
	{{ HTML::script('code-prettify/src/prettify.js') }}
	<script>
	prettyPrint()
	</script>
@endsection

