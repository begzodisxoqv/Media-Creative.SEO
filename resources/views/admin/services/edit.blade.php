@extends('layouts.admin')

@section('title')
    Services
@endsection

@section('main')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="breadcrumb">
            <h1 class="mr-2">Редактирование обо мне</h1>
            <ul>
                <li><a href="{{ route('services.index') }}">Все данные</a></li>
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
                        <form action="{{ route('services.update', $services->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                    <label>Title_1_uz</label>
                                    <input class="form-control @error('title_1_uz') is-invalid @enderror"value="{{ $services->title_1_uz }}"
                                           autocomplete="off" placeholder="Например: " name="title_1_uz" type="text">
                                    @error('title_1_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Title_1_ru</label>
                                    <input class="form-control @error('title_1_ru') is-invalid @enderror"value="{{ $services->title_1_ru }}"
                                           autocomplete="off" placeholder="Например: " name="title_1_ru" type="text">
                                    @error('title_1_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Title_2_uz</label>
                                    <input class="form-control @error('title_2_uz') is-invalid @enderror"value="{{ $services->title_2_uz }}"
                                           autocomplete="off" placeholder="Например: " name="title_2_uz" type="text">
                                    @error('title_2_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Title_2_ru</label>
                                    <input class="form-control @error('title_2_ru') is-invalid @enderror"value="{{ $services->title_2_ru }}"
                                           autocomplete="off" placeholder="Например: " name="title_2_ru" type="text">
                                    @error('title_2_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            <div class="col-12 form-group mb-3">
                                    <label>Text (uz)</label>
                                    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                    <textarea class="form-control @error('text_uz') is-invalid @enderror" name="text_uz">{!! $services->text_uz !!}</textarea>
                                    <script>
                                        CKEDITOR.replace('text_uz', {
                                                filebrowserUploadUrl: "{{ route('admin.services.upload', ['_token' => csrf_token() ]) }}",
                                                filebrowserUploadMethod: 'form'
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-12 form-group mb-3">
                                    <label>Text (ru)</label>
                                    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                    <textarea class="form-control @error('text_ru') is-invalid @enderror" name="text_ru">{!! $services->text_ru !!}</textarea>
                                    <script>
                                        CKEDITOR.replace('text_ru', {
                                                filebrowserUploadUrl: "{{ route('admin.services.upload', ['_token' => csrf_token() ]) }}",
                                                filebrowserUploadMethod: 'form'
                                            }
                                        );
                                    </script>
                                </div>
                                <div class="col-12 form-group mb-3">
                                    <img src="{{ asset( 'storage/' . $services->image_uz) }}" class="img-fluid"
                                         style="width: 200px;">
                                </div>

                                <div class="col-12 form-group mb-3" style="padding-top:30px;">
                                    <strong>Выберите изображению:</strong>
                                    <br/>
                                    <input type="file" name="image_uz">
                                </div>
                                
                                <div class="col-12 form-group mb-3">
                                    <img src="{{ asset( 'storage/' . $services->image_ru) }}" class="img-fluid"
                                         style="width: 200px;">
                                </div>

                                <div class="col-12 form-group mb-3" style="padding-top:30px;">
                                    <strong>Reklama</strong>
                                    <br/>
                                    <input type="file" name="image_ru">
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

