# Magento 2 Share Cart GraphQL/PWA

Magento 2 Share Cart GraphQL is a part of Share Cart extension that add GraphQL features, this support for PWA Studio.
## 1. How to install

Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-share-cart-graphql
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

**Note:**
Magento 2 Share Cart GraphQL requires installing [Mageplaza Share Cart](https://www.mageplaza.com/magento-2-share-cart/) in your Magento installation.

## 2. How to use

To perform GraphQL queries in Magento, please do the following requirements:

- Use Magento 2.3.x or higher. Set your site to [developer mode](https://www.mageplaza.com/devdocs/enable-disable-developer-mode-magento-2.html).
- Set GraphQL endpoint as `http://<magento2-server>/graphql` in url box, click **Set endpoint**. 
(e.g. `http://dev.site.com/graphql`)
- To view the queries that the **Mageplaza Share Cart GraphQL** extension supports, you can look in `Docs > Query` in the right corner

## 3. Devdocs

- [Share Cart API & examples](https://documenter.getpostman.com/view/10589000/SzRxXrGA)
- [Share Cart GraphQL & examples](https://documenter.getpostman.com/view/10589000/SzRxXrGB?version=latest)


## 4. Contribute to this module

Feel free to **Fork** and contribute to this module and create a pull request so we will merge your changes main branch.

## 5. Get Support

- Feel free to [contact us](https://www.mageplaza.com/contact.html) if you have any further questions.
- Like this project, Give us a **Star** ![star](https://i.imgur.com/S8e0ctO.png)
