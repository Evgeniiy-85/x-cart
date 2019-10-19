<?php

namespace XLite\Model\Proxy\__CG__\XLite\Model\Shipping;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Method extends \XLite\Model\Shipping\Method implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'method_id', 'processor', 'carrier', 'code', 'enabled', 'position', 'shipping_markups', 'taxClass', 'added', 'moduleName', 'fromMarketplace', 'iconURL', 'tableType', 'handlingFee', 'handlingFeeType', 'editLanguage', 'translations', '_previous_state'];
        }

        return ['__isInitialized__', 'method_id', 'processor', 'carrier', 'code', 'enabled', 'position', 'shipping_markups', 'taxClass', 'added', 'moduleName', 'fromMarketplace', 'iconURL', 'tableType', 'handlingFee', 'handlingFeeType', 'editLanguage', 'translations', '_previous_state'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Method $proxy) {
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
    public function getProcessorObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcessorObject', []);

        return parent::getProcessorObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getProcessorModule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcessorModule', []);

        return parent::getProcessorModule();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminIconURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminIconURL', []);

        return parent::getAdminIconURL();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRates()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRates', []);

        return parent::hasRates();
    }

    /**
     * {@inheritDoc}
     */
    public function getRatesCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRatesCount', []);

        return parent::getRatesCount();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function isAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAdded', []);

        return parent::isAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdded($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdded', [$value]);

        return parent::setAdded($value);
    }

    /**
     * {@inheritDoc}
     */
    public function isFromMarketplace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFromMarketplace', []);

        return parent::isFromMarketplace();
    }

    /**
     * {@inheritDoc}
     */
    public function getModuleName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModuleName', []);

        return parent::getModuleName();
    }

    /**
     * {@inheritDoc}
     */
    public function getParentMethod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentMethod', []);

        return parent::getParentMethod();
    }

    /**
     * {@inheritDoc}
     */
    public function getChildrenMethods()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildrenMethods', []);

        return parent::getChildrenMethods();
    }

    /**
     * {@inheritDoc}
     */
    public function getHandlingFee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHandlingFee', []);

        return parent::getHandlingFee();
    }

    /**
     * {@inheritDoc}
     */
    public function getHandlingFeeValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHandlingFeeValue', []);

        return parent::getHandlingFeeValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setHandlingFeeValue($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHandlingFeeValue', [$value]);

        return parent::setHandlingFeeValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMethodId', []);

        return parent::getMethodId();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcessor($processor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcessor', [$processor]);

        return parent::setProcessor($processor);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcessor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcessor', []);

        return parent::getProcessor();
    }

    /**
     * {@inheritDoc}
     */
    public function setCarrier($carrier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarrier', [$carrier]);

        return parent::setCarrier($carrier);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarrier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarrier', []);

        return parent::getCarrier();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
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
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
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
    public function getAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdded', []);

        return parent::getAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setModuleName($moduleName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModuleName', [$moduleName]);

        return parent::setModuleName($moduleName);
    }

    /**
     * {@inheritDoc}
     */
    public function setFromMarketplace($fromMarketplace)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFromMarketplace', [$fromMarketplace]);

        return parent::setFromMarketplace($fromMarketplace);
    }

    /**
     * {@inheritDoc}
     */
    public function getFromMarketplace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFromMarketplace', []);

        return parent::getFromMarketplace();
    }

    /**
     * {@inheritDoc}
     */
    public function setIconURL($iconURL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIconURL', [$iconURL]);

        return parent::setIconURL($iconURL);
    }

    /**
     * {@inheritDoc}
     */
    public function getIconURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIconURL', []);

        return parent::getIconURL();
    }

    /**
     * {@inheritDoc}
     */
    public function setTableType($tableType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTableType', [$tableType]);

        return parent::setTableType($tableType);
    }

    /**
     * {@inheritDoc}
     */
    public function getTableType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTableType', []);

        return parent::getTableType();
    }

    /**
     * {@inheritDoc}
     */
    public function setHandlingFee($handlingFee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHandlingFee', [$handlingFee]);

        return parent::setHandlingFee($handlingFee);
    }

    /**
     * {@inheritDoc}
     */
    public function getHandlingFeeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHandlingFeeType', []);

        return parent::getHandlingFeeType();
    }

    /**
     * {@inheritDoc}
     */
    public function setHandlingFeeType($handlingFeeType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHandlingFeeType', [$handlingFeeType]);

        return parent::setHandlingFeeType($handlingFeeType);
    }

    /**
     * {@inheritDoc}
     */
    public function addShippingMarkups(\XLite\Model\Shipping\Markup $shippingMarkups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addShippingMarkups', [$shippingMarkups]);

        return parent::addShippingMarkups($shippingMarkups);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingMarkups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingMarkups', []);

        return parent::getShippingMarkups();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxClass(\XLite\Model\TaxClass $taxClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxClass', [$taxClass]);

        return parent::setTaxClass($taxClass);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxClass', []);

        return parent::getTaxClass();
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
    public function getFieldMetadata($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldMetadata', [$property]);

        return parent::getFieldMetadata($property);
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

}
