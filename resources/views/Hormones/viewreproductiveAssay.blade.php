@extends('layouts.sideMenu')

@section('content')
<!--div-->
<div class="col-xl-12" style="margin-top: 10%;">
    <div class="card mg-b-20">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2">Reproductive Assay</h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-12 text-muted mb-2">Showing All Lab Results for Reproductive Assay</a></p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered mg-b-1 ">
                    <thead>
                        <tr>
                            <th>PATIENT_ID</th>
                            <th>DATE_OF_BIRTH</th>
                            <th>LAB_NUMBER</th>
                            <th>TODAY_DATE</th>
                            <th>GENDER</th>
                            <th>NAME</th>
                            <th>DRAWN_DATE_TIME</th>
                            <th>LH</th>
                            <th>FSH </th>
                            <th>PROLACTIN </th>
                            <th>PROGESTERONE </th>
                            <th>OBSTROGEN </th>
                            <th>TESTOSTERONE </th>
                            <th>COMMENTS </th>
                            <th>VALIDATED_BY </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reproAssay as $reproAssay)

                        <tr>
                            <td>{{ $reproAssay->PATIENT_ID }}</td>
                            <td>{{ $reproAssay->DATE_OF_BIRTH }}</td>
                            <td scope="row">{{ $reproAssay->LAB_NUMBER }}</td>
                            <td scope="row">{{ $reproAssay->TODAY_DATE }}</td>
                            <td scope="row">{{ $reproAssay->GENDER }}</td>
                            <td scope="row">{{ $reproAssay->NAME }}</td>
                            <td scope="row">{{ $reproAssay->DRAWN_DATE_TIME }}</td>
                            <td scope="row">{{ $reproAssay->LH }}</td>
                            <td scope="row">{{ $reproAssay->FSH }}</td>
                            <td scope="row">{{ $reproAssay->PROLACTIN }}</td>
                            <td scope="row">{{ $reproAssay->PROGESTERONE }}</td>
                            <td scope="row">{{ $reproAssay->OBSTROGEN }}</td>
                            <td scope="row">{{ $reproAssay->TESTOSTERONE }}</td>
                            <td scope="row">{{ $reproAssay->COMMENTS }}</td>
                            <td scope="row">{{ $reproAssay->VALIDATED_BY }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--/div-->
@endsection