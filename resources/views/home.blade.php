@extends('layouts/base')

@section('title', '首页')

@section('head')
    @parent
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet" />
@stop

@section('body')
    @parent
    <div class="boards">
        <div class="column">
            <div class="section">
                <p class="title">我的妹妹不可能这么可爱</p>
                <p class="description">《我的妹妹哪有这么可爱！》是由日本轻小说家伏见司创作、插画家神崎广负责插画、电击文库刊行的轻小说。官方日文简称《俺の妹》或《俺妹》，中文简称《我妹》、《我的妹妹》 或《俺妹》 。单行本累计发行超过500万部</p>
                <div class="info">
                    <p>
                        <span class="avatar"><img src="./images/11.pic.jpg"></span>
                        <span class="name">兰兆千</span><br>
                        <span class="time">2015-01-01</span>
                    </p>
                </div>
            </div>
            <div class="section">

            </div>
        </div>
        <div class="column">
            <div class="section">

            </div>
            <div class="section">

            </div>
        </div>
        <div class="column">
            <div class="section">

            </div>
            <div class="section">

            </div>
        </div>
        <div class="column">
            <div class="section">

            </div>
            <div class="section">

            </div>

        </div>
        <!--<div class="single">-->

        <!--</div>-->
    </div>
    <div class="footer">
        Fan-tan God 2016 - All rights reserved, Designed and Powered by us
    </div>
@stop