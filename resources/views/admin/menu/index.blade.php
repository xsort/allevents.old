@extends('admin.body')
@section('title', $product->name)
@section('centerbox')
    <div class="page-header">
<<<<<<< HEAD
        <h1> Продукция для {{ $product->name }} <small><i class="ace-icon fa fa-angle-double-right"></i> Список продукции</small> </h1>
=======
        <h1> Меню для {{ $product->name }} <small><i class="ace-icon fa fa-angle-double-right"></i> Список блюд из меню</small> </h1>
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    </div>

    @include('admin.partials.messages')

    <div class="row">
        <div class="col-xs-12">
            <a class="btn  btn-success" href="{{ route('admin.menu.create', $product->id) }}">
                <i class="ace-icon fa fa-plus-square-o  bigger-120"></i>
                Создать
            </a>

            <div class="clearfix"><div class="pull-right tableTools-container"></div></div>
<<<<<<< HEAD
            <div class="table-header"> Список продукции </div>
=======
            <div class="table-header"> Список блюд из меню </div>
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c

            <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable">
                <thead>
                <tr>
                    <th class="center">
                        <label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label>
                    </th>
                    <th align="center">ID</th>
                    <th align="center">Наименование</th>
                    <th align="center"><i class="ace-icon fa fa-eye-slash bigger-130"></i></th>
                    <th align="center"><i class="menu-icon fa fa-cogs"></i> </th>
                </tr>
                </thead>
                <tbody bgcolor="white">
                @foreach($data as $d)
                    <tr class="">
                        <td class="center">
                            <label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label>
                        </td>
                        <td align="right">
                            {{ $d->id }}
                        </td>
                        <td align="left">
                             <a title="Редактирование" href="{{ route('admin.menu.edit', $d->id) }}">{{ $d->name }}</a>
                        </td>
                        <td align="center">
                            <div class="action-buttons">
                                <a href="javascript:void(0);" class="{{ $d->enabled ? 'visible' : 'unvisible' }}" data-id="{{ $d->id }}" data-model="menuproducts">
                                    <i class="ace-icon fa fa-eye bigger-130"></i>
                                </a>
                            </div>
                        </td>
                        <td align="center">
                            <div class="action-buttons">
                                <a href="{{ route('admin.menu.edit', $d->id) }}" class="yellow"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
                                {{ Form::open(['url' => route('admin.menu.delete', $d->id), 'class' => 'pull-right']) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::button('<i class="ace-icon fa fa-trash-o bigger-130"></i>', ['type' => 'submit', 'class' => 'red deletebutton']) }}
                                {{ Form::close() }}
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- /.col-xs-12 -->
    </div><!-- /.row -->
@endsection

@section('scripts')

    @include('admin.partials.datatable-init')

    @include('admin.partials.visibility')

@endsection
