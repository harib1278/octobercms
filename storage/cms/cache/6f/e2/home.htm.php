<?php 
class Cms5e2d702631cc6748771929_d814fd681df39a6ff2d0c98ae5a0bea9Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
