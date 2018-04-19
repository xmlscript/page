<?php

interface struct{
  function __get(string $key);
  function getTitle():?string;
  function getUrl():?string;
  function getKeyword():?string;
  function getKeywords():?array;
  function getDescription():?string;
  function getAuthor():?array;
  function getAlternate():?array;
  function getPayload():?string;
  function getCopyright():?string;
  function getCtime():?\DateTime;
  function getMtime():?\DateTime;
}
