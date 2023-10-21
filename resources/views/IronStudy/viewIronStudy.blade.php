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
                            <th>FERRATIN MALE</th>
                            <th>FERRATIN FEMALE</th>
                            <th>IRON</th>
                            <th>TIBC </th>
                            <th>FOLATE </th>
                            <th>VITAMIN B<sub>12</sub> </th>
                            <th>TRANSFERING </th>
                            <th>COMMENTS </th>
                            <th>VALIDATED_BY </th>
                            <th>ACTION </th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($viewIronStudy as $ironStudy)
                           <tr>
                                <td>{{ $ironStudy->PATIENT_ID }}</td>
                                <td>{{ $ironStudy->DATE_OF_BIRTH }}</td>
                                <td>{{ $ironStudy->LAB_NUMBER }}</td>
                                <td>{{ $ironStudy->TODAY_DATE }}</td>
                                <td>{{ $ironStudy->GENDER }}</td>
                                <td>{{ $ironStudy->NAME }}</td>
                                <td>{{ $ironStudy->DRAWN_DATE_TIME }}</td>
                                <td>{{ $ironStudy->FERRITIN_MALE }}</td>
                                <td>{{ $ironStudy->FERRITIN_FEMALE }}</td>
                                <td>{{ $ironStudy->IRON }}</td>
                                <td>{{ $ironStudy->TIBC }}</td>
                                <td>{{ $ironStudy->FOLATE }}</td>
                                <td>{{ $ironStudy->VITAMINB12 }}</td>
                                <td>{{ $ironStudy->TRANSFERING }}</td>
                                <td>{{ $ironStudy->COMMENTS }}</td>
                                <td>{{ $ironStudy->VALIDATED_BY }}</td>
                                <td>
                                    <a href=""><i class="text text-success fas fa-pencil-alt"></i></a>
                                    <a href=""><i class="text text-danger fas fa-trash-alt"></i></a>                                   
                                    <a href="{{url('ironStudyDetails', $ironStudy->id)}}"><i class="fas fa-eye"></i></a>                                   
                                </td>
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
