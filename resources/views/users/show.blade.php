@extends('layouts.app')


@section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">       
                        <div class="card-body">
                                
                        <label>Name: </label> {{$user->name}} <br>
                        <label>Email: </label> {{$user->email}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--     

    @include('shared.footer') --}}
@endsection

