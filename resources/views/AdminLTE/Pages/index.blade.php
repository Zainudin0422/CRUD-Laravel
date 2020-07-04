@extends('AdminLTE.Template.master')

<!-- Title Page -->
@push('title')

Welcome

@endpush


@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Title</th>
            <th>Question</th>
            <th style="width: 170px"></th>
            <th style="width: 150px"><a href="{{'/questions/create' }}" class="btn btn-sm btn-block btn-primary">Tambah</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach( $questions as $Question )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $Question->title }}</td>
            <td class="overflow-auto">
                {{ $Question->fill }}
            </td>
            <td class="text-center">
                <a href="/answers/{{$Question->id}}" class="badge badge-warning">Answer Question
                    <!-- <span class="badge badge-light">0</span> -->
                </a>
            </td>
            <td>
                <div class="btn-group btn-block">
                    <a href="{{'/questions/'.$Question->id.'/edit'}}" class="btn btn-sm btn-success">Update</a>
                    <form action="{{'/questions/'.$Question->id}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@push('jsPlus')
<script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
    $(function() {
        $("#example1").DataTable();
    });
</script>
@endpush