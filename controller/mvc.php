<?php
class mvc
{
    public function show($name)
    {
        if (file_exists($name)) {
            return include $name;
        } else {
            return include './view/pagenotfound.php';
        }
    }
}
