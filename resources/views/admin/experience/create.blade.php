@extends('layouts.portfolio_template')
@section('title', 'Add Experience')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center">Ajouter Experience</h1>
                <form action="{{ route('admin.experiences.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="company_name">Entreprise</label>
                        <input type="text" name="entreprise" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Poste</label>
                        <input type="text" name="poste" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="start_date">Periode</label>
                        <input type="text" name="periode" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="end_date">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection