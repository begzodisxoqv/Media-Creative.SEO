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
            <h1 class="mr-2">Обо мне</h1>
            <ul>
                <li><a style="color: blue; border-bottom: 1px solid blue " href="{{ route('services.create') }}">Добавить новые данные</a></li>
            </ul>
        </div>
        </div>
      </div>
    </div>
    <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="row m-0 py-3">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            
                                            <th>Title_1_uz</th> 
                                            <th>Title_2_uz</th> 
                                            <th>Text_uz</th> 
                                            <th>Logo image</th>
                                            <th>Image</th>
                                            <th>Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody class="result">
                                        @foreach($services as $about) 
                                            <tr>
                                                <td>{{ $about->title_1_uz }}</td>
                                                <td>{{ $about->title_2_uz }}</td>
                                                <td>{!! $about->text_uz !!}</td>
                                                <td><img src="{{ asset('storage/' . $about->image_uz) }}" style="width: 100px;" /></td>
                                                <td><img src="{{ asset('storage/' . $about->image_ru) }}" style="width: 100px;" /></td>
                                                <td class="d-flex">
                                                    <a class="text-success mr-2" href="{{ route('services.edit', $about->id) }}"><i class="nav-icon fas fa-pen font-weight-bold"></i></a>
                                                    <a data-toggle="modal" data-target="#deletesModal{{$about->id}}" class="text-danger mr-2" href="{{ route('services.destroy', $about->id) }}"><i class="nav-icon far fa-times-circle font-weight-bold"></i></a>
                                                    <div class="modal fade" id="deletesModal{{$about->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteModal">Удалить пост?</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item">
                                                                            <b>Вы действительно хотите удалить?</b>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('services.destroy', $about->id) }}" method="post">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button class="btn btn-danger mr-2 cursor-pointer">Удалить</button>
                                                                    </form>
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Закрыть</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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


