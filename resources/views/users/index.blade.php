@extends('layouts.app')

@foreach($users as $user)
    <li>{{ $user['name'] }}</li>
    @endforeach