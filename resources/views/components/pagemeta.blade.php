<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
       <style>
            body {
              margin: 0;
              font-family: "Lato", sans-serif;
              background-color: #f5f4f4;
            }


            #sidebar{
                margin-left: 0;
                padding-left: 0;
            }
            #sidebar_content{

                background-color: #dfdfdf
            }











            div.content {
              margin-left:;
              padding: 5px;
              height: 100px;
            }
            .container{
                margin: 0%;
                padding: 0;
            }
            .card {
                width: 100%;
                height: 100%;
                padding: 2px;
                align-items: center;
                text-align: center;
            }
            #adverticement{
                padding-top: 0px;
                max-width: 100;
                max-height: 100%;
                text-align: center;
                background-color: rgb(255, 255, 255);
            }
            .advert-title{
                font-weight: bold;
                font-size:15px;
                font-style: italic;
                color:rgb(53, 53, 53);
                font-family:cursive;
                text-align: center;

            }
            .advert-text{
                font-size:13px;
                color:rgb(53, 53, 53);
                font-family:cursive;
                text-align: center;
            }

            div.title {
                font-size: 20px;
                font-weight: bold;
                font-family:cursive;
                color: rgba(56, 56, 56, 0.905);
                text-align: center;
                padding:3px;
            }
            h2.title, h4.title, h3.title{

                font-weight: bold;
                font-family:cursive;
                color: rgba(56, 56, 56, 0.905);
                text-align: center;

            }
                       section .container{
                background-color:white;

                padding:0;
                margin:0;
            }
            .lesson-number{
                font-size: 14px;
                font-weight: bold;
                font-family:cursive;
                color: rgba(56, 56, 56, 0.905);
                text-align: center;
                padding:3px;
            }
            p.main_activity{
                font-size:16px;
                font-weight: bold;
                color:rgb(154, 47, 47);
                font-family:cursive;
                text-align: center;
                text-shadow: 0px 0px 2px black;
            }
            p.activity_description,pre.activity_description{
                font-size:15px;
                font-style: italic;
                color:rgb(53, 53, 53);
                font-family:cursive;
                text-align: center;
            }
            .card{
                border:1px solid rgb(222, 220, 220);
            }
            .card:hover{
                width: 120%;
                background-color:darkgray;
                box-shadow: 2px #e24040;
                transition: width 1s;

            }
            .card-title{
                font-family: cursive;
                color: rgba(56, 56, 56, 0.905);
                font-size: 18px;
                font-weight: bold;

            }
            .card-title:hover{
                font-family: cursive;
                color: red;
                font-size: 18px;
                font-weight: bold;

            }
            .aboutus_description{
                font-size:25px;
                font-weight: normal;
                color:rgb(33, 32, 32);
                font-family: Garamond, serif;
                text-align: center;
            }
            div.activity_container{
                /*border:1px solid #a7a2a2;*/
                padding-top:0;
                background-color: #ffffffdf;



            }
            .container-body{
                margin:2px;
                /*background-image: url('images/great-wall-of-china.jpg');*/
                padding:2rem;
            }
            p.supporting_verses,p.activity_description,p.activity_description{
                margin-left: 0rem;
                margin-right: 0rem;
                margin-bottom: 0rem;
                color: #000000;

            }
            .dropdown-menu{
                background-color: #5f5e5e;

            }
            .dropdown-item{
                color:rgba(255, 255, 255, 0.927);
            }
            .dropdown-menu li a:hover{
                color: red;
                background-color: black;
            }
            hr.ruler{
                box-shadow: 2px 2px 2px #0a0000;
                width:50%;
                height:2px;

                background-color: white;
                left: 25%;
                float: auto;
                padding-top: 0;
                margin-top:0;
                border: 1px solid black;
                position: relative;


            }
            h5.activity_time{
                color: #908f8f;
                padding-top:0;
                margin-top:0;
                text-align: center;
                font-weight: bold;
                font-size:15px;
                font-family: monospace;
                text-shadow: 1px 1px 2px black;
            }
            .carousel_container{
                padding:2%;
            }
            .carousel_container img{
                border-top-left-radius: 5%;
                border-top-right-radius: 5%;
                border-end-start-radius: 5%;
                border-end-end-radius: 5%;

            }

            .activity_body{

                border:1px solid #dad9d9;
            }
            h3 {
                text-shadow: 2px 2px 4px #575656;
            }
            .dashboard{
                margin:5px;
                /*background-image: url('images/great-wall-of-china.jpg');*/
                padding:20px;
                margin-bottom:1rem;
                margin-top:20px;
                margin-left:2rem;
                margin-right: 2rem;
                color:#0a0000;
                font-weight: bold;
                padding-left:3rem;
                background-color: #ffffff
            }
            .icon{
                text-align: center;
                width: 5%;
                border-top-left-radius: 3rem;
                border-top-right-radius: 3rem;
                border-end-end-radius: 3rem;
                border-end-start-radius: 3rem;
                margin:20px;
                background-color: rgb(137, 132, 132);
                margin-left: 5rem;
                box-shadow: 3px 3px 3px black;


            }

            #email{
                color: rgb(251, 248, 248);
            }
            #facebook{
                color:rgb(13, 11, 123);
            }
            #call{
                color:black;
            }
            .footer-icon{
                align-items: center;
                padding-left: 20%;
                text-align: center;

            }
            i{
                align-items: center
            }
            .icon:hover{
                background-color: red;
            }
            .card-link:hover{
                color:red;
            }
            .navbar-nav{
                align-content: center;
            }
            pre{
                font-size: 16px;
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }


            ;
            @media screen and (max-width: 800px) {
              .sidebar {
                width: 100%;
                height: auto;
                position: relative;
              }
              .flex-row {
                 flex-direction: column;
                }
              .sidebar a {float: left;}
              div.content {margin-left: 0;}
              .sidebar{height: 100%;}
            }

            @media only screen and (max-width: 600px) {
  body {
    background-color: #f5f4f4;

  }
  .icon{
                text-align: center;
                width: 12%;
                border-top-left-radius: 3rem;
                border-top-right-radius: 3rem;
                border-end-end-radius: 3rem;
                border-end-start-radius: 3rem;
                margin:20px;
                padding-left:5rem;
                background-color: rgb(137, 132, 132);
                margin-left: 0;
                box-shadow: 3px 3px 3px rgb(110, 108, 108);
            }
            #email, #facebook, #call{
                font-size:25px;
            }
            .flex-row {
                 flex-wrap: wrap;
                }
                .carousel-caption{
                text-emphasis: bold;
                color: rgb(5, 5, 5);
                background-color: #ffffff42;

                box-shadow: 0px 0px 3px red;


            }
            .carousel-description{
                font-size: 10x;
                font-weight: normal;
                font-family: 'Times New Roman', Times, serif;
                color: rgba(250, 3, 3, 0.905);
                text-align: center;
               background-color: #ffffff42;

            }

}




            </style>
    </head>
    <body >
         {{ $slot}}
    </body>
</html>
