@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Book Table Request</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.book_table.update', $bookTable->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="form-group row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Name') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name', $bookTable->name) }}" required autocomplete="name"
                                            autofocus disabled>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Email') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email', $bookTable->email) }}" required autocomplete="email"
                                            autofocus disabled>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="phone" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Phone') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="phone" type="text"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone', $bookTable->phone) }}" required autocomplete="phone"
                                            autofocus disabled>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-3">
                                    <label for="people" class="col-sm-2 col-form-label">
                                        <h6>{{ __('People') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="people" type="number"
                                            class="form-control @error('people') is-invalid @enderror" name="people"
                                            value="{{ old('people', $bookTable->people) }}" required autocomplete="people"
                                            autofocus disabled>

                                        @error('people')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="date" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Date') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="date" type="text"
                                            class="form-control @error('date') is-invalid @enderror" name="date"
                                            value="{{ old('date', $bookTable->date) }}" required autocomplete="date"
                                            autofocus disabled>

                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="time" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Time') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="time" type="text"
                                            class="form-control @error('time') is-invalid @enderror" name="time"
                                            value="{{ old('time', $bookTable->time) }}" required autocomplete="time"
                                            autofocus disabled>

                                        @error('time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-3">
                                    <label for="message" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Message') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea style="height: 100px" id="message" type="text"
                                            class="form-control @error('message') is-invalid @enderror" name="message" required autofocus disabled>{{ old('message', $bookTable->message) }}</textarea>

                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="status" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Status') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <select id="status" class="form-control @error('status') is-invalid @enderror"
                                            name="status" required>
                                            <option value="confirmed"
                                                {{ $bookTable->status == 'confirmed' ? 'selected' : '' }}>
                                                {{ __('Confirmed') }}</option>
                                            <option value="pending"
                                                {{ $bookTable->status == 'pending' ? 'selected' : '' }}>
                                                {{ __('Pending') }}</option>
                                            <option value="rejected"
                                                {{ $bookTable->status == 'rejected' ? 'selected' : '' }}>
                                                {{ __('Rejected') }}</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Book Table Request Update') }}
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
