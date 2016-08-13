<?php

namespace WPTheme\Assets;

function image($path)
{
    return base('img/' . $path);
}

function style($path)
{
    return base('css/' . $path);
}

function script($path)
{
    return base('js/' . $path);
}

function font($path)
{
    return base('fonts/' . $path);
}

function base($path)
{
  return get_template_directory_uri() . '/assets/' . $path;
}
