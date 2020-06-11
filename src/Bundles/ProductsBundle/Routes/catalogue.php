<?php


$app->get('/admin/catalogue/families/show/{id}','Bundles\ProductsBundle\Controllers\Catalogue\FamilyController:showCategories')->setName('showFamilies');
$app->get('/admin/catalogue/family/form/{id}','Bundles\ProductsBundle\Controllers\Catalogue\FamilyController:form')->setName('showFormFamily');
$app->get('/admin/catalogue/family/delete/{id}','Bundles\ProductsBundle\Controllers\Catalogue\FamilyController:delete')->setName('deleteFamily');
$app->post('/admin/catalogue/family/save','Bundles\ProductsBundle\Controllers\Catalogue\FamilyController:save')->setName('saveFamily');


$app->get('/catalogue','Bundles\ProductsBundle\Controllers\Catalogue\CatalogueController:showCatalogue')->setName('showCatalogue');
$app->get('/catalogue/product/show/{product_id:[0-9]+}','Bundles\ProductsBundle\Controllers\Catalogue\CatalogueController:showProduct')->setName("showProduct");

$app->get('/catalogue/product/edit/{product_id}','Bundles\ProductsBundle\Controllers\Catalogue\CatalogueController:formProduct')->setName('showFormProduct');
$app->post('/catalogue/product/save','Bundles\ProductsBundle\Controllers\Catalogue\CatalogueController:saveProduct');
$app->get('/catalogue/product/delete/{product_id}','Bundles\ProductsBundle\Controllers\Catalogue\CatalogueController:deleteProduct')->setName('deleteProduct');
$app->get('/catalogue/product/new','Bundles\ProductsBundle\Controllers\Catalogue\CatalogueController:formProduct')->setName('newProduct');

$app->get('/admin/catalogue/brands/show/{id}','Bundles\ProductsBundle\Controllers\Catalogue\BrandController:show')->setName('showBrands');
$app->get('/admin/catalogue/brand/form/{id}','Bundles\ProductsBundle\Controllers\Catalogue\BrandController:form')->setName('showFormBrand');
$app->post('/admin/catalogue/brand/save','Bundles\ProductsBundle\Controllers\Catalogue\BrandController:save')->setName('saveBrand');
$app->get('/admin/catalogue/brand/delete/{id}','Bundles\ProductsBundle\Controllers\Catalogue\BrandController:delete');

$app->get('/admin/catalogue/units/show/{id}','Bundles\ProductsBundle\Controllers\Catalogue\UnitController:show')->setName('showUnits');
$app->get('/admin/catalogue/unit/form/{id}','Bundles\ProductsBundle\Controllers\Catalogue\UnitController:form')->setName('showFormUnit');
$app->post('/admin/catalogue/unit/save','Bundles\ProductsBundle\Controllers\Catalogue\UnitController:save')->setName('saveUnit');
$app->get('/admin/catalogue/unit/delete/{id}','Bundles\ProductsBundle\Controllers\Catalogue\UnitController:delete')->setName('deleteUnit');

$app->get('/admin/catalogue/properties/show/{id}','Bundles\ProductsBundle\Controllers\Catalogue\PropertyController:show')->setName('showProperties');
$app->get('/admin/catalogue/property/form/{id}','Bundles\ProductsBundle\Controllers\Catalogue\PropertyController:form')->setName('showFormProperty');
$app->post('/admin/catalogue/property/save','Bundles\ProductsBundle\Controllers\Catalogue\PropertyController:save')->setName('saveProperty');
$app->get('/admin/catalogue/property/delete/{id}','Bundles\ProductsBundle\Controllers\Catalogue\PropertyController:delete')->setName('deleteProperty');



