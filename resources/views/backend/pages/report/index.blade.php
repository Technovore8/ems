@extends('backend.master')
@section('content')
<h1>Order Report</h1>

<form action="{{route('report.generated')}}" method="post">
    @csrf
<div class="row">
    <div class="col-md-4">
        <label for="">From date:</label>
        <input name="from_date" type="date" class="form-control">

    </div>
    <div class="col-md-4">
        <label for="">To date:</label>
        <input name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-success">Search</button>
    </div>
</div>

</form>
<div id="orderReport">

<h1>Order Reports- {{date('Y-m-d')}}</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User ID</th>
            <th scope="col">Property Id</th>
            <th scope="col">Booking Date</th>

        </tr>
        </thead>
        <tbody>
        @if(isset($bookings))
        @foreach($bookings as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->user->name}}</td>
            <td>{{$data->property->name}} {{$data->property->id}}</td>
            <td>{{$data->created_at}}</td>

        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<button onclick="printDiv('orderReport')" class="btn btn-success">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection