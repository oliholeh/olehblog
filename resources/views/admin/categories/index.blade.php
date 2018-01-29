@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    @component('admin.components.breadcrumb')
      @slot('title')Страница категорий@endslot
      @slot('parent')Главная @endslot
      @slot('active')Категории@endslot
    @endcomponent
    <hr>

    <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right ">Добавить категорию <i class="fa fa-plus-square-o"></i></a>
    <table class="table table-striped">
      <thead>
        <th>Найменование</th>
        <th>Публикация</th>
        <th class="text-right">Действия</th>
      </thead>
      <tbody>
        @forelse ($categories as $category)
          <tr>
            <td>{{$category->title}}</td>
            <td>{{$category->published}}</td>
            <td>
              <a href="{{route('admin.category.edit', ['id'=>$category->id])}}"><i class="fa fa-edit"></i></a>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="3" class="text-center"><h2>Данние осуствуют</h2></td>
          </tr>
        @endforelse
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3">
            <ul class="pagination pull-right">
              {{$categories->links()}}
            </ul>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>

@endsection
