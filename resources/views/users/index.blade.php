@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <a class="btn btn-success pull-right" href="/users/create">Create User </a>
                <br><br>
                <div class="card">       
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th>  </th>
                                    </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td> {{ $user->id }} </td>
                                        <td> {{ $user->name }} </td>
                                        <td> {{ $user->email }} </td>
                                        <td> <a  href="/users/{{$user->id}}"> View </a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    
<script>
    var app = @json($users);
    console.log(app);

</script>

@endsection