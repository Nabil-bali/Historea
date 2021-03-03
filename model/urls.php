<?php
class Urls
{
    public function returnUrl()
    {
        $url = parse_url($_SERVER['REQUEST_URI']);

        return $url;
    }

    public function unsetParam()
    {
        $url = parse_url($_SERVER['REQUEST_URI']);
        $query = parse_str($url['query'], $params);
        unset($params['page']);
        $query = http_build_query($params);
        $url = $url['path'].'?'.$query;
        
        return $url;
    }
}


    