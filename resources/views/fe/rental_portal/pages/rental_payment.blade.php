@extends('fe.rental_portal.rental_dboard')
@section('maincontent')

<section class="page-title" style="background-image:url(fe/images/background/page-title-bg-1.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h1>Forums</h1>
            <div class="bread-crumb">
                <a href="{{URL::to('rental_dboard')}}">Home</a> / 
                <a href="{{URL::to('rental-payment-info')}}" class="current">Rental Payment Information</a></div>
        </div>
    </div>

</section>

<div class="container" style="margin-top: 40px;">
        <h2>Profile of username</h2>
        <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
        <div class="table-responsive">          
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="info">
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                    </tr>
                    
                    <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    @endsection