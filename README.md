CodeMirror Asset Bundle
=======================
CodeMirror is a versatile text editor implemented in JavaScript for the browser. It is specialized for editing code, and comes with a number of language modes and addons that implement more advanced editing functionality.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2cmf/yii2-codemirror-asset "*"
```

or add

```
"yii2cmf/yii2-codemirror-asset": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Register asset bundle in view:
```php
\yii2cmf\codemirror\CodeMirrorAsset::register($this); 
```

Set a different theme if necessary:

```php
$this->params['codemirror-theme'] = 'darcula';
\yii2cmf\codemirror\CodeMirrorAsset::register($this); 
```
