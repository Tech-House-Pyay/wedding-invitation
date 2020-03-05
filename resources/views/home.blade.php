@extends('layouts.app')

@section('content')
    <head>
        <style>
            html, body {
                /*background-color: #fff;*/
                background-image: url({{'/img/placehold/bb.jpg'}});
                background-attachment: fixed;

                color: #636b6f;
                /*color: #db4766;*/
                font-family: 'Nunito', sans-serif;
                font-weight: 400;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 85px;
                font-family: "Brush Script Std";
                color:#fea3b6;
                margin-top: 20%;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="content">
                <div class="title m-b-md">
                    Wedding Invitation
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
