@extends('layouts.admin')
@section('main')
<div style="width: 100%;" class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">AdminPanel</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
       
          <div class="row">
            <div class="col-md-4">
                <div class="card card-icon mb-6">
                    <div class="card-body text-center">
                        <i class="far fa-newspaper" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Все категори</p>
                        <p class="lead text-22 m-0">{{ $abouts ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-icon mb-6">
                    <div class="card-body text-center">
                        <i class="fas fa-rss" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Все баннеры</p>
                        <p class="lead text-22 m-0">{{ $banners ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-icon mb-12">
                    <div class="card-body text-center">
                        <i class="fas fa-sitemap" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Клиенты</p>
                        <p class="lead text-22 m-0">{{ $tool ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-icon mb-6">
                    <div class="card-body text-center">
                        <i class="fas fa-sitemap" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Филиалы</p>
                        <p class="lead text-22 m-0">{{ $showrooms ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-icon mb-6">
                    <div class="card-body text-center">
                        <i class="fas fa-sitemap" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Акции</p>
                        <p class="lead text-22 m-0">{{ $countdowns ?? '0' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-icon mb-6">
                    <div class="card-body text-center">
                        <i class="fas fa-sitemap" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Акции</p>
                        <p class="lead text-22 m-0">{{ $countdowns ?? '0' }}</p>
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


