<?php


namespace Frbit\WwwApp\Controllers;

use Frbit\ProductDefinition\Accessor;
use Frbit\ProductDefinition\Cache;
use Illuminate\Cache\ApcStore;
use Illuminate\Cache\ApcWrapper;
use Illuminate\Cache\NullStore;
use SlimController\SlimController;

/**
 * @package Frbit\WwwApp\Controllers
 **/
class PagesController extends SlimController
{
    public function indexAction($topic = null, $page = null, $sub = null)
    {
        $name = implode('/', array_filter([$topic, $page, $sub])) ?: 'start';
        $name = preg_replace('[^a-z0-9A-Z\-_\.]', '', $name);
        $name = preg_replace('/\.\.+/', '', $name);
        $name = preg_replace('#//+#', '/', $name);
        $path = APP_PATH . '/templates/pages/' . $name . '.twig';

        if (file_exists($path)) {
            $this->render("pages/$name", [
                'path'        => strip_tags($name),
                'environment' => $this->getEnvironment()
            ]);

        } else {
            $this->app->render('pages/404.twig', [
                'path'        => strip_tags($name),
                'environment' => $this->getEnvironment()
            ], 404);
        }
    }

    public function pricingAction($template = 'pricing')
    {
        $environment = $this->getEnvironment();
        $currency    = 'EUR'; // $this->param('currency');
        $cache       = $environment === 'local' ? new NullStore() : new ApcStore(new ApcWrapper());
        $accessor    = new Accessor(new Cache($cache), $currency);
        if ($this->request()->get('flush-cache', '') === 'please') {
            $accessor->useCache(false);
        }

        try {
            $presetsEu1 = $accessor->getPresets('app', false, 'eu1');
            $presetsEu2 = $accessor->getPresets('app', false, 'eu2');
            array_shift($presetsEu1);
            array_unshift($presetsEu1, $presetsEu2[0]);
            $this->render("pages/$template.twig", [
                'path'        => 'pricing',
                'environment' => $environment,
                'presets'     => $presetsEu1,
                'products'    => $accessor->getProducts('app', true),
            ]);
        } catch(\Exception $e) {
            $this->app->render('pages/404.twig', [
                'path'        => $template,
                'environment' => $this->getEnvironment()
            ], 404);
        }

    }


    public function supportAction()
    {
        $environment = $this->getEnvironment();
        $currency    = 'EUR'; // $this->param('currency');
        $cache       = $environment === 'local' ? new NullStore() : new ApcStore(new ApcWrapper());
        $accessor    = new Accessor(new Cache($cache), $currency);
        if ($this->request()->get('flush-cache', '') === 'please') {
            $accessor->useCache(false);
        }

        $this->render("pages/support.twig", [
            'path'        => 'support',
            'environment' => $environment,
            'support'     => $accessor->getProduct('support', true, true, 'any'),
        ]);
    }


    /**
     * @return string
     */
    protected function getEnvironment()
    {
        $environment = isset($_SERVER['APP_ENV']) ? $_SERVER['APP_ENV'] : (DEBUGGING ? 'local' : 'production');

        return $environment;
    }

}