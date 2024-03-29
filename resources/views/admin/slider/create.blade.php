@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>
        </div>
        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Slider</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>File</label>
                                    <input type="file" class="form-control" name="banner">
                                </div>
                                <div class="form-group">
                                    <label>Announcement</label>
                                    <input type="text" class="form-control" name="announcement"
                                        value="{{ old('announcement') }}">
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                </div>
                                <div class="form-group">
                                    <label>Starting Price</label>
                                    <input type="text" class="form-control" name="starting_price"
                                        value="{{ old('starting_price') }}">
                                </div>
                                <div class="form-group">
                                    <label>Button URL</label>
                                    <input type="text" class="form-control" name="btn_url" value="{{ old('btn_url') }}">
                                </div>
                                <div class="form-group">
                                    <label>Slider Position</label>
                                    <input type="text" class="form-control" name="position"
                                        value="{{ old('position') }}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
