<?php
namespace app;

class Article{

    function __construct(){
        echo 'spacename:',__NAMESPACE__,':::';
    }

    public function insert(){
        echo '添加一条数据<br>';
    }

    public function del(){
        echo '删除一套数据<br>';
    }

}
