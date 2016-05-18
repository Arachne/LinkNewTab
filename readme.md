Arachne/LinkNewTab
====

[![Build Status](https://img.shields.io/travis/Arachne/LinkNewTab.svg?style=flat-square)](https://travis-ci.org/Arachne/LinkNewTab)
[![Coverage Status](https://img.shields.io/coveralls/Arachne/LinkNewTab.svg?style=flat-square)](https://coveralls.io/github/Arachne/LinkNewTab)
[![Latest stable](https://img.shields.io/packagist/v/arachne/link-new-tab.svg?style=flat-square)](https://packagist.org/packages/arachne/link-new-tab)
[![Downloads this Month](https://img.shields.io/packagist/dm/arachne/link-new-tab.svg?style=flat-square)](https://packagist.org/packages/arachne/link-new-tab)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/Arachne/LinkNewTab/blob/master/license.md)

Latte macro for links that should open in new tab.

Inspired by [this article](https://www.jitbit.com/alexblog/256-targetblank---the-most-underestimated-vulnerability-ever/).

Installation
----

The best way to install Arachne/LinkNewTab is using [Composer](http://getcomposer.org/).

```sh
$ composer require arachne/link-new-tab
```

Usage
----

```
// Your latte template.
<a n:linkNewTab="http://google.com">google</a>

// HTML result.
<a href="http://google.com" target="_blank" rel="noopener noreferrer">google</a>
```

