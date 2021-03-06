<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理模板</title>
    <link rel="stylesheet" type="text/css" href="Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="Public/admin/font/css/font-awesome.min.css"/>
    <script type="text/javascript" src="Public/admin/js/libs/modernizr.min.js"></script>
</head> 
<body>
<div class="main-wrap">
    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-home icon-large"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
    </div>
    <div class="result-wrap">
        <form name="myform" id="myform" method="post">
            <div class="result-title">
                <div class="result-list">
                    <a href="{{U('add')}}"><i class="icon-plus"></i>新增类型</a>
                </div>
            </div>
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                        <th>ID</th>
                        <th>标题</th>
                        <th>品牌LOGO</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach ($data as $k => $v) {?>
                    <tr>
                        <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                        <td>{{$v['brand_id']}}</td>
                        <td>{{$v['brand_name']}}</td>
                        <td><img src="{{$v['brand_logo']}}"></td>
                        <td>
                            <a href="{{U('edit',array('brand_id'=>$v['brand_id']))}}"> 修改 </a> <a href="#"> 删除 </a>
                        </td>
                    </tr>
                    <?php }?>
                </table>
                <div class="list-page"> 2 条 1/1 页</div>
            </div>
        </form>
    </div>
</div>
<!--/main-->

</body>
</html>