<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="./css/style.css" />
  <script src="http://cdn.bootcss.com/require.js/2.1.11/require.min.js"></script>
  <script type="text/javascript">
    require.config({
      'baseUrl': './js/',
      'paths': {
        '$': 'http://cdn.bootcss.com/jquery/1.11.0/jquery.min',
        'site.pageScript': './index'
      }
    });
  </script>
</head>
<body>
<!-- banner begin -->
<div class="banner">
  <div class="wrap clearfix">
    <div class="banner-logo">
      <a href="url" target="_blank" title="index"><img src="http://dummyimage.com/100x40/333/ccc.gif" alt="" width="100" height="40" /></a>
    </div>
    <div class="banner-menu">
      <ul>
        <li><a href="url" target="_blank" title="首页" class="selected">首页</a></li>
        <li><a href="url" target="_blank" title="首页">首页</a></li>
        <li><a href="url" target="_blank" title="首页">首页</a></li>
        <li><a href="url" target="_blank" title="首页">首页</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- search bar begin -->
<div class="searchbar middlewrap">
  <form action="url">
    <label for="sele1">select 1</label>
    <select name="sele1" id="sele1">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
    <label for="sele2">select 2</label>
    <select name="sele1" id="sele2">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
    <label for="sele3">select 3</label>
    <select name="sele1" id="sele3">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
    <label for="sele4">select 4</label>
    <select name="sele1" id="sele4">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
    <input type="submit" value="搜索" />
    <input type="reset" value="重置" />
  </form>
</div>
<!-- search bar end -->

<!-- photo wall begin -->
<div class="photowall middlewrap">
  <div class="photowall-container clearfix">
    <ul>
      <li class="big">
        <a href="url" target="_blank" title="111">
            <img src="http://tutu2.baidu.com/1003/similar/20140403/07/212697782,2691806401.jpg" alt="" width="205" height="205" />
           <span>Saber</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
           <img src="<?php echo $picWalls[1]['img_url'];?>" alt="" width="100" height="100" />
           <span><?php echo $picWalls[1]['nickname'] ?></span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
           <img src="<?php echo $picWalls[2]['img_url'];?>" alt="" width="100" height="100" />
           <span><?php echo $picWalls[2]['nickname'] ?></span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
    </ul>
    <ul>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
    </ul>
    <ul>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
    </ul>
    <ul>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li class="big">
        <a href="url" target="_blank" title="111">
            <img src="<?php echo $picWalls[0]['img_url'];?>" alt="" width="205" height="205" />
           <span><?php echo $picWalls[0]['nickname'] ?></span>
        </a>
      </li>
    </ul>
    <ul class="scol">
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
      <li>
        <a href="url" target="_blank" title="111">
          <img src="http://dummyimage.com/100x100/333/ccc.gif" alt="" width="100" height="100" />
          <span>title</span>
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- photo wall end -->

<!-- footer begin -->
<div class="footer middlewrap">
  <hr />
  Powerd by <a href="javascript: alert('yohoho!');" title="Sunny Ding">Sunny Ding</a>
  <img src="http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/91/lazu_thumb.gif" /> &
  <a href="javascript: alert('nyan!');" title="Konrumi">Konrumi</a>
  <img src="http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/91/lazu_thumb.gif" />. &copy; 2014.
</div>
<!-- footer end -->

<!-- script section begin -->
<script type="text/javascript">
  require(['site.pageScript'], function () {
    console.log('load index');
  });
</script>
<!-- script section end -->
</body>
</html>
