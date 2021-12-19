@extends('layouts.admin')

@section('title')
   aboutsus
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
                <li><a style="color: blue; border-bottom: 1px solid blue "  href="{{ route('aboutsus.index') }}">Ortga qaytish</a></li>
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
                        <form action="{{ route('aboutsus.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                    <label>Title uz </label>
                                    <input class="form-control @error('title_uz') is-invalid @enderror"
                                           autocomplete="off" placeholder="Например: " name="title_uz" type="text">
                                    @error('title_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Title ru </label>
                                    <input class="form-control @error('title_ru') is-invalid @enderror"
                                           autocomplete="off" placeholder="Например: " name="title_ru" type="text">
                                    @error('title_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            <div class="col-12 form-group mb-3">
                                    <label>Text (uz)</label>
                                    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                    <textarea class="form-control @error('text_uz') is-invalid @enderror" name="text_uz"></textarea>
                                    <script>
                                        CKEDITOR.replace('text_uz', {
                                                filebrowserUploadUrl: "{{ route('admin.aboutsus.upload', ['_token' => csrf_token() ]) }}",
                                                filebrowserUploadMethod: 'form'
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-12 form-group mb-3">
                                    <label>Title (ru)</label>
                                    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                                    <textarea class="form-control @error('text_ru') is-invalid @enderror" name="text_ru"></textarea>
                                    <script>
                                        CKEDITOR.replace('text_ru', {
                                                filebrowserUploadUrl: "{{ route('admin.aboutsus.upload', ['_token' => csrf_token() ]) }}",
                                                filebrowserUploadMethod: 'form'
                                            }
                                        );
                                    </script>
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



    