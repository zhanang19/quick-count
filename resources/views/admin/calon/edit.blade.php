@extends('admin.default')

@section('page-header')
	Calon <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['CalonController@update', $item->id],
			'method' => 'put', 
			'files' => true
		])
	!!}

		@include('admin.calon.form')

		<button type="submit" class="btn btn-primary">{{ trans('Submit') }}</button>
		<button type="submit" class="btn btn-danger">{{ trans('Cancel') }}</button>
		
	{!! Form::close() !!}
	
@stop
