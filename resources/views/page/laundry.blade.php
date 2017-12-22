<!DOCTYPE html>
<html lang="en">
<head>
    @include('style/Html')
</head>

<body>

<section id="container" class="">


    <header class="header dark-bg">
        @include('include/topbar')
    </header>

    <aside>
        @include('include/sidebar')
    </aside>

    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
                    <ol class="breadcrumb">
                        <li><button class="btn btn-primary btn-sm btn-edit"><b>Add</b></button></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="table-responsive">
                            <table class="table" id="users-table">
                                <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Date Entry</th>
                                    <th>Date Out</th>
                                    <th>Laundry Status</th>
                                    <th>Payment Status</th>
                                    <th width="172">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--@foreach($laundrys as $laundry)--}}
                                    {{--<tr id="laundry{{$laundry->id}}">--}}
                                        {{--<td> @if( $laundry->Payment->LaundryOut->LaundryEntry->Register != null)--}}
                                                {{--{{ $laundry->Payment->LaundryOut->LaundryEntry->Register->full_name }}--}}
                                            {{--@else--}}
                                                {{--Please register yourself--}}
                                            {{--@endif--}}
                                        {{--</td>--}}
                                        {{--<td>{{ $laundry->Payment->LaundryOut->LaundryEntry->date }}</td>--}}
                                        {{--<td>{{ $laundry->Payment->LaundryOut->date }}</td>--}}
                                        {{--<td>{{ $laundry->LaundryStatus->status }}</td>--}}
                                        {{--<td>{{ $laundry->Payment->PaymentStatus->status }}</td>--}}
                                        {{--<td>--}}
                                            {{--<button class="btn btn-success btn-sm btn-view" data-id="{{$laundry->id}}"><b>Edit</b></button>--}}
                                            {{--<button class="btn btn-primary btn-sm btn-edit" data-id="{{$laundry->id}}"><b>Edit</b></button>--}}
                                            {{--<button class="btn btn-danger btn-sm btn-delete" data-id="{{$laundry->id}}"><b>Delete</b></button>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                                </tbody>
                            </table>
                        </div>

                    </section>
                </div>
            </div>
        </section>
    </section>
</section>
@include('style/javaScript')

</body>
</html>