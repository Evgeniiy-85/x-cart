# <?php if (!defined('LC_DS')) { die(); } ?>

CDev-FeaturedProducts:
    tables: [featured_products]
    columns: {  }
    dependencies: {  }
CDev-FedEx:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-FileAttachments:
    tables: [product_attachment_storages, product_attachments, product_attachment_translations]
    columns: {  }
    dependencies: {  }
CDev-MarketPrice:
    tables: {  }
    columns: { products: { marketPrice: 'marketPrice NUMERIC(14, 4) NOT NULL' } }
    dependencies: {  }
CDev-PINCodes:
    tables: [pin_codes]
    columns: { products: { pinCodesEnabled: 'pinCodesEnabled TINYINT(1) NOT NULL', autoPinCodes: 'autoPinCodes TINYINT(1) NOT NULL' } }
    dependencies: {  }
CDev-Paypal:
    tables: {  }
    columns: { profiles: { socialLoginProvider: 'socialLoginProvider VARCHAR(128) DEFAULT NULL', socialLoginId: 'socialLoginId VARCHAR(128) DEFAULT NULL' } }
    dependencies: {  }
CDev-ProductAdvisor:
    tables: [product_stats]
    columns: {  }
    dependencies: {  }
CDev-RuTranslation:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev-Sale:
    tables: {  }
    columns: { products: { participateSale: 'participateSale TINYINT(1) NOT NULL', discountType: 'discountType VARCHAR(32) NOT NULL', salePriceValue: 'salePriceValue NUMERIC(14, 4) NOT NULL' } }
    dependencies: {  }
CDev-SimpleCMS:
    tables: [page_images, menu_quick_flags, menus, menu_translations, pages, page_translations]
    columns: { clean_urls: { page_id: 'page_id INT UNSIGNED DEFAULT NULL' } }
    dependencies: {  }
CDev-UserPermissions:
    tables: {  }
    columns: { roles: { enabled: 'enabled TINYINT(1) NOT NULL' } }
    dependencies: {  }
CDev-VolumeDiscounts:
    tables: [volume_discounts]
    columns: {  }
    dependencies: {  }
CDev-XMLSitemap:
    tables: {  }
    columns: {  }
    dependencies: {  }
QSL-FlyoutCategoriesMenu:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-CrispWhiteSkin:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-CustomOrderStatuses:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-CustomProductTabs:
    tables: [custom_global_tabs, custom_global_tab_translation, product_tabs, product_tab_translations]
    columns: { global_product_tabs: { enabled: 'enabled TINYINT(1) NOT NULL', link: 'link VARCHAR(255) DEFAULT NULL' } }
    dependencies: {  }
XC-FroalaEditor:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-Geolocation:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-MailChimp:
    tables: [mailchimp_list_group, mailchimp_list_group_name, mailchimp_profile_interests, mailchimp_lists, mailchimp_subscriptions, mailchimp_list_segments, segment_membership, segment_products, mailchimp_segment_subscriptions, mailchimp_store]
    columns: { orders: { mailchimpStoreId: 'mailchimpStoreId VARCHAR(255) NOT NULL' }, products: { useAsSegmentCondition: 'useAsSegmentCondition TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC-News:
    tables: [news, news_message_translations]
    columns: { clean_urls: { news_message_id: 'news_message_id INT UNSIGNED DEFAULT NULL' } }
    dependencies: {  }
XC-NewsletterSubscriptions:
    tables: [newsletter_subscriptions_subscribers]
    columns: {  }
    dependencies: {  }
XC-NextPreviousProduct:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-NotFinishedOrders:
    tables: {  }
    columns: { orders: { not_finished_order_id: 'not_finished_order_id INT DEFAULT NULL' } }
    dependencies: {  }
XC-Onboarding:
    tables: {  }
    columns: { categories: { demo: 'demo TINYINT(1) NOT NULL' }, orders: { demo: 'demo TINYINT(1) NOT NULL' }, products: { demo: 'demo TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC-ProductComparison:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-ProductFilter:
    tables: [category_class_links]
    columns: { attributes: { visible: 'visible TINYINT(1) DEFAULT ''1'' NOT NULL' }, categories: { useClasses: 'useClasses CHAR(1) NOT NULL' } }
    dependencies: {  }
XC-ProductTags:
    tables: [product_tags, tags, tag_translations]
    columns: {  }
    dependencies: {  }
XC-Qiwi:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-RESTAPI:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-Reviews:
    tables: [order_review_keys, reviews]
    columns: {  }
    dependencies: {  }
XC-Robokassa:
    tables: {  }
    columns: { tax_classes: { robokassaVATRate: 'robokassaVATRate VARCHAR(32) NOT NULL' } }
    dependencies: {  }
XC-Sitemap:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-ThemeTweaker:
    tables: [overridden_view_lists, theme_tweaker_template]
    columns: {  }
    dependencies: {  }
XC-UPS:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-UpdateInventory:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-Upselling:
    tables: [upselling_products]
    columns: {  }
    dependencies: {  }
XC-VendorMessages:
    tables: [conversations, conversation_members, vendor_convo_messages, vendor_convo_message_reads]
    columns: {  }
    dependencies: {  }
XC-Webmoney:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC-YandexCheckout:
    tables: {  }
    columns: { products: { YMPaymentSubject: 'YMPaymentSubject VARCHAR(255) NOT NULL' }, tax_classes: { yandexMoneyVATRate: 'yandexMoneyVATRate INT NOT NULL' } }
    dependencies: {  }
EA-ProductRecommendations:
    tables: [product_recommendations]
    columns: {  }
    dependencies: {  }
