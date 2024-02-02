@extends('layouts.main') 
@section('title', 'All Companies')
@section('content')
    <!-- push external head elements to head -->
    @push('head')

        <link rel="stylesheet" href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/chartist/dist/chartist.min.css') }}">
    @endpush

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5>{{ __('All Companies')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('superadmin-dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="add-company">{{ __('Add Comapny')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header"><h3>{{ __('Data Table')}}</h3></div> --}}
                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('Id')}}</th>
                                    <th>{{ __('Details')}}</th>
                                    <th>{{ __('Address')}}</th>
                                    <th>{{ __('Details')}}</th>
                                    <th class="nosort">{{ __('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companyDetails['Result'] as $company)
                                <tr>
                                    <td>{{ $company['CompanyID'] }}</td>
                                    <td>
                                        <p><b>Company Code : </b>{{ $company['CompanyID'] }}</p>
                                        <p><b>Company Name : </b>{{ $company['Com_Name'] }}</p>
                                        <p><b>Authorized Name : </b>{{ $company['Authorized_Name'] }}</p>
                                        <p><b>Company Email : </b>{{ $company['Com_Email'] }}</p>
                                        <p><b>Contact : </b>{{ $company['Com_MobileNo'] }}</p>
                                        {{-- 'CompanyID' => $company['CompanyID'],
                                        'Com_Name' => $company['Com_Name'],
                                        'Com_Email' => $company['Com_Email'],
                                        'Com_MobileNo' => $company['Com_MobileNo'],
                                        'Type_Buss' => $company['Type_Buss'],
                                        'User_id' => $company['User_id'],
                                        'Com_Address' => $company['Com_Address'],
                                        'IS_Active' => $company['IS_Active'],
                                        'CreatedOn' => $company['CreatedOn'],
                                        'Created_by' => $company['Created_by'],
                                        'Authorized_Name' => $company['Authorized_Name'],
                                        'Pincode' => $company['Pincode'],
                                        'State' => $company['State'],
                                        'District' => $company['District'],
                                        'TypeofCom' => $company['TypeofCom'],
                                        'GSTNO' => $company['GSTNO'],
                                        'WebSiteURL' => $company['WebSiteURL'],
                                        'UploadLogo' => $company['UploadLogo'],
                                        'GST_URL' => $company['GST_URL'],
                                        'COMPANNO' => $company['COMPANNO'],
                                        'COMPANNO_URL' => $company['COMPANNO_URL'],
                                        'AuthPANNO_URL' => $company['AuthPANNO_URL'],
                                        'AuthPANNO' => $company['AuthPANNO'],
                                        'CINNO' => $company['CINNO'],
                                        'CINNO_URL' => $company['CINNO_URL'],
                                        'SUBDOM1' => $company['SUBDOM1'],
                                        'SUBDOM2' => $company['SUBDOM2'],
                                        'SUBDOM3' => $company['SUBDOM3'],
                                        'EnterPrise_ID' => $company['EnterPrise_ID'],
                                        'OwnerID' => $company['OwnerID'],
                                        'OwnerName' => $company['OwnerName'],
                                        'Email' => $company['Email'],
                                        'PhoneNumber' => $company['PhoneNumber'],
                                        'PanNo' => $company['PanNo'],
                                        'Nationality' => $company['Nationality'],
                                        'Gender' => $company['Gender'],
                                        'FileUploadURL' => $company['FileUploadURL'],
                                        'PANNO_URL' => $company['PANNO_URL'],
                                        'AADHARCard_URL' => $company['AADHARCard_URL'],
                                        'AADHARCardNO' => $company['AADHARCardNO'] --}}
                                    </td>
                                    <td>
                                        <p><b>Address : </b>{{ $company['Com_Address'] }}</p>
                                        <p><b>Pin Code : </b>{{ $company['Pincode'] }}</p>
                                        <p><b>State : </b>{{ $company['State'] }}</p>
                                        <p><b>District : </b>{{ $company['District'] }}</p>
                                    </td>
                                    <td>
                                        <p><b>Type of Company : </b>{{ $company['Type_Buss'] }}</p>
                                        <p><b>Website : </b>{{ $company['WebSiteURL'] }}</p>
                                        <p><b>GST No : </b>{{ $company['GST_URL'] }}</p>
                                        <p><b>Enterprise ID : </b>{{ $company['EnterPrise_ID'] }}</p>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#" class="editButton"><i class="ik ik-edit-2"></i></a>
                                            <a href="#" class="deleteButton"><i class="ik ik-trash-2"></i></a>
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

    <script>
        $(document).ready(function() {
        $(".deleteButton").on("click", function() {
            var row = $(this).closest('tr');
            var userId = row.find('td:eq(0)').text();
            var companyId = row.find('td:eq(1)').text();
            var statusId = row.find('td:eq(2)').text();
            console.log(userId);
            console.log(companyId);
            // Show a confirmation dialog
            if (confirm("Are you sure you want to delete the company with User ID " + userId + "?")) {
            // User clicked OK, proceed with the deletion
        
            var requestData = {
                "userID": userId,
                "id": companyId,
                "statusId": statusId
            };
        
            // Make an AJAX call to the API
            $.ajax({
                url: '/delete-company/'+userId+'/'+userId, // Fix the URL to use companyId
                type: 'GET',
                contentType: 'application/json',
                success: function(response) {
                    // Handle success response
                    console.log('Company deleted successfully:', response);
                    // Remove the row from the table
                    row.remove();
                },
                error: function(error) {
                    // Handle error response
                    console.error('Error deleting company:', error);
                }
            });
            } else {
            // User clicked Cancel, do nothing
            console.log('Deletion canceled by user');
            }
        });
        });
        </script>
    

    	<!-- push external js -->
        @push('script')
        <script src="{{ asset('plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('plugins/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/curvedLines.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>

        <script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/themes/light.js') }}"></script>
       
        
        <script src="{{ asset('js/widget-statistic.js') }}"></script>
        <script src="{{ asset('js/widget-data.js') }}"></script>
        <script src="{{ asset('js/dashboard-charts.js') }}"></script>
    
    <!-- push external js -->
    <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    @endpush
@endsection