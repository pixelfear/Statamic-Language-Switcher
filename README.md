# Statamic Language Switcher
> Create links to corresponding languages on your site

If you have your multi-lingual Statamic site set up in language folders with identical sub-structures, you can use this plugin to swap out the language segment.

For example, on the English 'About the team' page named `/en/about/team`, you might want to put a link to the French version (`/fr/about/team`).

```
<a href="{{ lang_switch lang='fr' }}">French</a>
<a href="{{ lang_switch lang='de' }}">Deutsch</a>
```

### Optional parameters:

* `url`: Defaults to the current page.
* `segment`: If your language segment isn't the first one, enter the number.
* `full_url`: Specify `yes` if you want to output the full http URL.
