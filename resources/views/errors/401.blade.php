@extends('errors::minimal')
<h2>{{ $exception->getMessage() }}</h2>
@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
