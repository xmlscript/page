<?php

class page{

  static $payload;//TODO strip_tags('仅允许文字排版相关的tag'), b,i,u,mark,del,ins,q,blockquote,abbr,a,...

  //注意！null和''是不同的待遇，前端设计师很可能判断null而不显示某些元素
  static $id;
  static $title;
  static $url;//持久链接
  static $path;//TODO 兼容多个host的同质化内容
  static $file;
  static $keyword;
  static $keywords=[];
  static $tags=[];
  static $description;
  //static $uid;//owner未必是author本人，也许是第三方转载
  //static $gid;
  static $author=[];
  static $译者=[];
  static $alternate=[];
  static $md5;
  static $size;
  static $stat;
  static $ctime;
  static $mtime;
  //static $atime;
  static $expires;//TODO 预计过期时间，如果内容时效性较强，可以预设这个时间，dashboard可以提前提醒是否改动
  static $seealso;
  static $lang;
  static $table_of_contents;//本文目录
  static $appendix;//本文生词表
  static $ref;//引用参考
  static $附件;
  static $pv;
  static $EOF=false;//完成度
  static $via;
  static $cite;
  static $robot=true;
  static $copyright;//净荷的版权，不是webapp的版权

  /**
   * 其他自定义字段怎么传递？？？
   */
  final function __construct(dal $db){
    self::$title = $db->getTitle();
    self::$url = $db->getUrl();
    self::$keyword = $db->getKeyword();
    self::$keywords = $db->getKeywords();
    self::$description = $db->getDescription();
    self::$alternate = $db->getAlternate();
    self::$payload = $db->getPayload();
    self::$copyright = $db->getCopyright();
    self::$ctime = $db->getCtime();
    self::$mtime = $db->getMtime();
    //TODO 一旦发现所有静态变量都是empty，就lorem
  }

}
