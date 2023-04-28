@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-0 text-uppercase">Book Table Request </h6>
                <hr>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Request#</th>
                                <th>Status</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>People</th>
                                <th>Requested</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($bookTableAll as $section)
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14"> {{ $loop->iteration }} </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="badge rounded-pill @if ($section->status == 'pending') text-info bg-light-info @elseif ($section->status == 'rejected') text-danger bg-light-danger @else text-success bg-light-success @endif p-2 text-uppercase px-3">
                                            <i class="bx bxs-circle me-1"></i>{{ strtoupper($section->status) }}
                                        </div>
                                    </td>
                                    <td> {{ $section->name }} </td>
                                    <td> {{ $section->email }} </td>
                                    <td> {{ $section->phone }} </td>
                                    <td> {{ $section->people }} </td>
                                    <td> {{ $section->created_at->format('y-m-d H') }} </td>
                                    <td> {{ $section->date }} </td>

                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="{{ route('fn.book_table.edit', $section->id) }}" class=""><i
                                                    class="bx bxs-edit"></i></a>

                                            <form action="{{ route('fn.book_table.destroy', $section->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="ms-3  btn-sm btn-light "><i
                                                        class="bx bxs-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
