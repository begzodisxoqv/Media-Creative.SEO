@extends('layouts.admin')

@section('title')
   Contacts
@endsection

@section('main')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="breadcrumb">
            <h1 class="mr-2">Добавить новые данные</h1>
            <ul>
                <li><a style="color: blue; border-bottom: 1px solid blue "  href="{{ route('contacts.index') }}">Ortga qaytish</a></li>
            </ul>
        </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label>PhoneNumber </label>
                                    <input class="form-control @error('number') is-invalid @enderror"
                                           autocomplete="off" placeholder="Например: 99 765 67 78" name="number" type="text">
                                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Email </label>
                                    <input class="form-control @error('email') is-invalid @enderror"
                                           autocomplete="off" placeholder="Например: eoli@gmail.com " name="email" type="text">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Location (uz)</label>
                                    <input class="form-control @error('location_uz') is-invalid @enderror"
                                           autocomplete="off" placeholder="Например: Бакалавр" name="location_uz" type="text">
                                    @error('location_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-md-6 form-group mb-3">
                                    <label>Location (ru)</label>
                                    <input class="form-control @error('location_ru') is-invalid @enderror"
                                           autocomplete="off" placeholder="Например: Бакалавр" name="location_ru" type="text">
                                    @error('location_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-12 form-group mb-3" style="padding-top:30px;">
                                    <strong>Выберите изображению:</strong>
                                    <br/>
                                    <input type="file" name="image" required >
                                </div>

                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
@endsection



    