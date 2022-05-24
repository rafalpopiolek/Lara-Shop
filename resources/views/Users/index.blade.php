@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Imię</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname ?? '-' }}</td>
                    <td>
                        <button class="btn btn-danger btn-sm delete" data-id="{{ $user->id }}">
                            X
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection

@section('javascript')
    $(function() {
        $('.delete').click(function () {
            $.ajax({
                type: "DELETE",
                url: "http://localhost:3000/users/" + $(this).data("id"),
            })
            .done(function (response) {
                window.location.reload();
            })
            .fail(function (response) {
                alert("ERROR");
            });
        });
    });
@endsection
