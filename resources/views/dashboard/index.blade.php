@extends('layouts.dashboard')

@section('title')
    Dashboard | {{ auth()->user()->name ? auth()->user()->name : ''  }}
@endsection

@section('content')
    <div class="space-y-8">
        <h1 class="text-slate-700 text-3xl">Mon tableau de bord</h1>
        @include('dashboard.stats')
        <div>
            <h1 class="text-slate-700 text-2xl mb-3">Activite recente</h1>
            <div>Activity...</div>
        </div>
    </div>
@endsection

