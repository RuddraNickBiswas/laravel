@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead class="">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($heroSection as $section)
                                    <tr>
                                        <th scope="row">{{ $section->id }}</th>
                                        <td><img src=" {{ asset($section->bg_image) }} " alt="{{ $section->title }}"
                                                width="100" height="50">
                                        </td>
                                        <td>{{ $section->title }}</td>
                                        <td class="d-flex align-items-center">
                                            <a href="{{ route('fn.hero.edit', $section->id) }}" class="btn btn-info mr-4"><i
                                                    class="fadeIn animated bx bx-edit-alt"></i></a>

<div class="p-1"></div>
                                            <form action="{{ route('fn.hero.delete', $section->id) }}" method="POST">
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
