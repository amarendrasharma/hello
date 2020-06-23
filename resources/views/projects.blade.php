@extends('layouts.tailwind-layout')
@section('content')
<div class="container mx-auto">
        <div class="mb-16">
            @component('components.project-card')
            @endcomponent
        </div>
        <div class="mb-16">
            @component('components.project-card')
            @endcomponent
        </div>
        <div class="mb-16">
            @component('components.project-card')
            @endcomponent
    </div>
</div>
    @endsection