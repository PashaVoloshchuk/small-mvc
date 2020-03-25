<?php

class Autoload
{
    public function getFolders()
    {
        return [
            '/assets/',
            '/components/',
            '/config/',
            '/controllers/',
            '/models/',
            '/widgets/',
        ];
    }

    public function loadFiles()
    {
        $folders = $this->getFolders();
        if (is_array($folders)) {
            foreach ($folders as $folder) {
                $files = scandir(ROOT . $folder);
                unset($files[0], $files[1]);
                if (is_array($files)) {
                    foreach ($files as $file) {
                        if (!is_dir(ROOT . $folder . $file)) {
                            if (pathinfo(ROOT . $folder . $file)['extension'] === 'php') {
                                include_once ROOT . $folder . $file;
                            }
                        }

                    }
                }
            }
        }
    }
}

?>