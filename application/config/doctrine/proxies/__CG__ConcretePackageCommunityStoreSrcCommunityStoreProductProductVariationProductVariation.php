<?php

namespace DoctrineProxies\__CG__\Concrete\Package\CommunityStore\Src\CommunityStore\Product\ProductVariation;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProductVariation extends \Concrete\Package\CommunityStore\Src\CommunityStore\Product\ProductVariation\ProductVariation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'pvID', 'product', 'pvPrice', 'pvWholesalePrice', 'pvSKU', 'pvBarcode', 'pvSalePrice', 'pvfID', 'pvQty', 'pvQtyUnlim', 'pvWidth', 'pvHeight', 'pvLength', 'pvWeight', 'pvNumberItems', 'pvPackageData', 'pvSort', 'options'];
        }

        return ['__isInitialized__', 'pvID', 'product', 'pvPrice', 'pvWholesalePrice', 'pvSKU', 'pvBarcode', 'pvSalePrice', 'pvfID', 'pvQty', 'pvQtyUnlim', 'pvWidth', 'pvHeight', 'pvLength', 'pvWeight', 'pvNumberItems', 'pvPackageData', 'pvSort', 'options'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProductVariation $proxy) {
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
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
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
    public function getVariationFID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationFID', []);

        return parent::getVariationFID();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationFID($pvfID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationFID', [$pvfID]);

        return parent::setVariationFID($pvfID);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationImageID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationImageID', []);

        return parent::getVariationImageID();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationImageObj()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationImageObj', []);

        return parent::getVariationImageObj();
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptions', []);

        return parent::getOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function getOptionItemIDs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptionItemIDs', []);

        return parent::getOptionItemIDs();
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
    public function getProductID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductID', []);

        return parent::getProductID();
    }

    /**
     * {@inheritDoc}
     */
    public function getProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', []);

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setProduct($product)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduct', [$product]);

        return parent::setProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationSKU()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationSKU', []);

        return parent::getVariationSKU();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationSKU($pvSKU)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationSKU', [$pvSKU]);

        return parent::setVariationSKU($pvSKU);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationBarcode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationBarcode', []);

        return parent::getVariationBarcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationBarcode($pvBarcode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationBarcode', [$pvBarcode]);

        return parent::setVariationBarcode($pvBarcode);
    }

    /**
     * {@inheritDoc}
     */
    public function setProductID($pID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductID', [$pID]);

        return parent::setProductID($pID);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationPrice', []);

        return parent::getVariationPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationWholesalePrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationWholesalePrice', []);

        return parent::getVariationWholesalePrice();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormattedVariationPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormattedVariationPrice', []);

        return parent::getFormattedVariationPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationPrice($pvPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationPrice', [$pvPrice]);

        return parent::setVariationPrice($pvPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationWholesalePrice($pvWholesalePrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationWholesalePrice', [$pvWholesalePrice]);

        return parent::setVariationWholesalePrice($pvWholesalePrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationSalePrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationSalePrice', []);

        return parent::getVariationSalePrice();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormattedVariationSalePrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormattedVariationSalePrice', []);

        return parent::getFormattedVariationSalePrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationSalePrice($pvSalePrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationSalePrice', [$pvSalePrice]);

        return parent::setVariationSalePrice($pvSalePrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getStockLevel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockLevel', []);

        return parent::getStockLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxCartQty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxCartQty', []);

        return parent::getMaxCartQty();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationQty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationQty', []);

        return parent::getVariationQty();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationStockLevel($pvQty)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationStockLevel', [$pvQty]);

        return parent::setVariationStockLevel($pvQty);
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationQty($pvQty)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationQty', [$pvQty]);

        return parent::setVariationQty($pvQty);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationQtyUnlim()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationQtyUnlim', []);

        return parent::getVariationQtyUnlim();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationQtyUnlim($pvQtyUnlim)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationQtyUnlim', [$pvQtyUnlim]);

        return parent::setVariationQtyUnlim($pvQtyUnlim);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationWidth', []);

        return parent::getVariationWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationWidth($pvWidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationWidth', [$pvWidth]);

        return parent::setVariationWidth($pvWidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationHeight', []);

        return parent::getVariationHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationHeight($pvHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationHeight', [$pvHeight]);

        return parent::setVariationHeight($pvHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationLength()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationLength', []);

        return parent::getVariationLength();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationLength($pvLength)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationLength', [$pvLength]);

        return parent::setVariationLength($pvLength);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationWeight', []);

        return parent::getVariationWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationWeight($pvWeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationWeight', [$pvWeight]);

        return parent::setVariationWeight($pvWeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationNumberItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationNumberItems', []);

        return parent::getVariationNumberItems();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationPackageData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationPackageData', []);

        return parent::getVariationPackageData();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationPackageData($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationPackageData', [$data]);

        return parent::setVariationPackageData($data);
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationNumberItems($pvNumberItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationNumberItems', [$pvNumberItems]);

        return parent::setVariationNumberItems($pvNumberItems);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationSort()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationSort', []);

        return parent::getVariationSort();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationSort($pvSort)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationSort', [$pvSort]);

        return parent::setVariationSort($pvSort);
    }

    /**
     * {@inheritDoc}
     */
    public function isUnlimited()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUnlimited', []);

        return parent::isUnlimited();
    }

    /**
     * {@inheritDoc}
     */
    public function isSellable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSellable', []);

        return parent::isSellable();
    }

    /**
     * {@inheritDoc}
     */
    public function save($persistonly = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'save', [$persistonly]);

        return parent::save($persistonly);
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
