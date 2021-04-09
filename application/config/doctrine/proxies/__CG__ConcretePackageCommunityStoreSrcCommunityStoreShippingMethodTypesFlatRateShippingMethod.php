<?php

namespace DoctrineProxies\__CG__\Concrete\Package\CommunityStore\Src\CommunityStore\Shipping\Method\Types;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FlatRateShippingMethod extends \Concrete\Package\CommunityStore\Src\CommunityStore\Shipping\Method\Types\FlatRateShippingMethod implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'baseRate', 'rateType', 'perItemRate', 'perWeightRate', 'minimumAmount', 'maximumAmount', 'minimumWeight', 'maximumWeight', 'countries', 'countriesSelected', 'smtmID', 'smID', 'disableEnabled', 'view', 'viewPath', 'theme', 'controllerActionPath', 'themeViewTemplate', 'helpers', 'sets', 'action', 'request', 'parameters', 'app'];
        }

        return ['__isInitialized__', 'baseRate', 'rateType', 'perItemRate', 'perWeightRate', 'minimumAmount', 'maximumAmount', 'minimumWeight', 'maximumWeight', 'countries', 'countriesSelected', 'smtmID', 'smID', 'disableEnabled', 'view', 'viewPath', 'theme', 'controllerActionPath', 'themeViewTemplate', 'helpers', 'sets', 'action', 'request', 'parameters', 'app'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FlatRateShippingMethod $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setBaseRate($baseRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBaseRate', [$baseRate]);

        return parent::setBaseRate($baseRate);
    }

    /**
     * {@inheritDoc}
     */
    public function setRateType($rateType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRateType', [$rateType]);

        return parent::setRateType($rateType);
    }

    /**
     * {@inheritDoc}
     */
    public function setPerItemRate($perItemRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerItemRate', [$perItemRate]);

        return parent::setPerItemRate($perItemRate);
    }

    /**
     * {@inheritDoc}
     */
    public function setPerWeightRate($perWeightRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerWeightRate', [$perWeightRate]);

        return parent::setPerWeightRate($perWeightRate);
    }

    /**
     * {@inheritDoc}
     */
    public function setMinimumAmount($minAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinimumAmount', [$minAmount]);

        return parent::setMinimumAmount($minAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function setMaximumAmount($maxAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaximumAmount', [$maxAmount]);

        return parent::setMaximumAmount($maxAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function setMinimumWeight($minWeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinimumWeight', [$minWeight]);

        return parent::setMinimumWeight($minWeight);
    }

    /**
     * {@inheritDoc}
     */
    public function setMaximumWeight($maxWeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaximumWeight', [$maxWeight]);

        return parent::setMaximumWeight($maxWeight);
    }

    /**
     * {@inheritDoc}
     */
    public function setCountries($countries)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountries', [$countries]);

        return parent::setCountries($countries);
    }

    /**
     * {@inheritDoc}
     */
    public function setCountriesSelected($countriesSelected)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountriesSelected', [$countriesSelected]);

        return parent::setCountriesSelected($countriesSelected);
    }

    /**
     * {@inheritDoc}
     */
    public function getBaseRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBaseRate', []);

        return parent::getBaseRate();
    }

    /**
     * {@inheritDoc}
     */
    public function getRateType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRateType', []);

        return parent::getRateType();
    }

    /**
     * {@inheritDoc}
     */
    public function getPerItemRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerItemRate', []);

        return parent::getPerItemRate();
    }

    /**
     * {@inheritDoc}
     */
    public function getPerWeightRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerWeightRate', []);

        return parent::getPerWeightRate();
    }

    /**
     * {@inheritDoc}
     */
    public function getMinimumAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinimumAmount', []);

        return parent::getMinimumAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getMaximumAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaximumAmount', []);

        return parent::getMaximumAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getMinimumWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinimumWeight', []);

        return parent::getMinimumWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function getMaximumWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaximumWeight', []);

        return parent::getMaximumWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function getCountries()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountries', []);

        return parent::getCountries();
    }

    /**
     * {@inheritDoc}
     */
    public function getCountriesSelected()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountriesSelected', []);

        return parent::getCountriesSelected();
    }

    /**
     * {@inheritDoc}
     */
    public function addMethodTypeMethod($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMethodTypeMethod', [$data]);

        return parent::addMethodTypeMethod($data);
    }

    /**
     * {@inheritDoc}
     */
    public function update($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'update', [$data]);

        return parent::update($data);
    }

    /**
     * {@inheritDoc}
     */
    public function dashboardForm($shippingMethod = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'dashboardForm', [$shippingMethod]);

        return parent::dashboardForm($shippingMethod);
    }

    /**
     * {@inheritDoc}
     */
    public function validate($args, $e)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validate', [$args, $e]);

        return parent::validate($args, $e);
    }

    /**
     * {@inheritDoc}
     */
    public function isEligible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEligible', []);

        return parent::isEligible();
    }

    /**
     * {@inheritDoc}
     */
    public function isWithinRange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isWithinRange', []);

        return parent::isWithinRange();
    }

    /**
     * {@inheritDoc}
     */
    public function isWithinWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isWithinWeight', []);

        return parent::isWithinWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function isWithinSelectedCountries()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isWithinSelectedCountries', []);

        return parent::isWithinSelectedCountries();
    }

    /**
     * {@inheritDoc}
     */
    public function getWeightBasedRate($shippableItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeightBasedRate', [$shippableItems]);

        return parent::getWeightBasedRate($shippableItems);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantityBasedRate($shippableItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantityBasedRate', [$shippableItems]);

        return parent::getQuantityBasedRate($shippableItems);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingMethodTypeName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingMethodTypeName', []);

        return parent::getShippingMethodTypeName();
    }

    /**
     * {@inheritDoc}
     */
    public function getOffers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOffers', []);

        return parent::getOffers();
    }

    /**
     * {@inheritDoc}
     */
    public function getOffer($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOffer', [$key]);

        return parent::getOffer($key);
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingMethodID($smID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingMethodID', [$smID]);

        return parent::setShippingMethodID($smID);
    }

    /**
     * {@inheritDoc}
     */
    public function enableDisableButton($bool = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'enableDisableButton', [$bool]);

        return parent::enableDisableButton($bool);
    }

    /**
     * {@inheritDoc}
     */
    public function disableEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'disableEnabled', []);

        return parent::disableEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingMethodTypeMethodID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingMethodTypeMethodID', []);

        return parent::getShippingMethodTypeMethodID();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingMethodID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingMethodID', []);

        return parent::getShippingMethodID();
    }

    /**
     * {@inheritDoc}
     */
    public function save()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'save', []);

        return parent::save();
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', []);

        return parent::delete();
    }

    /**
     * {@inheritDoc}
     */
    public function setViewObject(\Concrete\Core\View\View $view)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setViewObject', [$view]);

        return parent::setViewObject($view);
    }

    /**
     * {@inheritDoc}
     */
    public function setTheme($mixed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTheme', [$mixed]);

        return parent::setTheme($mixed);
    }

    /**
     * {@inheritDoc}
     */
    public function getTheme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTheme', []);

        return parent::getTheme();
    }

    /**
     * {@inheritDoc}
     */
    public function setThemeViewTemplate($template)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThemeViewTemplate', [$template]);

        return parent::setThemeViewTemplate($template);
    }

    /**
     * {@inheritDoc}
     */
    public function getThemeViewTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThemeViewTemplate', []);

        return parent::getThemeViewTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function getControllerActionPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getControllerActionPath', []);

        return parent::getControllerActionPath();
    }

    /**
     * {@inheritDoc}
     */
    public function flash($key, $value, $isHTML = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'flash', [$key, $value, $isHTML]);

        return parent::flash($key, $value, $isHTML);
    }

    /**
     * {@inheritDoc}
     */
    public function getViewObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getViewObject', []);

        return parent::getViewObject();
    }

    /**
     * {@inheritDoc}
     */
    public function action()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'action', []);

        return parent::action();
    }

    /**
     * {@inheritDoc}
     */
    public function getRequest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequest', []);

        return parent::getRequest();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequest($request)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequest', [$request]);

        return parent::setRequest($request);
    }

    /**
     * {@inheritDoc}
     */
    public function requireAsset()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'requireAsset', []);

        return parent::requireAsset();
    }

    /**
     * {@inheritDoc}
     */
    public function addHeaderItem($item)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addHeaderItem', [$item]);

        return parent::addHeaderItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function addFooterItem($item)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFooterItem', [$item]);

        return parent::addFooterItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function set($key, $val)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'set', [$key, $val]);

        return parent::set($key, $val);
    }

    /**
     * {@inheritDoc}
     */
    public function getSets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSets', []);

        return parent::getSets();
    }

    /**
     * {@inheritDoc}
     */
    public function shouldRunControllerTask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'shouldRunControllerTask', []);

        return parent::shouldRunControllerTask();
    }

    /**
     * {@inheritDoc}
     */
    public function getHelperObjects()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHelperObjects', []);

        return parent::getHelperObjects();
    }

    /**
     * {@inheritDoc}
     */
    public function get($key = NULL, $defaultValue = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'get', [$key, $defaultValue]);

        return parent::get($key, $defaultValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getTask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTask', []);

        return parent::getTask();
    }

    /**
     * {@inheritDoc}
     */
    public function getAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAction', []);

        return parent::getAction();
    }

    /**
     * {@inheritDoc}
     */
    public function getParameters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParameters', []);

        return parent::getParameters();
    }

    /**
     * {@inheritDoc}
     */
    public function on_start()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'on_start', []);

        return parent::on_start();
    }

    /**
     * {@inheritDoc}
     */
    public function on_before_render()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'on_before_render', []);

        return parent::on_before_render();
    }

    /**
     * {@inheritDoc}
     */
    public function isPost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPost', []);

        return parent::isPost();
    }

    /**
     * {@inheritDoc}
     */
    public function post($key = NULL, $defaultValue = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'post', [$key, $defaultValue]);

        return parent::post($key, $defaultValue);
    }

    /**
     * {@inheritDoc}
     */
    public function redirect()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'redirect', []);

        return parent::redirect();
    }

    /**
     * {@inheritDoc}
     */
    public function buildRedirect($destination, $httpResponseCode = 302)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'buildRedirect', [$destination, $httpResponseCode]);

        return parent::buildRedirect($destination, $httpResponseCode);
    }

    /**
     * {@inheritDoc}
     */
    public function runTask($action, $parameters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'runTask', [$action, $parameters]);

        return parent::runTask($action, $parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function runAction($action, $parameters = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'runAction', [$action, $parameters]);

        return parent::runAction($action, $parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function request($key = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'request', [$key]);

        return parent::request($key);
    }

    /**
     * {@inheritDoc}
     */
    public function setApplication(\Concrete\Core\Application\Application $app)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApplication', [$app]);

        return parent::setApplication($app);
    }

}