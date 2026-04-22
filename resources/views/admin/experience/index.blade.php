@extends('layouts.portfolio_master')
@section('title', 'Experience')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Experience</h1>
                <a href="{{ route('admin.experiences.create') }}" class="btn btn-primary mb-3">Add Experience</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Entreprise</th>
                            <th>Poste</th>
                            <th>Periode</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($experiences as $experience)
                            <tr>
                                <td>{{ $experience->id }}</td>
                                <td>{{ $experience->entreprise }}</td>
                                <td>{{ $experience->poste }}</td>
                                <td>{{ $experience->periode}}</td>
                                <td>{{ $experience->description }}</td>
                                <td>
                                    <a href="{{ route('admin.experiences.edit', $experience->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.experiences.destroy', $experience->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection 
