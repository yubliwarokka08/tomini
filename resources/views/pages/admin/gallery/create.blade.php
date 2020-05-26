@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
            <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800 mt-4 mb-4">Tambah Gallery</h1>
          </div>
        <!-- end page title end breadcrumb -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="travel_packages_id">Paket Travel</label>
                        <select name="travel_packages_id" required class="form-control">
                            <option value="">Pilih Paket Travel</option>
                            @foreach ($travel_packages as $travel_package)
                            <option value="{{ $travel_package->id }}">
                                {{ $travel_package->title }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Image">
                    </div>
                    <button type="submit" class="btn btn-primary btn-square btn-outline-dashed waves-effect waves-light btn-block">
                        <i class="fas fa-save mr-1"></i>
                        Simpan Data Gallery
                    </button>
                </form>
            </div>
        </div>

    </div>
    <!-- container -->
@endsection