<?php

namespace XLite\Model\Proxy\__CG__\XLite\Module\XC\CustomerAttachments\Model\OrderItem\Attachment;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Attachment extends \XLite\Module\XC\CustomerAttachments\Model\OrderItem\Attachment\Attachment implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'orderItem', 'id', 'path', 'fileName', 'mime', 'storageType', 'size', 'date', 'loadError', 'loadErrorMessage', '_previous_state'];
        }

        return ['__isInitialized__', 'orderItem', 'id', 'path', 'fileName', 'mime', 'storageType', 'size', 'date', 'loadError', 'loadErrorMessage', '_previous_state'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Attachment $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', [$path]);

        return parent::setPath($path);
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
    public function setFileName($fileName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileName', [$fileName]);

        return parent::setFileName($fileName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileName', []);

        return parent::getFileName();
    }

    /**
     * {@inheritDoc}
     */
    public function setMime($mime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMime', [$mime]);

        return parent::setMime($mime);
    }

    /**
     * {@inheritDoc}
     */
    public function getMime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMime', []);

        return parent::getMime();
    }

    /**
     * {@inheritDoc}
     */
    public function setStorageType($storageType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStorageType', [$storageType]);

        return parent::setStorageType($storageType);
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', [$size]);

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', []);

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderItem(\XLite\Model\OrderItem $orderItem = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderItem', [$orderItem]);

        return parent::setOrderItem($orderItem);
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
    public function getGoogleFeedURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoogleFeedURL', []);

        return parent::getGoogleFeedURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBody', []);

        return parent::getBody();
    }

    /**
     * {@inheritDoc}
     */
    public function getStorageType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStorageType', []);

        return parent::getStorageType();
    }

    /**
     * {@inheritDoc}
     */
    public function readOutput($start = NULL, $length = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'readOutput', [$start, $length]);

        return parent::readOutput($start, $length);
    }

    /**
     * {@inheritDoc}
     */
    public function isFileExists($path = NULL, $forceFile = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFileExists', [$path, $forceFile]);

        return parent::isFileExists($path, $forceFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getURL', []);

        return parent::getURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getFrontURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrontURL', []);

        return parent::getFrontURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getGetterURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGetterURL', []);

        return parent::getGetterURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminGetterURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminGetterURL', []);

        return parent::getAdminGetterURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getExtension()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtension', []);

        return parent::getExtension();
    }

    /**
     * {@inheritDoc}
     */
    public function getExtensionByMIME()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtensionByMIME', []);

        return parent::getExtensionByMIME();
    }

    /**
     * {@inheritDoc}
     */
    public function isURL($path = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isURL', [$path]);

        return parent::isURL($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getMimeClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMimeClass', []);

        return parent::getMimeClass();
    }

    /**
     * {@inheritDoc}
     */
    public function getMimeName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMimeName', []);

        return parent::getMimeName();
    }

    /**
     * {@inheritDoc}
     */
    public function getLoadError()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoadError', []);

        return parent::getLoadError();
    }

    /**
     * {@inheritDoc}
     */
    public function getLoadErrorMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoadErrorMessage', []);

        return parent::getLoadErrorMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function loadFromRequest($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadFromRequest', [$key]);

        return parent::loadFromRequest($key);
    }

    /**
     * {@inheritDoc}
     */
    public function loadFromMultipleRequest($key, $position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadFromMultipleRequest', [$key, $position]);

        return parent::loadFromMultipleRequest($key, $position);
    }

    /**
     * {@inheritDoc}
     */
    public function loadFromLocalFile($path, $basename = NULL, $makeUnique = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadFromLocalFile', [$path, $basename, $makeUnique]);

        return parent::loadFromLocalFile($path, $basename, $makeUnique);
    }

    /**
     * {@inheritDoc}
     */
    public function loadFromURL($url, $copy2fs = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadFromURL', [$url, $copy2fs]);

        return parent::loadFromURL($url, $copy2fs);
    }

    /**
     * {@inheritDoc}
     */
    public function loadFromPath($path, $copy2fs = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadFromPath', [$path, $copy2fs]);

        return parent::loadFromPath($path, $copy2fs);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFile($path = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFile', [$path]);

        return parent::removeFile($path);
    }

    /**
     * {@inheritDoc}
     */
    public function isAllowRemoveFile($path = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAllowRemoveFile', [$path]);

        return parent::isAllowRemoveFile($path);
    }

    /**
     * {@inheritDoc}
     */
    public function renewStorage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'renewStorage', []);

        return parent::renewStorage();
    }

    /**
     * {@inheritDoc}
     */
    public function renewDependentStorage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'renewDependentStorage', []);

        return parent::renewDependentStorage();
    }

    /**
     * {@inheritDoc}
     */
    public function getDuplicates()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuplicates', []);

        return parent::getDuplicates();
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
    public function prepareRemove()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareRemove', []);

        return parent::prepareRemove();
    }

    /**
     * {@inheritDoc}
     */
    public function getStoragePath($path = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStoragePath', [$path]);

        return parent::getStoragePath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function isImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isImage', []);

        return parent::isImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminPermissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminPermissions', []);

        return parent::getAdminPermissions();
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
    public function detach()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'detach', []);

        return parent::detach();
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, array $args = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$method, $args]);

        return parent::__call($method, $args);
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
    public function cloneEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cloneEntity', []);

        return parent::cloneEntity();
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
