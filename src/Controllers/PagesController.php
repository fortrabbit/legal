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
                'request'     => $this->request(),
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
        $region      = $this->app->request->get('region', 'eu2');

        if ($c = strtoupper($this->app->request->get('currency', ''))) {
            if (in_array($c, ['USD', 'EUR'])) {
                $this->setCurrencyCookie($c);
                return $this->app->redirect('/pricing');
            }
        }

        if (in_array($region, ['eu1', 'eu2', 'us0', 'us1'])) {
            $includeFile = "pricing_region_{$region}.html";
            $this->render("pages/pricing_wrapper.twig", [
                'currency'    => $this->getCurrencyCookie() ?: 'EUR',
                'path'        => 'pricing',
                'environment' => $environment,
                'innerHtml'   => $includeFile,
            ]);
        }


    }


    public function customersAction()
    {
        $environment = $this->getEnvironment();

        $customers = $this->getResource('customers');
        $brands = $this->getResource('customers-brands');

        $this->render("pages/customers.twig", [
          'environment' => $environment,
          'customers'   => $customers,
          'brands'      => $brands
        ]);

    }

    public function customersAppsAction($category = null)
    {
        $environment = $this->getEnvironment();
        $apps        = $this->getResource('customers-apps', 'category', $category);
        $categories  = $this->getResource('customers-categories', 'type', 'app');

        if ($category = $this->getResource('customers-categories', 'slug', $category)) {
          $category = $category[0];
        }


        $this->render("pages/customers-apps.twig", [
          'environment' => $environment,
          'categories'  => $categories,
          'category'    => $category,
          'apps'        => $apps
        ]);

    }


    /*
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
    */


    public function supportAction()
    {
        $includeFile = "pricing_support.html";
        $environment = $this->getEnvironment();

        $this->render("pages/support.twig", [
            'path'                => 'support',
            'environment'         => $environment,
            'supportPricingTable' => $includeFile,
        ]);
    }


    public function countryAction()
    {
        $currency = 'USD';
        $this->app->config('cookies.domain', '.fortrabbit.com');

        if (!$this->getCurrencyCookie()) {
            $ip   = $this->app->request->getIp();
            $eu   = ['DE', 'FR', 'GB', 'UK', 'IE', 'NO', 'SE', 'DK', 'IT', 'NL', 'BE'];
            $json = json_decode(file_get_contents('http://ipinfo.io/' . $ip), true);

            if (isset($json['country']) && in_array($json['country'], $eu)) {
                $currency = 'EUR';
            }
        }

        $this->setCurrencyCookie($currency);
        $this->app->expires('2 days');

        $this->render("snippets/country.js.twig", [
            'currency' => $currency
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

    protected function setCurrencyCookie($currency = 'EUR')
    {
        $this->app->config('cookies.domain', '.fortrabbit.com');
        $this->app->setCookie('currency', $currency, '6 months');
    }

    protected function getCurrencyCookie()
    {
        $this->app->config('cookies.domain', '.fortrabbit.com');
        return $this->app->request->cookies('currency');
    }

    protected function getResource($name, $filterAttr = '', $filterVal = '')
    {
      $resourcesPath = realpath(__DIR__ . '/../../resources');
      $resource = json_decode(file_get_contents($resourcesPath . "/{$name}.json"));

      if ($filterAttr && $filterVal) {
          $resource = array_filter($resource, function($item) use ($filterAttr, $filterVal) {
            return ($item->$filterAttr == $filterVal);
          });
      }

      return array_values($resource);
    }


}
