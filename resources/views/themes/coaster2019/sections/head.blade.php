<!DOCTYPE html>
<html lang="en">
<head itemscope>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{!! PageBuilder::block('meta_title', ['meta' => true]) !!}</title>
    <meta name="description" content="{!! PageBuilder::block('meta_description', ['meta' => true]) !!}">
    <meta name="keywords" content="{!! PageBuilder::block('meta_keywords', ['meta' => true]) !!}">

    <meta property="og:title" content="{!! PageBuilder::block('meta_title', ['meta' => true]) !!}">
    <meta property="og:description" content="{!! PageBuilder::block('meta_description', ['meta' => true]) !!}">
    <meta itemprop="name" content="{!! PageBuilder::block('meta_title', ['meta' => true]) !!}">
    <meta itemprop="description" content="{!! PageBuilder::block('meta_description', ['meta' => true]) !!}">

    <meta name="revisit-after" content="7 days">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Passion+One:400,700,900" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{!! PageBuilder::css('bootstrap.min') !!}" rel="stylesheet">
    <link href="{!! PageBuilder::css('_banner') !!}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{!! PageBuilder::css('font-awesome.min') !!}" rel="stylesheet">
    <link href="{!! PageBuilder::css('icon-font.min') !!}" rel="stylesheet">
    <link href="{!! PageBuilder::css('main') !!}" rel="stylesheet">
    <link href="{!! PageBuilder::css('plugins') !!}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {!! PageBuilder::block('header_html', ['source' => true]) !!}

</head>

<body id="top">

{!! PageBuilder::menu('main_menu') !!}
