<?php
class Route
{
    public function handleRoute($url)
    {
        global $routes;
        unset($routes["default_controller"]);

        $url = trim($url, "/");

        if (!empty($routes)) {
            foreach ($routes as $key => $value) {
                if (preg_match("~" . $key . "~is", $url)) {
                    $url = preg_replace("~" . $key . "~is", $value, $url);
                }
            }
        }

        return $url;
    }
}
