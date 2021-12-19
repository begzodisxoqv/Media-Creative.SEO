@extends('layouts.admin')

@section('title')
  Showrooms
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
                <li><a style="color: blue; border-bottom: 1px solid blue "  href="{{ route('showrooms.index') }}">Ortga qaytish</a></li>
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
                        <form action="{{ route('showrooms.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                    <label>Название (uz)</label>
                                    <input class="form-control @error('title_uz') is-invalid @enderror"  autocomplete="off" placeholder="Например: Filial Andijon" name="title_uz" type="text">
                                    @error('title_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Название (ru)</label>
                                    <input class="form-control @error('title_ru') is-invalid @enderror"  autocomplete="off" placeholder="Например: Филиал Андижан" name="title_ru" type="text">
                                    @error('title_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Адрес (uz)</label>
                                    <input class="form-control @error('address_uz') is-invalid @enderror" autocomplete="off" placeholder="Например: Andijan, Boburshox ko'chasi, 54 uy" name="address_uz" type="text">
                                    @error('address_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Адрес (ru)</label>
                                    <input class="form-control @error('address_ru') is-invalid @enderror" autocomplete="off" placeholder="Например: Андижан, улица Бобуршох, дом N54" name="address_ru" type="text">
                                    @error('address_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Телефон</label>
                                    <input class="form-control @error('phone') is-invalid @enderror"  autocomplete="off" placeholder="Например: +998997998877" name="phone" type="text">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Эл. адрес</label>
                                    <input class="form-control @error('email') is-invalid @enderror" autocomplete="off" placeholder="Например: info@imedical.uz" name="email" type="text">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Координата lat</label>
                                    <input class="form-control @error('map_lat') is-invalid @enderror"  autocomplete="off" placeholder="Например: 64.5555" name="map_lat" type="text">
                                    @error('map_lat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Координата lng</label>
                                    <input class="form-control @error('map_lng') is-invalid @enderror"  autocomplete="off" placeholder="Например: 64.5555" name="map_lng" type="text">
                                    @error('map_lng')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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



    