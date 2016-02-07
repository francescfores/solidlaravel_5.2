@extends('layouts.app')

@section('htmlheader_title')
    Pricing
@endsection


@section('main-content')
    <style>
        @import url("http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css");
        @import url("http://fonts.googleapis.com/css?family=Roboto:400,300,700italic,700,500&subset=latin,latin-ext");


        /*Design with flexbox*/
        .grid-row{
            display:flex;
            flex-wrap:wrap;
        }
        .colum{
            padding-left: 15px;
            padding-right: 15px;
            flex:1;
            text-align:center;

        }
        .col3{
            flex-basis:25%;
        }

        /*==========  Non-Mobile First Method  ==========*/

        /* Large Devices, Wide Screens */
        @media only screen and (max-width : 1200px) {
            .col3{
                flex-basis:50%;
            }
        }

        /* Medium Devices, Desktops */
        @media only screen and (max-width : 992px) {
            .col3{
                flex-basis:50%;
            }
        }

        /* Small Devices, Tablets */
        @media only screen and (max-width : 768px) {
            .col3{
                flex-basis:100%;
            }
        }

        /* Extra Small Devices, Phones */
        @media only screen and (max-width : 480px) {

        }

        /* Custom, iPhone Retina */
        @media only screen and (max-width : 320px) {

        }
        .space{
            margin:100px;
        }
        /*Design with bootsrap*/

        /* green panel */

        .price.panel-green>.panel-heading {
            color: #fff;
            background-color: #57AC57;
            border-color: #71DF71;
            border-bottom: 1px solid #71DF71;
        }
        .price.panel-green>.panel-body {
            color: #fff;
            background-color: #65C965;
        }
        .price.panel-green>.panel-body .lead{
            text-shadow: 0px 3px 0px rgba(50,50,50, .3);
        }
        .price.panel-green .list-group-item {
            color: #333;
            background-color: rgba(50,50,50, .01);
            font-weight:600;
            text-shadow: 0px 1px 0px rgba(250,250,250, .75);
        }

        /* blue panel */

        .price.panel-blue>.panel-heading {
            color: #fff;
            background-color: #608BB4;
            border-color: #78AEE1;
            border-bottom: 1px solid #78AEE1;
        }
        .price.panel-blue>.panel-body {
            color: #fff;
            background-color: #73A3D4;
        }
        .price.panel-blue>.panel-body .lead{
            text-shadow: 0px 3px 0px rgba(50,50,50, .3);
        }
        .price.panel-blue .list-group-item {
            color: #333;
            background-color: rgba(50,50,50, .01);
            font-weight:600;
            text-shadow: 0px 1px 0px rgba(250,250,250, .75);
        }

        /* red price */

        .price.panel-red>.panel-heading {
            color: #fff;
            background-color: #D04E50;
            border-color: #FF6062;
            border-bottom: 1px solid #FF6062;
        }
        .price.panel-red>.panel-body {
            color: #fff;
            background-color: #EF5A5C;
        }
        .price.panel-red>.panel-body .lead{
            text-shadow: 0px 3px 0px rgba(50,50,50, .3);
        }
        .price.panel-red .list-group-item {
            color: #333;
            background-color: rgba(50,50,50, .01);
            font-weight:600;
            text-shadow: 0px 1px 0px rgba(250,250,250, .75);
        }

        /* grey price */

        .price.panel-grey>.panel-heading {
            color: #fff;
            background-color: #f39c12;
            border-color: #FFF176;
            border-bottom: 1px solid #FFF176;
        }
        .price.panel-grey>.panel-body {
            color: #fff;
            background-color: #FFCA28;
        }
        .price.panel-grey>.panel-body .lead{
            text-shadow: 0px 3px 0px rgba(50,50,50, .3);
        }
        .price.panel-grey .list-group-item {
            color: #333;
            background-color: rgba(50,50,50, .01);
            font-weight:600;
            text-shadow: 0px 1px 0px rgba(250,250,250, .75);
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="box">
                    <div class="box-header">
                    <h1>Pricing table with Bootstrap</h1>
                        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

                            <!-- PRICE ITEM -->
                            <div class="panel price panel-red">
                                <div class="panel-heading  text-center">
                                    <h3>PRO PLAN</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead" style="font-size:40px"><strong>$10 / month</strong></p>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                                    <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                                    <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                                </ul>
                                <div class="panel-footer">
                                    <a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>
                                </div>
                            </div>
                            <!-- /PRICE ITEM -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <!-- PRICE ITEM -->
                            <div class="panel price panel-blue">
                                <div class="panel-heading arrow_box text-center">
                                    <h3>DEV PLAN</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead" style="font-size:40px"><strong>$20 / month</strong></p>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item"><i class="icon-ok text-info"></i> Personal use</li>
                                    <li class="list-group-item"><i class="icon-ok text-info"></i> Unlimited projects</li>
                                    <li class="list-group-item"><i class="icon-ok text-info"></i> 27/7 support</li>
                                </ul>
                                <div class="panel-footer">
                                    <a class="btn btn-lg btn-block btn-info" href="#">BUY NOW!</a>
                                </div>
                            </div>
                            <!-- /PRICE ITEM -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

                            <!-- PRICE ITEM -->
                            <div class="panel price panel-green">
                                <div class="panel-heading arrow_box text-center">
                                    <h3>FREE PLAN</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
                                    <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
                                    <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
                                </ul>
                                <div class="panel-footer">
                                    <a class="btn btn-lg btn-block btn-success" href="#">BUY NOW!</a>
                                </div>
                            </div>
                            <!-- /PRICE ITEM -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                            <!-- PRICE ITEM -->
                            <div class="panel price panel-grey">
                                <div class="panel-heading arrow_box text-center">
                                    <h3>FREE PLAN</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
                                    <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
                                    <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
                                </ul>
                                <div class="panel-footer">
                                    <a class="btn btn-lg btn-block btn-warning" href="#">BUY NOW!</a>
                                </div>
                            </div>
                            <!-- /PRICE ITEM -->
                        </div>
                        </div>
                        <div class="space"></div>
                        <h1>Pricing table with Flexbox</h1>
                        <div class="row">
                            <div class="grid-row">
                                <div class="colum col3">
                                    <div class="panel price panel-red">
                                        <div class="panel-heading  text-center">
                                            <h3>PRO PLAN</h3>
                                        </div>
                                        <div class="panel-body text-center">
                                            <p class="lead" style="font-size:40px"><strong>$10 / month</strong></p>
                                        </div>
                                        <ul class="list-group list-group-flush text-center">
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                                            <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                                        </ul>
                                        <div class="panel-footer">
                                            <a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="colum col3">
                                    <div class="panel price panel-blue">
                                        <div class="panel-heading arrow_box text-center">
                                            <h3>DEV PLAN</h3>
                                        </div>
                                        <div class="panel-body text-center">
                                            <p class="lead" style="font-size:40px"><strong>$20 / month</strong></p>
                                        </div>
                                        <ul class="list-group list-group-flush text-center">
                                            <li class="list-group-item"><i class="icon-ok text-info"></i> Personal use</li>
                                            <li class="list-group-item"><i class="icon-ok text-info"></i> Unlimited projects</li>
                                            <li class="list-group-item"><i class="icon-ok text-info"></i> 27/7 support</li>
                                        </ul>
                                        <div class="panel-footer">
                                            <a class="btn btn-lg btn-block btn-info" href="#">BUY NOW!</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="colum col3">
                                    <div class="panel price panel-green">
                                        <div class="panel-heading arrow_box text-center">
                                            <h3>FREE PLAN</h3>
                                        </div>
                                        <div class="panel-body text-center">
                                            <p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
                                        </div>
                                        <ul class="list-group list-group-flush text-center">
                                            <li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
                                            <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
                                            <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
                                        </ul>
                                        <div class="panel-footer">
                                            <a class="btn btn-lg btn-block btn-success" href="#">BUY NOW!</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="colum col3">
                                    <div class="panel price panel-grey">
                                        <div class="panel-heading arrow_box text-center">
                                            <h3>FREE PLAN</h3>
                                        </div>
                                        <div class="panel-body text-center">
                                            <p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
                                        </div>
                                        <ul class="list-group list-group-flush text-center">
                                            <li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
                                            <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
                                            <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
                                        </ul>
                                        <div class="panel-footer">
                                            <a class="btn btn-lg btn-block btn-warning" href="#">BUY NOW!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div><!-- /.box-body -->
            </div>
        </div>
        </section>
        <!-- /.content -->
    </div>
    </div>
@endsection