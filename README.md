# Bolt Markup

By default, both [Markdown field](https://docs.bolt.cm/3.6/fields/markdown#input-sanitisation) and [HTML field](https://docs.bolt.cm/3.6/fields/html#input-sanitisation) is available for [Bolt CMS](https://bolt.cm/), but sanitation is done before inserting into the database, making rendering of certain elements impossible; especially, for those starting with \< (Unless you use \&lt;).

But certain markdown specification requires this, e.g.
- \<URL>  as a shorthand for \[URL](URL)

Also, 

```
<?php
// code goes here
```

Also, ability to customize markdown might lead to custom markdown specification... e.g. Furigana and Adding classes to markdown.

Anyway, I made this for the time being for `<`.
