@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
            <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800 mt-4 mb-4">Transaksi</h1>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table  table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Travel</th>
                                    <th>User</th>
                                    <th>Visa</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->travel_package->title }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->additional_visa }}</td>
                                        <td>{{ $item->transaction_total }}</td>
                                        <td>{{ $item->transaction_status }}</td>
                                        <td>
                                            <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary btn-square btn-outline-dashed waves-effect waves-light">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-secondary btn-square btn-outline-dashed waves-effect waves-light">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('transaction.destroy', $item->id) }}" method="post" class="d-inline">
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