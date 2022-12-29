<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"/www/wwwroot/www.todolist.com/public/../application/index/view/index/index.html";i:1672309190;}*/ ?>
<!DOCTYPE html>
<html charset="utf-8">
<head>
    <link rel="stylesheet" href="static/index.css" />

</head>
<body>
    <div class="todoListBox">
    <div class="header-box">
      <div class="header-left">
        <div>+</div>
        <h2>Todo List</h2>
      </div>
      <div class="header-right">
          <form action = "handleAdd" method = "post">
            <input type="text" class="content-input" name="newContent">
            <button class="headerAdd" action='handleAdd'>添加</button>
           </form> 
            <button class="headerAllSelect" onclick='location.href=("handleCleanse")'>清空</button>
          
      </div>
    </div>
    <div class="content">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div style="margin-top:30px">
            <div style="display:inline" class="content-left">
            <label class="pos-rel">
                <input type="checkbox" class="ace">
                <span class="lbl"></span>
            </label>
            </div>
            <div style="display:inline" class="content-item">
                <?php echo $vo['content']; ?>
            </div>
            <div style="display:inline" class="content-right">
              <button class="headerAllSelect" onclick='location.href=("handleDelItem?id=<?php echo $vo['id']; ?>")'>删除</button>
            </div>
        </div>
        
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div>
</body>

