<?php
if (!class_exists('Assets')) {
    /**
     * Class Assets
     */
    class Assets
    {
        const VERSION = '1.0.0';

        /**
         * @var string
         */
        private $path;
        /**
         * @var bool
         */
        private $direction;
        /**
         * @var string
         */
        private $name;
        /**
         * @var string[]
         */
        private $shim;

        /**
         * Assets constructor.
         * @param $path
         * @param string[] $shim
         * @param string $direction
         */
        function __construct($path, $shim = ['jquery'], $direction = 'footer')
        {
            $this->path = $path;
            $this->direction = $this->setDirectionBool($direction);
            $this->name = $this->getAssetName();
            $this->shim = $shim;

            if ($this->getFileType() == 'css') {
                add_action('wp_enqueue_scripts', [$this, 'addCss']);
            } else if ($this->getFileType() == 'js') {
                add_action('wp_enqueue_scripts', [$this, 'addJs']);
            }

            add_action('wp_footer', [$this, 'myDeregisterScripts']);
        }

        function myDeregisterScripts()
        {
            wp_deregister_script('wp-embed');
        }

        /**
         * @return string
         */
        function getAssetName()
        {
            $pathExplode = explode('/', $this->path);
            $filename = end($pathExplode);
            $name = explode('.', $filename);
            return PROJECT_KEY . '-' . $name[0];
        }

        /**
         * @param $d
         * @return bool
         */
        function setDirectionBool($d)
        {
            if ($d == 'footer') {
                return true;
            }
            return false;
        }

        /**
         * @return mixed|string
         */
        function getFileType()
        {
            return pathinfo($this->path)['extension'];
        }

        function changeJqueryVersion()
        {
            wp_deregister_script('jquery');
            wp_register_script('jquery',
                LIB_PATH . '/jquery.js', false, '3.5.1');
            wp_enqueue_script('jquery');
        }

        function addCss()
        {
            wp_enqueue_style($this->name, $this->path, [], self::VERSION);
        }

        function addJs()
        {
            wp_enqueue_script($this->name, $this->path, $this->shim, self::VERSION, $this->direction);
        }
    }
}
