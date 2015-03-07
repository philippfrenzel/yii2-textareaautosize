yii2-textareaautosize
=====================
JQuery Fullcalendar Yii2 Extension
JQuery from: http://arshaw.com/fullcalendar/
Version 2.1.1
License MIT

JQuery Documentation:
http://arshaw.com/fullcalendar/docs/
Yii2 Extension by <philipp@frenzel.net>

A tiny sample can be found here:
http://yii2textareaautosize.beeye.org

[![Latest Stable Version](https://poser.pugx.org/philippfrenzel/yii2-textareaautosize/v/stable.svg)](https://packagist.org/packages/philippfrenzel/yii2-textareaautosize)
[![Build Status](https://travis-ci.org/philippfrenzel/yii2-textareaautosize.svg?branch=master)](https://travis-ci.org/philippfrenzel/yii2-textareaautosize)
[![Code Climate](https://codeclimate.com/github/philippfrenzel/yii2-textareaautosize.png)](https://codeclimate.com/github/philippfrenzel/yii2-textareaautosize)
[![Version Eye](https://www.versioneye.com/php/philippfrenzel:yii2-textareaautosize/badge.svg)](https://www.versioneye.com/php/philippfrenzel:yii2-textareaautosize)
[![License](https://poser.pugx.org/philippfrenzel/yii2-textareaautosize/license.svg)](https://packagist.org/packages/philippfrenzel/yii2textareaautosize)

Installation
============
Package is although registered at packagist.org - so you can just add one line of code, to let it run!

add the following line to your composer.json require section:
```json
  "philippfrenzel/yii2-textareaautosize":"*",
```

And ensure, that you have the follwing plugin installed global:

> php composer.phar global require "fxp/composer-asset-plugin:~1.0"

Changelog
---------

29-11-2014 Updated to latest 2.2.3 Version of the library

Usage
=====

Quickstart Looks like this:

```
  
  <?= \yii2textareaautosize\yii2textareaautosize::widget(array(
      'events'=> $events,
  ));
```
