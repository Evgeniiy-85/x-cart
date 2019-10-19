# <?php if (!defined('LC_DS')) { die(); } ?>

CDev-Bestsellers:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-ContactUs:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-Coupons:
    tables: [order_coupons, coupons, product_class_coupons, membership_coupons, coupon_categories]
    columns: {  }
    dependencies: {  }
CDev-Egoods:
    tables: [product_attachment_history_points, order_item_private_attachments]
    columns: { product_attachments: { private: 'private TINYINT(1) NOT NULL' } }
    dependencies: {  }
CDev-GoSocial:
    tables: {  }
    columns: { product_translations: { ogMeta: 'ogMeta LONGTEXT DEFAULT NULL' }, categories: { ogMeta: 'ogMeta LONGTEXT DEFAULT NULL', useCustomOG: 'useCustomOG TINYINT(1) NOT NULL' }, products: { useCustomOG: 'useCustomOG TINYINT(1) NOT NULL' }, pages: { useCustomOG: 'useCustomOG TINYINT(1) NOT NULL', ogMeta: 'ogMeta LONGTEXT DEFAULT NULL', showSocialButtons: 'showSocialButtons TINYINT(1) NOT NULL' }, page_translations: { ogMeta: 'ogMeta LONGTEXT NOT NULL' }, category_translations: { ogMeta: 'ogMeta LONGTEXT NOT NULL' } }
    dependencies: { CDev-SimpleCMS: { pages: { useCustomOG: 'useCustomOG TINYINT(1) NOT NULL', ogMeta: 'ogMeta LONGTEXT DEFAULT NULL', showSocialButtons: 'showSocialButtons TINYINT(1) NOT NULL' }, page_translations: { ogMeta: 'ogMeta LONGTEXT NOT NULL' } } }
CDev-GoogleAnalytics:
    tables: {  }
    columns: { profiles: { gaClientId: 'gaClientId VARCHAR(255) NOT NULL' }, order_items: { categoryAdded: 'categoryAdded VARCHAR(255) DEFAULT NULL' } }
    dependencies: {  }
QSL-CloudSearch:
    tables: {  }
    columns: { categories: { csLastUpdate: 'csLastUpdate INT NOT NULL' }, products: { csLastUpdate: 'csLastUpdate INT NOT NULL' } }
    dependencies: {  }
XC-BulkEditing:
    tables: {  }
    columns: { products: { xcPendingBulkEdit: 'xcPendingBulkEdit TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC-Concierge:
    tables: {  }
    columns: { profiles: { conciergeUserId: 'conciergeUserId VARCHAR(128) DEFAULT NULL' } }
    dependencies: {  }
XC-CustomerAttachments:
    tables: [customer_attachments_storage]
    columns: { products: { isCustomerAttachmentsAvailable: 'isCustomerAttachmentsAvailable TINYINT(1) NOT NULL', isCustomerAttachmentsRequired: 'isCustomerAttachmentsRequired TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC-FacebookMarketing:
    tables: {  }
    columns: { products: { facebookMarketingEnabled: 'facebookMarketingEnabled TINYINT(1) DEFAULT ''1'' NOT NULL' } }
    dependencies: {  }
XC-FastLaneCheckout:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-FreeShipping:
    tables: {  }
    columns: { products: { freeShip: 'freeShip TINYINT(1) NOT NULL', shipForFree: 'shipForFree TINYINT(1) NOT NULL', freightFixedFee: 'freightFixedFee NUMERIC(14, 4) NOT NULL' }, shipping_methods: { free: 'free TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC-GoogleFeed:
    tables: {  }
    columns: { attributes: { googleShoppingGroup: 'googleShoppingGroup VARCHAR(255) DEFAULT NULL' }, products: { googleFeedEnabled: 'googleFeedEnabled TINYINT(1) DEFAULT ''1'' NOT NULL' } }
    dependencies: {  }
