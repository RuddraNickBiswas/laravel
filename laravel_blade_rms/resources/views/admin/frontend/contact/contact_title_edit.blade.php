@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Contact Section title and Map link</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.contact_title.update', $contactTitle->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="form-group row mb-3">
                                    <label for="title_first" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Title First') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="title_first" type="text"
                                            class="form-control @error('title_first') is-invalid @enderror"
                                            name="title_first" value="{{ old('title_first', $contactTitle->title_first) }}"
                                            required autocomplete="title_first" autofocus>

                                        @error('title_first')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="form-group row mb-3">
                                    <label for="title_last" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Title Last') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="title_last" type="text"
                                            class="form-control @error('title_last') is-invalid @enderror" name="title_last"
                                            value="{{ old('title_last', $contactTitle->title_last) }}" required
                                            autocomplete="title_last" autofocus>

                                        @error('title_last')
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
                                            class="form-control @error('description') is-invalid @enderror" name="description" required autofocus>{{ old('description', $contactTitle->description) }}</textarea>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-3">
                                    <label for="g_map_link" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Google Map Link') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea style="height: 100px" id="g_map_link" type="text"
                                            class="form-control @error('g_map_link') is-invalid @enderror" name="g_map_link" required autofocus>{{ old('g_map_link', $contactTitle->g_map_link) }}</textarea>

                                        @error('g_map_link')
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
                                            <option value="1" {{ $contactTitle->visibility ? 'selected' : '' }}>
                                                {{ __('Visible') }}</option>
                                            <option value="0" {{ !$contactTitle->visibility ? 'selected' : '' }}>
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
