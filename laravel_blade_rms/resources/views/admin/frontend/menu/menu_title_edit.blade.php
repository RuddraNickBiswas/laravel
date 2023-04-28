@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Edit Menu Title title</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.menu_title.update', $menuTitle->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="form-group row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Title') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror" name="title"
                                            value="{{ old('title', $menuTitle->title) }}" required autocomplete="title"
                                            autofocus>

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="title_colored" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Title Colored') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="title_colored" type="text"
                                            class="form-control @error('title_colored') is-invalid @enderror" name="title_colored"
                                            value="{{ old('title_colored', $menuTitle->title_colored) }}" required autocomplete="title_colored"
                                            autofocus>

                                        @error('title_colored')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="visibility" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Visibility') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <select id="visibility"
                                            class="form-control @error('visibility') is-invalid @enderror" name="visibility"
                                            required>
                                            <option value="1" {{ $menuTitle->visibility ? 'selected' : '' }}>
                                                {{ __('Visible') }}</option>
                                            <option value="0" {{ !$menuTitle->visibility ? 'selected' : '' }}>
                                                {{ __('Hidden') }}</option>
                                        </select>

                                        @error('visibility')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Menu Main Title') }}
                                    </button>                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
