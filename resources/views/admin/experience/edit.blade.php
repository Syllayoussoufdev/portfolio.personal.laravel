@extends('layouts.portfolio_master')
@section('title', 'Edit experiences')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center">Edit Experience</h1>
                <form action="{{ route('admin.experiences.update', $experience->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="company_name">Entreprise</label>
                        <input type="text" name="company_name" class="form-control" value="{{ $experience->company_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Poste</label>
                        <input type="text" name="position" class="form-control" value="{{ $experience->position }}" required>
                    </div>
                    <div class="form-group">
                        <label for="start_date">Periode</label>
                        <input type="date" name="start_date" class="form-control" value="{{ $experience->start_date }}" required>
                    </div> 
                    <div class="form-group">
                        <label for="end_date">Description</label>
                        <input type="text" name="end_date" class="form-control" value="{{ $experience->description }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection