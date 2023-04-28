@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Contact Message All</h6>
        <hr>
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Request#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($contactMessage as $section)
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14"> {{ $loop->iteration }} </h6>
                                            </div>
                                        </div>
                                    </td>

                                    <td> {{ $section->name }} </td>
                                    <td> {{ $section->email }} </td>
                                    <td> {{ $section->subject }} </td>


                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="{{ route('fn.contact_message.edit', $section->id) }}" class=""><i
                                                    class="bx bxs-edit"></i></a>

                                            <form action="{{ route('fn.contact_message.destroy', $section->id) }}"
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
