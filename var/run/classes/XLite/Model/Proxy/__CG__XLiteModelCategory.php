<?php

namespace XLite\Model\Proxy\__CG__\XLite\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Category extends \XLite\Model\Category implements \Doctrine\ORM\Proxy\Proxy
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
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

        return parent::__set($name, $value);
    }

    /**
     * {@inheritDoc}
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

        return parent::__isset($name);

    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'coupons', 'featuredProducts', 'ogMeta', 'useCustomOG', 'csLastUpdate', 'demo', 'productClasses', 'useClasses', 'category_id', 'lpos', 'rpos', 'enabled', 'show_title', 'depth', 'pos', 'root_category_look', 'quickFlags', 'memberships', 'image', 'banner', 'categoryProducts', 'children', 'parent', 'flagVisible', 'cleanURLs', 'metaDescType', 'xcPendingExport', 'editLanguage', 'translations', '_previous_state'];
        }

        return ['__isInitialized__', 'coupons', 'featuredProducts', 'ogMeta', 'useCustomOG', 'csLastUpdate', 'demo', 'productClasses', 'useClasses', 'category_id', 'lpos', 'rpos', 'enabled', 'show_title', 'depth', 'pos', 'root_category_look', 'quickFlags', 'memberships', 'image', 'banner', 'categoryProducts', 'children', 'parent', 'flagVisible', 'cleanURLs', 'metaDescType', 'xcPendingExport', 'editLanguage', 'translations', '_previous_state'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Category $proxy) {
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
    public function addCoupons(\XLite\Module\CDev\Coupons\Model\Coupon $coupons)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCoupons', [$coupons]);

        return parent::addCoupons($coupons);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoupons()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoupons', []);

        return parent::getCoupons();
    }

    /**
     * {@inheritDoc}
     */
    public function getFeaturedProductsCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeaturedProductsCount', []);

        return parent::getFeaturedProductsCount();
    }

    /**
     * {@inheritDoc}
     */
    public function addFeaturedProducts(\XLite\Module\CDev\FeaturedProducts\Model\FeaturedProduct $featuredProducts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFeaturedProducts', [$featuredProducts]);

        return parent::addFeaturedProducts($featuredProducts);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeaturedProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeaturedProducts', []);

        return parent::getFeaturedProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function getOpenGraphMetaTags($preprocessed = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpenGraphMetaTags', [$preprocessed]);

        return parent::getOpenGraphMetaTags($preprocessed);
    }

    /**
     * {@inheritDoc}
     */
    public function setUseCustomOG($useCustomOG)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUseCustomOG', [$useCustomOG]);

        return parent::setUseCustomOG($useCustomOG);
    }

    /**
     * {@inheritDoc}
     */
    public function getUseCustomOG()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUseCustomOG', []);

        return parent::getUseCustomOG();
    }

    /**
     * {@inheritDoc}
     */
    public function getCloudSearchEntityType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloudSearchEntityType', []);

        return parent::getCloudSearchEntityType();
    }

    /**
     * {@inheritDoc}
     */
    public function getCloudSearchEntityIds()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloudSearchEntityIds', []);

        return parent::getCloudSearchEntityIds();
    }

    /**
     * {@inheritDoc}
     */
    public function getCloudSearchEventAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloudSearchEventAction', []);

        return parent::getCloudSearchEventAction();
    }

    /**
     * {@inheritDoc}
     */
    public function getCsLastUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCsLastUpdate', []);

        return parent::getCsLastUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCsLastUpdate($csLastUpdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCsLastUpdate', [$csLastUpdate]);

        return parent::setCsLastUpdate($csLastUpdate);
    }

    /**
     * {@inheritDoc}
     */
    public function isDemo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDemo', []);

        return parent::isDemo();
    }

    /**
     * {@inheritDoc}
     */
    public function setDemo($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDemo', [$value]);

        return parent::setDemo($value);
    }

    /**
     * {@inheritDoc}
     */
    public function dropDemoFlagOnUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'dropDemoFlagOnUpdate', []);

        return parent::dropDemoFlagOnUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', []);

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$value]);

        return parent::setStatus($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeOptionsByAttribute(\XLite\Model\Attribute $attribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeOptionsByAttribute', [$attribute]);

        return parent::getAttributeOptionsByAttribute($attribute);
    }

    /**
     * {@inheritDoc}
     */
    public function setUseClasses($useClasses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUseClasses', [$useClasses]);

        return parent::setUseClasses($useClasses);
    }

    /**
     * {@inheritDoc}
     */
    public function getUseClasses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUseClasses', []);

        return parent::getUseClasses();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductClasses(\XLite\Model\ProductClass $productClasses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductClasses', [$productClasses]);

        return parent::addProductClasses($productClasses);
    }

    /**
     * {@inheritDoc}
     */
    public function clearProductClasses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearProductClasses', []);

        return parent::clearProductClasses();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductClasses(array $productClasses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductClasses', [$productClasses]);

        return parent::setProductClasses($productClasses);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductClasses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductClasses', []);

        return parent::getProductClasses();
    }

    /**
     * {@inheritDoc}
     */
    public function defineEditableProperties()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'defineEditableProperties', []);

        return parent::defineEditableProperties();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldMetadata($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldMetadata', [$property]);

        return parent::getFieldMetadata($property);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\XLite\Model\Category $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\XLite\Model\Image\Category\Image $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function hasImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasImage', []);

        return parent::hasImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setBanner(\XLite\Model\Image\Category\Banner $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBanner', [$image]);

        return parent::setBanner($image);
    }

    /**
     * {@inheritDoc}
     */
    public function hasBanner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasBanner', []);

        return parent::hasBanner();
    }

    /**
     * {@inheritDoc}
     */
    public function isVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVisible', []);

        return parent::isVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function isRootCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRootCategory', []);

        return parent::isRootCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function getSubcategoriesCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubcategoriesCount', []);

        return parent::getSubcategoriesCount();
    }

    /**
     * {@inheritDoc}
     */
    public function hasSubcategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasSubcategories', []);

        return parent::hasSubcategories();
    }

    /**
     * {@inheritDoc}
     */
    public function getSubcategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubcategories', []);

        return parent::getSubcategories();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiblings($hasSelf = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiblings', [$hasSelf]);

        return parent::getSiblings($hasSelf);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiblingsFramed($maxResults, $hasSelf = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiblingsFramed', [$maxResults, $hasSelf]);

        return parent::getSiblingsFramed($maxResults, $hasSelf);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function getStringPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStringPath', []);

        return parent::getStringPath();
    }

    /**
     * {@inheritDoc}
     */
    public function getParentId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentId', []);

        return parent::getParentId();
    }

    /**
     * {@inheritDoc}
     */
    public function setParentId($parentID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParentId', [$parentID]);

        return parent::setParentId($parentID);
    }

    /**
     * {@inheritDoc}
     */
    public function getMembershipIds()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMembershipIds', []);

        return parent::getMembershipIds();
    }

    /**
     * {@inheritDoc}
     */
    public function hasAvailableMembership()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAvailableMembership', []);

        return parent::hasAvailableMembership();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductsCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductsCount', []);

        return parent::getProductsCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getProducts(\XLite\Core\CommonCell $cnd = NULL, $countOnly = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducts', [$cnd, $countOnly]);

        return parent::getProducts($cnd, $countOnly);
    }

    /**
     * {@inheritDoc}
     */
    public function hasProduct($product)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasProduct', [$product]);

        return parent::hasProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function getViewDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getViewDescription', []);

        return parent::getViewDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDesc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDesc', []);

        return parent::getMetaDesc();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDescType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDescType', []);

        return parent::getMetaDescType();
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryId', []);

        return parent::getCategoryId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLpos($lpos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLpos', [$lpos]);

        return parent::setLpos($lpos);
    }

    /**
     * {@inheritDoc}
     */
    public function getLpos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLpos', []);

        return parent::getLpos();
    }

    /**
     * {@inheritDoc}
     */
    public function setRpos($rpos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRpos', [$rpos]);

        return parent::setRpos($rpos);
    }

    /**
     * {@inheritDoc}
     */
    public function getRpos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRpos', []);

        return parent::getRpos();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setShowTitle($showTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShowTitle', [$showTitle]);

        return parent::setShowTitle($showTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getShowTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShowTitle', []);

        return parent::getShowTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepth($depth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepth', [$depth]);

        return parent::setDepth($depth);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepth', []);

        return parent::getDepth();
    }

    /**
     * {@inheritDoc}
     */
    public function setPos($pos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPos', [$pos]);

        return parent::setPos($pos);
    }

    /**
     * {@inheritDoc}
     */
    public function getPos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPos', []);

        return parent::getPos();
    }

    /**
     * {@inheritDoc}
     */
    public function setRootCategoryLook($rootCategoryLook)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRootCategoryLook', [$rootCategoryLook]);

        return parent::setRootCategoryLook($rootCategoryLook);
    }

    /**
     * {@inheritDoc}
     */
    public function getRootCategoryLook()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRootCategoryLook', []);

        return parent::getRootCategoryLook();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaDescType($metaDescType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaDescType', [$metaDescType]);

        return parent::setMetaDescType($metaDescType);
    }

    /**
     * {@inheritDoc}
     */
    public function setXcPendingExport($xcPendingExport)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setXcPendingExport', [$xcPendingExport]);

        return parent::setXcPendingExport($xcPendingExport);
    }

    /**
     * {@inheritDoc}
     */
    public function getXcPendingExport()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getXcPendingExport', []);

        return parent::getXcPendingExport();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuickFlags(\XLite\Model\Category\QuickFlags $quickFlags = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuickFlags', [$quickFlags]);

        return parent::setQuickFlags($quickFlags);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuickFlags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuickFlags', []);

        return parent::getQuickFlags();
    }

    /**
     * {@inheritDoc}
     */
    public function addMemberships(\XLite\Model\Membership $memberships)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMemberships', [$memberships]);

        return parent::addMemberships($memberships);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemberships()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemberships', []);

        return parent::getMemberships();
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getBanner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBanner', []);

        return parent::getBanner();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategoryProducts(\XLite\Model\CategoryProducts $categoryProducts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategoryProducts', [$categoryProducts]);

        return parent::addCategoryProducts($categoryProducts);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryProducts', []);

        return parent::getCategoryProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function addChildren(\XLite\Model\Category $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChildren', [$children]);

        return parent::addChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function addCleanURLs(\XLite\Model\CleanURL $cleanURLs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCleanURLs', [$cleanURLs]);

        return parent::addCleanURLs($cleanURLs);
    }

    /**
     * {@inheritDoc}
     */
    public function getCleanURLs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCleanURLs', []);

        return parent::getCleanURLs();
    }

    /**
     * {@inheritDoc}
     */
    public function getFrontURL($buildCuInAdminZone = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrontURL', [$buildCuInAdminZone]);

        return parent::getFrontURL($buildCuInAdminZone);
    }

    /**
     * {@inheritDoc}
     */
    public function generateCleanURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'generateCleanURL', []);

        return parent::generateCleanURL();
    }

    /**
     * {@inheritDoc}
     */
    public function setCleanURLs($cleanURLs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCleanURLs', [$cleanURLs]);

        return parent::setCleanURLs($cleanURLs);
    }

    /**
     * {@inheritDoc}
     */
    public function setCleanURL($cleanURL, $force = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCleanURL', [$cleanURL, $force]);

        return parent::setCleanURL($cleanURL, $force);
    }

    /**
     * {@inheritDoc}
     */
    public function getCleanURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCleanURL', []);

        return parent::getCleanURL();
    }

    /**
     * {@inheritDoc}
     */
    public function prepareBeforeSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareBeforeSave', []);

        return parent::prepareBeforeSave();
    }

    /**
     * {@inheritDoc}
     */
    public function setEditLanguage($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEditLanguage', [$code]);

        return parent::setEditLanguage($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslations(\XLite\Model\Base\Translation $translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslations', [$translation]);

        return parent::addTranslations($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslation($code = NULL, $allowEmptyResult = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslation', [$code, $allowEmptyResult]);

        return parent::getTranslation($code, $allowEmptyResult);
    }

    /**
     * {@inheritDoc}
     */
    public function getHardTranslation($code = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHardTranslation', [$code]);

        return parent::getHardTranslation($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoftTranslation($code = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoftTranslation', [$code]);

        return parent::getSoftTranslation($code);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTranslation($code = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTranslation', [$code]);

        return parent::hasTranslation($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslationCodes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslationCodes', []);

        return parent::getTranslationCodes();
    }

    /**
     * {@inheritDoc}
     */
    public function detach()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'detach', []);

        return parent::detach();
    }

    /**
     * {@inheritDoc}
     */
    public function cloneEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cloneEntity', []);

        return parent::cloneEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, array $arguments = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$method, $arguments]);

        return parent::__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function hasMagicMethod($method)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasMagicMethod', [$method]);

        return parent::hasMagicMethod($method);
    }

    /**
     * {@inheritDoc}
     */
    public function explicitlyLoadTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'explicitlyLoadTranslations', []);

        return parent::explicitlyLoadTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function buildDataForREST($withAssociations = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'buildDataForREST', [$withAssociations]);

        return parent::buildDataForREST($withAssociations);
    }

    /**
     * {@inheritDoc}
     */
    public function getModelAssociationsForREST()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModelAssociationsForREST', []);

        return parent::getModelAssociationsForREST();
    }

    /**
     * {@inheritDoc}
     */
    public function _getPreviousState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_getPreviousState', []);

        return parent::_getPreviousState();
    }

    /**
     * {@inheritDoc}
     */
    public function map(array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'map', [$data]);

        return parent::map($data);
    }

    /**
     * {@inheritDoc}
     */
    public function __unset($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__unset', [$name]);

        return parent::__unset($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRepository', []);

        return parent::getRepository();
    }

    /**
     * {@inheritDoc}
     */
    public function checkCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkCache', []);

        return parent::checkCache();
    }

    /**
     * {@inheritDoc}
     */
    public function isPropertyExists($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPropertyExists', [$name]);

        return parent::isPropertyExists($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setterProperty($property, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setterProperty', [$property, $value]);

        return parent::setterProperty($property, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getterProperty($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getterProperty', [$property]);

        return parent::getterProperty($property);
    }

    /**
     * {@inheritDoc}
     */
    public function isPersistent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPersistent', []);

        return parent::isPersistent();
    }

    /**
     * {@inheritDoc}
     */
    public function isDetached()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDetached', []);

        return parent::isDetached();
    }

    /**
     * {@inheritDoc}
     */
    public function isManaged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isManaged', []);

        return parent::isManaged();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifierName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifierName', []);

        return parent::getUniqueIdentifierName();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifier', []);

        return parent::getUniqueIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityName', []);

        return parent::getEntityName();
    }

    /**
     * {@inheritDoc}
     */
    public function update()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'update', []);

        return parent::update();
    }

    /**
     * {@inheritDoc}
     */
    public function create()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'create', []);

        return parent::create();
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
    public function processFiles($field, array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'processFiles', [$field, $data]);

        return parent::processFiles($field, $data);
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldsDefinition($class = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldsDefinition', [$class]);

        return parent::getFieldsDefinition($class);
    }

    /**
     * {@inheritDoc}
     */
    public function prepareEntityBeforeCommit($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareEntityBeforeCommit', [$type]);

        return parent::prepareEntityBeforeCommit($type);
    }

    /**
     * {@inheritDoc}
     */
    public function isSerializable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSerializable', []);

        return parent::isSerializable();
    }

    /**
     * {@inheritDoc}
     */
    public function isEditableProperty($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEditableProperty', [$property]);

        return parent::isEditableProperty($property);
    }

    /**
     * {@inheritDoc}
     */
    public function getInlineEditableMetadata()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInlineEditableMetadata', []);

        return parent::getInlineEditableMetadata();
    }

    /**
     * {@inheritDoc}
     */
    public function getInlineEditorConfig()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInlineEditorConfig', []);

        return parent::getInlineEditorConfig();
    }

}
