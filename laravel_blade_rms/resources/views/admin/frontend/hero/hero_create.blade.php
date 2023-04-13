@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Create Hero Section</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.hero.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Title') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror" name="title"
                                            value="{{ old('title') }}" required autocomplete="title" autofocus>

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Description') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea style="height: 100px;" id="description" type="text"
                                            class="form-control @error('description') is-invalid @enderror" name="description" required
                                            autocomplete="description" autofocus>{{ old('description') }}</textarea>

                                        @error('description')
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
                                            <option value="1" selected>
                                                {{ __('Visible') }}</option>
                                            <option value="0">
                                                {{ __('Hidden') }}</option>
                                        </select>

                                        @error('visibility')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="bg_image" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Image') }}</h6>
                                    </label>
                                    <div class="col-sm-10">



                                        <input name="bg_image" class="form-control  @error('bg_image') is-invalid @enderror"
                                            type="file" id="image">
                                        @error('bg_image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <img id="showImage" class="rounded avatar-lg"
                                            src="{{ !empty($heroSection->bg_image) ? url($heroSection->bg_image) : url('upload/no_image.jpg') }}"
                                            alt="Card image cap" class="mt-10" height="100">

                                    </div>

                                    @error('bg_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create Slider') }}
                                    </button>
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
