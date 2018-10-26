<?php
require(__DIR__ . '/vendor/autoload.php');

//加载函数
app\helps\arr1\help_01();

//加载控制器类
use App\Article;
$article = new Article();
$article->insert();

//加载数据模型类
$amodel = new App\ArticleModel();
$amodel->insert();

//加载模型分组类
$abmodel = new App\book\NewsModel();
$abmodel->insert();
