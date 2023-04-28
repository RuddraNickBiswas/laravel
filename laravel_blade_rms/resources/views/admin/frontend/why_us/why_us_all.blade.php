@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
<h6 class="mb-0 text-uppercase">Why Us All</h6>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead class="">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($whyUs as $section)
                                    <tr>
                                       <th scope="row">{{ $loop->iteration }}</th>
                                       
                                        <td>{{ $section->title }}</td>
                                        <td>{{ $section->description }}</td>
                                        <td class="d-flex align-items-center">
                                            <a href="{{ route('fn.why_us.edit', $section->id) }}" class="btn btn-info mr-4"><i
                                                    class="fadeIn animated bx bx-edit-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
