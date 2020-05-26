@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
            <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800 mt-4 mb-4">Paket Travel</h1>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <a class="btn btn-primary btn-square btn-outline-dashed waves-effect waves-light mb-3" href="{{ route('travel-package.create') }}">
                            <i class="fas fa-plus mr-1"></i>
                            Tambah Paket Travel
                        </a>
                        <div class="table-responsive">
                            <table class="table  table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Type</th>
                                    <th>Departure Date</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->departure_date }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>
                                            <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-secondary btn-square btn-outline-dashed waves-effect waves-light">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('travel-package.destroy', $item->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-square btn-outline-dashed waves-effect waves-light">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            Data Kosong
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div><!--end table-->     
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- container -->
@endsection