@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit User
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <label>
                            Name
                        </label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">

                        <label>
                            Agency:
                        </label>
                        <select name="agency_id" class="form-control @error('agency') is-invalid @enderror" required autocomplete="off">
                            @foreach ($agencies as $agency)
                                <option value="{{ $agency->id }}" {{ $user->agency_id == $agency->id ? 'selected' : '' }}>
                                    {{$agency->name }}
                                </option>
                            @endforeach
                        </select>

                        <label>
                            Type:
                        </label>
                        <select name="type" class="form-control @error('type') is-invalid @enderror" required autocomplete="off">
                            <option value="0"  {{ $user->type == 0 ? 'selected' : '' }}>Regular</option>
                            <option value="1"  {{ $user->type == 1 ? 'selected' : '' }}>Staff</option>
                            <option value="2"  {{ $user->type == 2 ? 'selected' : '' }}>Admin</option>
                        </select>

                        <button class="btn btn-primary mt-1 float-right">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection