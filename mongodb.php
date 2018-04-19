<?php

class mongodb implements struct{

  /**
   * 必须统一抓取！不要各自为战，抓完之后放在私有变量里，随取随用
   */
  function __construct(string $uri){
    //throw new \Error('假装打不开数据库');
  }

  function __destruct(){
    //TODO 关闭DB
  }

  /**
   * 设计师自定义字段
   * 如果更换了模板，可能再也用不到这些字段，应该想办法删除这些DB存储的碎片
   */
  function __get(string $key):?string{
    return $this->$key??null;
  }

  function ctime():\DateTime{
    return new DateTime;
  }

  function mtime():\DateTime{
    return new DateTime;
  }

  function atime():\DateTime{
    return new DateTime;
  }

  function getTitle():?string{
    return __FUNCTION__;
  }

  function getUrl():?string{
    return __FUNCTION__;
  }

  function getKeyword():?string{
    return __FUNCTION__;
  }

  function getKeywords():?array{
    return [];
  }

  function getDescription():?string{
    return __FUNCTION__;
  }

  function getAuthor():?array{
    return [];
  }

  function getAlternate():?array{
    return [];
  }

  function getPayload():?string{
    return __FUNCTION__;
  }

  function getCopyright():?string{
    return __FUNCTION__;
  }

  function setTitle(string $title):bool{
    return true;
  }

  function setUrl(string $url):bool{
    return true;
  }

  function setKeyword(string ...$keyword):bool{
    return true;
  }

  function setDescription(string $description):bool{
    return true;
  }

  function setAuthor(string ...$author):bool{
    return true;
  }

  function setPayload(string $payload):bool{
    return true;
  }

  function setCopyright(string $copyright):bool{
    return true;
  }

}
