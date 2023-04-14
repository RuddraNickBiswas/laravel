@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
<h6 class="mb-0 text-uppercase">All Menu Types</h6>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead class="">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">visibility</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menuTypes as $section)
                                    <tr>
                                        <th scope="row">{{ $section->id }}</th>
                                       
                                        <td>{{ $section->name }}</td>
                                        <td>{{ $section->visibility }}</td>
                                        <td class="d-flex align-items-center">
                                            <a href="{{ route('fn.menu_type.edit', $section->id) }}" class="btn btn-info mr-4"><i
                                                    class="fadeIn animated bx bx-edit-alt"></i></a>
                                            <div class="p-1"></div>
                                            <form action="{{ route('fn.menu_type.delete', $section->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fadeIn animated bx bx-trash-alt"></i></button>
                                            </form>
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
