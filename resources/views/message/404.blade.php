<?php
use Illuminate\Support\Arr;
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content">
                <div class="notfound center padding150 m-b-md">
                    @if($message)
                        {{ $message }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection