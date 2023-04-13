@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Edit About Section</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.about.update', $aboutSection->id) }}"
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
                                            value="{{ old('title', $aboutSection->title) }}" required autocomplete="title"
                                            autofocus>

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="title_bold" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Title Bold') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="title_bold" type="text"
                                            class="form-control @error('title_bold') is-invalid @enderror" name="title_bold"
                                            value="{{ old('title_bold', $aboutSection->title_bold) }}" required
                                            autocomplete="title_bold" autofocus>

                                        @error('title_bold')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="description_top" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Description Top') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea style="height: 100px" id="description_top" type="text"
                                            class="form-control @error('description_top') is-invalid @enderror" name="description_top" required autofocus>{{ old('description_top', $aboutSection->description_top) }}</textarea>

                                        @error('description_top')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="description_italic" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Description Italic') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea style="height: 100px" id="description_italic" type="text"
                                            class="form-control @error('description_italic') is-invalid @enderror" name="description_italic" required autofocus>{{ old('description_italic', $aboutSection->description_italic) }}</textarea>

                                        @error('description_italic')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-3">
                                    <label for="main_point_1" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Main Point 1') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="main_point_1" type="text"
                                            class="form-control @error('main_point_1') is-invalid @enderror"
                                            name="main_point_1"
                                            value="{{ old('main_point_1', $aboutSection->main_point_1) }}" required
                                            autocomplete="main_point_1" autofocus>

                                        @error('main_point_1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-3">
                                    <label for="main_point_2" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Main Point 2') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="main_point_2" type="text"
                                            class="form-control @error('main_point_2') is-invalid @enderror"
                                            name="main_point_2"
                                            value="{{ old('main_point_2', $aboutSection->main_point_2) }}" required
                                            autocomplete="main_point_2" autofocus>

                                        @error('main_point_2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="main_point_3" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Main Point 3') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="main_point_3" type="text"
                                            class="form-control @error('main_point_3') is-invalid @enderror"
                                            name="main_point_3"
                                            value="{{ old('main_point_3', $aboutSection->main_point_3) }}" required
                                            autocomplete="main_point_3" autofocus>

                                        @error('main_point_3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="description_bottom" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Description Bottom') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea style="height: 100px" id="description_bottom" type="text"
                                            class="form-control @error('description_bottom') is-invalid @enderror" name="description_bottom" required
                                            autofocus>{{ old('description_bottom', $aboutSection->description_bottom) }}</textarea>

                                        @error('description_bottom')
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
                                            class="form-control @error('visibility') is-invalid @enderror"
                                            name="visibility" required>
                                            <option value="1" {{ $aboutSection->visibility ? 'selected' : '' }}>
                                                {{ __('Visible') }}</option>
                                            <option value="0" {{ !$aboutSection->visibility ? 'selected' : '' }}>
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
                                    <label for="video_url" class="col-sm-2 col-form-label">
                                        <h6>{{ __('video_url') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="video_url" type="text"
                                            class="form-control @error('video_url') is-invalid @enderror" name="video_url"
                                            value="{{ old('video_url', $aboutSection->video_url) }}" required
                                            autocomplete="video_url" autofocus>

                                        @error('video_url')
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
                                            src="{{ !empty($aboutSection->image) ? url($aboutSection->image) : url('upload/no_image.jpg') }}"
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
                                        {{ __('Update About') }}
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
