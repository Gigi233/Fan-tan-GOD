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
            <a class="section" href="/post/11">
                <p class="title">我的妹妹不可能这么可爱</p>
                <p class="description">《我的妹妹哪有这么可爱！》是由日本轻小说家伏见司创作、插画家神崎广负责插画、电击文库刊行的轻小说。官方日文简称《俺の妹》或《俺妹》，中文简称《我妹》、《我的妹妹》 或《俺妹》 。单行本累计发行超过500万部</p>
                <div class="info">
                    <p>
                        <span class="avatar"><img src="./images/35.pic.jpg"></span>
                        <span class="name">lzq</span><br>
                        <span class="time">2015-01-01</span>
                    </p>
                </div>
            </a>
            <a class="section" href="/post/10">
                <p class="title">族长的秋天</p>
                <p class="description">《族长的秋天》以近乎散文的方式讲述了一个独裁者无所不能却孤独落寞的一生。他在难以数算的岁月中享尽荣光，对权力的痴迷达到了疯狂的地步，却无法改变“没有能力去爱”的命运，于是他一边用权力的罪恶补偿这无耻的</p>
                <div class="info">
                    <p>
                        <span class="avatar"><img src="./images/41.pic.jpg"></span>
                        <span class="name">zhouhy</span><br>
                        <span class="time">2016-04-04</span>
                    </p>
                </div>
            </a>
        </div>
        <div class="column">
            <a class="section" href="/post/7">
                <p class="title">穿越时空的电话</p>
                <p class="description">如果你有三次机会，可以拨打一通穿越时空的电话。</p>
                <div class="info">
                    <p>
                        <span class="avatar"><img src="./images/41.pic.jpg"></span>
                        <span class="name">zhouhy</span><br>
                        <span class="time">2016-07-01</span>
                    </p>
                </div>
            </a>
            <a class="section" href="/post/1">
                <p class="title">百年孤独</p>
                <p class="description">
                    多年以后，奥雷连诺上校站在行刑队面前，准会想起父亲带他去参观冰块的那个遥远的下午。当时，马孔多是个二十户人家的村庄，一座座土房都盖在河岸上，河水清澈，沿着遍布石头的河床流去，河里的石头光滑、洁白，活象史前的巨蛋。
                    这块天地还是新开辟的，许多东西都叫不出名字，不得不用手指指点点。每年三月，衣衫褴楼的吉卜赛人都要在村边搭起帐篷，在笛鼓的喧嚣声中，向马孔多的居民介绍科学家的最新发明。他们首先带来的是磁铁。一个身躯高大的吉卜赛人，自称梅尔加德斯，满脸络腮胡子，手指瘦得象鸟的爪子，
                </p>
                <div class="info">
                    <p>
                        <span class="avatar"><img src="./images/34.pic.jpg"></span>
                        <span class="name">ziyuanliu</span><br>
                        <span class="time">2016-04-04</span>
                    </p>
                </div>
            </a>
        </div>
        <div class="column">
            <a class="section" href="/post/16">
                <p class="title">《故事中国》多层故事接龙</p>
                <p class="description">
                        张诚是一家广告公司的高级策划，收入高，工作也很辛苦，常常加班到深夜。好在他目前是单身，实在工作得晚了，干脆睡在公司，第二天早上起来接着上班。
                        这天晚上，张诚又在公司加班，时间不知不觉中流逝，等他终于完成工作，把眼睛从电脑屏幕上移开的时候，才发现同事们早就走光了，整个大办公室里空荡荡的，估计整幢大楼都没人了。
                </p>
                <div class="info">
                    <p>
                        <span class="avatar"><img src="./images/41.pic.jpg"></span>
                        <span class="name">zhouhy</span><br>
                        <span class="time">2016-04-04</span>
                    </p>
                </div>
            </a>
            <a class="section" href="/post/13">
                <p class="title">二狗的故事</p>
                <p class="description">春天到了，春暖花开，冰雪融化。二狗迎着和煦的春风，走进了美丽的北大校园。但这时的他，还不曾意识到，他会遇到怎样的一群人。</p>
                <div class="info">
                    <p>
                        <span class="avatar"><img src="./images/34.pic.jpg"></span>
                        <span class="name">ziyuanliu</span><br>
                        <span class="time">2016-04-04</span>
                    </p>
                </div>
            </a>
        </div>
        <div class="column">
            <a class="section" href="/post/8">
                <p class="title">霍乱时期的爱情</p>
                <p class="description">这是确定无疑的：苦扁桃的气息总勾起他对情场失意的结局的回忆。胡维纳尔?乌尔比诺医生刚走进那个半明半暗的房间就悟到了这一点。他匆匆忙忙地赶到那里本是为了进行急救，但那件多年以来使他是心的事已经不可挽回了</p>
                <div class="info">
                    <p>
                        <span class="avatar"><img src="./images/34.pic.jpg"></span>
                        <span class="name">ziyuanliu</span><br>
                        <span class="time">2016-04-04</span>
                    </p>
                </div>
            </a>
            <a class="section" href="/post/12">
                <p class="title">最后一案</p>
                <p class="description">我怀着沉痛的心情提笔写下这最后一案，记下我朋友歇洛克·福尔摩斯杰出的天才。从“血字的研究”第一次把我们结合在一起，到他介入“海军协定”一案 ——由于他的介入，毫无疑问，防止了一场严重的国际纠纷——尽管</p>
                <div class="info">
                    <p>
                        <span class="avatar"><img src="./images/35.pic.jpg"></span>
                        <span class="name">lzq</span><br>
                        <span class="time">2016-04-09</span>
                    </p>
                </div>
            </a>

        </div>
        <!--<div class="single">-->

        <!--</div>-->
    </div>
    <div class="footer">
        Fan-tan God 2016 - All rights reserved, Designed and Powered by us
    </div>
@stop