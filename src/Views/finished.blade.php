@extends('pdo::layouts.master')

@section('template_title')
    {{ trans('installer_messages.final.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-flag-checkered fa-fw" aria-hidden="true"></i>
    {{ trans('installer_messages.final.title') }}
@endsection

@section('container')
    <p class="text-center">
      {!! trans('installer_messages.final.finished') !!}
    </p>
    <br>
    <p class="text-center">
      {!! trans('installer_messages.final.default_access_info') !!} 
    </p>  
    <div class="buttons">
        <a href="{{ url('/') }}" class="button">{{ trans('installer_messages.final.website_url') }}</a>
    </div>
@endsection
