<?php

namespace XLite\Model\Proxy\__CG__\XLite\Model\Payment;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Method extends \XLite\Model\Payment\Method implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'method_id', 'service_name', 'class', 'moduleName', 'orderby', 'adminOrderby', 'enabled', 'added', 'type', 'settings', 'fromMarketplace', 'iconURL', 'countries', 'exCountries', 'countryPositions', 'editLanguage', 'translations', '_previous_state'];
        }

        return ['__isInitialized__', 'method_id', 'service_name', 'class', 'moduleName', 'orderby', 'adminOrderby', 'enabled', 'added', 'type', 'settings', 'fromMarketplace', 'iconURL', 'countries', 'exCountries', 'countryPositions', 'editLanguage', 'translations', '_previous_state'];
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
    public function getClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClass', []);

        return parent::getClass();
    }

    /**
     * {@inheritDoc}
     */
    public function getSetting($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSetting', [$name]);

        return parent::getSetting($name);
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
    public function setAdded($added)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdded', [$added]);

        return parent::setAdded($added);
    }

    /**
     * {@inheritDoc}
     */
    public function getWarningNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWarningNote', []);

        return parent::getWarningNote();
    }

    /**
     * {@inheritDoc}
     */
    public function getNotSwitchableReason()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotSwitchableReason', []);

        return parent::getNotSwitchableReason();
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
    public function setClass($class)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClass', [$class]);

        return parent::setClass($class);
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
    public function getSettingEntity($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSettingEntity', [$name]);

        return parent::getSettingEntity($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setSetting($name, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSetting', [$name, $value]);

        return parent::setSetting($name, $value);
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
    public function getAdminIconURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminIconURL', []);

        return parent::getAdminIconURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getAltAdminIconURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAltAdminIconURL', []);

        return parent::getAltAdminIconURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdaptedServiceName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdaptedServiceName', []);

        return parent::getAdaptedServiceName();
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
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getModuleId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModuleId', []);

        return parent::getModuleId();
    }

    /**
     * {@inheritDoc}
     */
    public function isModuleInstalled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isModuleInstalled', []);

        return parent::isModuleInstalled();
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
    public function setServiceName($serviceName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServiceName', [$serviceName]);

        return parent::setServiceName($serviceName);
    }

    /**
     * {@inheritDoc}
     */
    public function getServiceName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServiceName', []);

        return parent::getServiceName();
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
    public function getModuleName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModuleName', []);

        return parent::getModuleName();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderby($orderby)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderby', [$orderby]);

        return parent::setOrderby($orderby);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderby()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderby', []);

        return parent::getOrderby();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdminOrderby($adminOrderby)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminOrderby', [$adminOrderby]);

        return parent::setAdminOrderby($adminOrderby);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminOrderby()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminOrderby', []);

        return parent::getAdminOrderby();
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
    public function isModuleEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isModuleEnabled', []);

        return parent::isModuleEnabled();
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
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
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
    public function setCountries($countries)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountries', [$countries]);

        return parent::setCountries($countries);
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
    public function setExCountries($exCountries)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExCountries', [$exCountries]);

        return parent::setExCountries($exCountries);
    }

    /**
     * {@inheritDoc}
     */
    public function getExCountries()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExCountries', []);

        return parent::getExCountries();
    }

    /**
     * {@inheritDoc}
     */
    public function addSettings(\XLite\Model\Payment\MethodSetting $settings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSettings', [$settings]);

        return parent::addSettings($settings);
    }

    /**
     * {@inheritDoc}
     */
    public function getSettings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSettings', []);

        return parent::getSettings();
    }

    /**
     * {@inheritDoc}
     */
    public function getCountryPositions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountryPositions', []);

        return parent::getCountryPositions();
    }

    /**
     * {@inheritDoc}
     */
    public function getCountryPosition($countryCode): ?\XLite\Model\Payment\MethodCountryPosition
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountryPosition', [$countryCode]);

        return parent::getCountryPosition($countryCode);
    }

    /**
     * {@inheritDoc}
     */
    public function addCountryPositions($countryPosition): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCountryPositions', [$countryPosition]);

        parent::addCountryPositions($countryPosition);
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
