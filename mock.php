<?php namespace page;

final class mock implements struct{

  /**
   * 简单的lorem，必须从外部加载字典文件
   * @param ...$dict ...file('/etc/hosts', FILE_USE_INCLUDE_PATH|FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES)
   */
  private function lorem(int $min=3, int $max=8, string ...$dict):string{
    $dict = $dict?:['lorem', 'ipsum', 'dolor', 'sit', 'amet', 'consectetur', 'adipiscing', 'elit', 'a', 'ac', 'accumsan', 'ad', 'aenean', 'aliquam', 'aliquet', 'ante', 'aptent', 'arcu', 'at', 'auctor', 'augue', 'bibendum', 'blandit', 'class', 'commodo', 'condimentum', 'congue', 'consequat', 'conubia', 'convallis', 'cras', 'cubilia', 'curabitur', 'curae', 'cursus', 'dapibus', 'diam', 'dictum', 'dictumst', 'dignissim', 'dis', 'donec', 'dui', 'duis', 'efficitur', 'egestas', 'eget', 'eleifend', 'elementum', 'enim', 'erat', 'eros', 'est', 'et', 'etiam', 'eu', 'euismod', 'ex', 'facilisi', 'facilisis', 'fames', 'faucibus', 'felis', 'fermentum', 'feugiat', 'finibus', 'fringilla', 'fusce', 'gravida', 'habitant', 'habitasse', 'hac', 'hendrerit', 'himenaeos', 'iaculis', 'id', 'imperdiet', 'in', 'inceptos', 'integer', 'interdum', 'justo', 'lacinia', 'lacus', 'laoreet', 'lectus', 'leo', 'libero', 'ligula', 'litora', 'lobortis', 'luctus', 'maecenas', 'magna', 'magnis', 'malesuada', 'massa', 'mattis', 'mauris', 'maximus', 'metus', 'mi', 'molestie', 'mollis', 'montes', 'morbi', 'mus', 'nam', 'nascetur', 'natoque', 'nec', 'neque', 'netus', 'nibh', 'nisi', 'nisl', 'non', 'nostra', 'nulla', 'nullam', 'nunc', 'odio', 'orci', 'ornare', 'parturient', 'pellentesque', 'penatibus', 'per', 'pharetra', 'phasellus', 'placerat', 'platea', 'porta', 'porttitor', 'posuere', 'potenti', 'praesent', 'pretium', 'primis', 'proin', 'pulvinar', 'purus', 'quam', 'quis', 'quisque', 'rhoncus', 'ridiculus', 'risus', 'rutrum', 'sagittis', 'sapien', 'scelerisque', 'sed', 'sem', 'semper', 'senectus', 'sociosqu', 'sodales', 'sollicitudin', 'suscipit', 'suspendisse', 'taciti', 'tellus', 'tempor', 'tempus', 'tincidunt', 'torquent', 'tortor', 'tristique', 'turpis', 'ullamcorper', 'ultrices', 'ultricies', 'urna', 'ut', 'varius', 'vehicula', 'vel', 'velit', 'venenatis', 'vestibulum', 'vitae', 'vivamus', 'viverra', 'volutpat', 'vulputate'];

    shuffle($dict);

    return join(array_slice($dict, 0, mt_rand(min($min,$max),max($min,$max))), ' ');
  }


  /**
   * 设计师自定义字段
   * 如果更换了模板，可能再也用不到这些字段，应该想办法删除这些DB存储的碎片
   */
  function __get(string $key):?string{
    return $this->$key??null;
  }

  function getCtime():\DateTime{
    return new \DateTime('-7 day');
  }

  function getMtime():\DateTime{
    return new \DateTime('-3 day');
  }

  function getTitle():?string{
    return $this->lorem(1,3);
  }

  function getUrl():?string{
    return __FUNCTION__;
  }

  function getKeyword():?string{
    return $this->lorem(1,1);
  }

  function getKeywords():?array{
    return [
      $this->lorem(1,3),
      $this->lorem(1,3),
      $this->lorem(1,3),
    ];
  }

  function getDescription():?string{
    return $this->lorem(4,15);
  }

  function getAuthor():?array{
    return $this->lorem(1,3);
  }

  function getAlternate():?array{
    return [];
  }

  function getPayload():?string{
    return
       '<p>'.ucfirst($this->lorem(10,100)).'.</p>'
      .'<p>'.ucfirst($this->lorem(20,200)).'.</p>'
      .'<p>'.ucfirst($this->lorem(10,100)).'.</p>'
      .'<p>'.ucfirst($this->lorem(30,100)).'.</p>'
      .'<p>'.ucfirst($this->lorem(30,200)).'.</p>'
      .'<p>'.ucfirst($this->lorem(10,200)).'.</p>'
      .'<p>'.ucfirst($this->lorem(10,100)).'.</p>';
  }

  function getCopyright():?string{
    return ['MIT','CC','Apache','GPL','BSD','Mozilla','LGPL'][mt_rand(0,6)];
  }

}
