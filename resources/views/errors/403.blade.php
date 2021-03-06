@extends('errors::tailwind-layout')
@section('message', $exception->getMessage() ?: 'Forbidden')
@section('code', 403)
@section('image-src', config('errors.403.src'))
@section('image-alt', 'Forbidden')