@extends('master')
@section('content')
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">رفع بيانات الزبائن </h3>
            </div>
        </div>
        <div class="card-body">
            <!--begin::Example-->
                <div class="form-group row mt-4">
                    <div class="col-lg-5">
                        <a href="{{route('customer.infofileupload')}}" class="btn btn-primary font-weight-bold font-size-h3 px-12 py-5">البيانات الشخصية </a>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <div class="col-lg-5">
                        <a href="{{route('customer.materialstatusfileupload')}}" class="btn btn-primary font-weight-bold font-size-h3 px-12 py-5">بيانات الحالة الاجتماعية </a>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <div class="col-lg-5">
                        <a href="{{route('customer.workfileupload')}}" class="btn btn-primary font-weight-bold font-size-h3 px-12 py-5">بيانات العمل </a>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <div class="col-lg-5">
                        <a href="{{route('customer.salaryfileupload')}}" class="btn btn-primary font-weight-bold font-size-h3 px-12 py-5">بيانات المرتب و البنك </a>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <div class="col-lg-5">
                        <a href="{{route('customer.acquaintancefileupload')}}" class="btn btn-primary font-weight-bold font-size-h3 px-12 py-5">بيانات المعرفين </a>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                 <div class="form-group row mt-4">
                    <div class="col-lg-5">
                        <a href="{{route('customer.patronfileupload')}}" class="btn btn-primary font-weight-bold font-size-h3 px-12 py-5">بيانات الكفلاء </a>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-4">
                    <div class="col-lg-5">
                        <a href="{{route('customer.paymentfileupload')}}" class="btn btn-primary font-weight-bold font-size-h3 px-12 py-5">بيانات اليات الدفع </a>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
            <!--end::Example-->

        </div>
</div>
@endsection
