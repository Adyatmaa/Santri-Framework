@extends('layouts.santri')
@section('content')
    <section>
        <div class="">
            <p>Howdy, {{ auth()->user()->nama }}</p>
        </div>
    </section>
@endsection
