<?php

namespace DoctrineProxies\__CG__\Concrete\Package\CommunityStore\Src\CommunityStore\Order;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OrderItemOption extends \Concrete\Package\CommunityStore\Src\CommunityStore\Order\OrderItemOption implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'oioID', 'orderItem', 'oioKey', 'oioHandle', 'oioValue', 'oioPriceAdjust', 'oioWeightAdjust'];
        }

        return ['__isInitialized__', 'oioID', 'orderItem', 'oioKey', 'oioHandle', 'oioValue', 'oioPriceAdjust', 'oioWeightAdjust'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OrderItemOption $proxy) {
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
    public function getID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getID', []);

        return parent::getID();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItem', []);

        return parent::getOrderItem();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderItem(\Concrete\Package\CommunityStore\Src\CommunityStore\Order\OrderItem $orderItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderItem', [$orderItem]);

        return parent::setOrderItem($orderItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItemOptionKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItemOptionKey', []);

        return parent::getOrderItemOptionKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderItemOptionKey($oioKey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderItemOptionKey', [$oioKey]);

        return parent::setOrderItemOptionKey($oioKey);
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderItemOptionHandle($oioHandle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderItemOptionHandle', [$oioHandle]);

        return parent::setOrderItemOptionHandle($oioHandle);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItemOptionValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItemOptionValue', []);

        return parent::getOrderItemOptionValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderItemOptionValue($oioValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderItemOptionValue', [$oioValue]);

        return parent::setOrderItemOptionValue($oioValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItemOptionHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItemOptionHandle', []);

        return parent::getOrderItemOptionHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItemOptionPriceAdjust()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItemOptionPriceAdjust', []);

        return parent::getOrderItemOptionPriceAdjust();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderItemOptionPriceAdjust($priceAdjust)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderItemOptionPriceAdjust', [$priceAdjust]);

        return parent::setOrderItemOptionPriceAdjust($priceAdjust);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItemOptionWeightAdjust()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItemOptionWeightAdjust', []);

        return parent::getOrderItemOptionWeightAdjust();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderItemOptionWeightAdjust($weightAdjust)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderItemOptionWeightAdjust', [$weightAdjust]);

        return parent::setOrderItemOptionWeightAdjust($weightAdjust);
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

}
