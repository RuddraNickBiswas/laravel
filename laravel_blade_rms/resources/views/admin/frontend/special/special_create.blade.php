@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Create Spectial Section</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.special.store') }}" enctype="multipart/form-data">
                                @csrf



                                <div class="form-group row mb-3">
                                    <label for="tab_name" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Tab Name') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="tab_name" type="text"
                                            class="form-control @error('tab_name') is-invalid @enderror" name="tab_name"
                                            value="{{ old('tab_name') }}" required autocomplete="tab_name" autofocus>

                                        @error('tab_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


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
                                    <label for="title_italic" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Title Italic') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="title_italic" type="text"
                                            class="form-control @error('title_italic') is-invalid @enderror"
                                            name="title_italic" value="{{ old('title_italic') }}" required
                                            autocomplete="title_italic" autofocus>

                                        @error('title_italic')
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
                                        <textarea style="height: 100px" id="description" type="text"
                                            class="form-control @error('description') is-invalid @enderror" name="description" required autofocus>{{ old('description') }}</textarea>

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
                                    <label for="image" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Image') }}</h6>
                                    </label>
                                    <div class="col-sm-10">



                                        <input name="image" class="form-control  @error('image') is-invalid @enderror"
                                            type="file" id="image">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <img id="showImage" class="rounded avatar-lg"
                                            src="{{ !empty($specialSection->image) ? url($specialSection->image) : url('upload/no_image.jpg') }}"
                                            alt="Card image cap" class="mt-10" height="100">

                                    </div>

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create Special Section Item') }}
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
