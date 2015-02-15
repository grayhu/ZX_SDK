<?php
echo "<BR><BR><BR>【获取商家信息】==============================";
echo "<BR>卖 家 ID:".$_user->id;
echo "<BR>卖家昵称:".$_user->nick;
echo "<BR>好 评 率:".$_user->sellerGoodRate;
echo "<BR>卖家信用:".$_user->sellerCredit;
echo "<BR>卖家国家:".$_user->country;
echo "<BR>卖家省份:".$_user->province;
echo "<BR>卖家城市:".$_user->city;
echo "<BR>注册时间:".$_user->registrationDate;



echo "<BR><BR><BR>【获取店铺信息】==============================";
echo "<BR>店 铺 ID:".$_shop->id;
echo "<BR>店铺名称:".$_shop->title;
echo "<BR>店铺简介:".$_shop->introduction;
echo "<BR>公司名称:".$_shop->inshopCom;
echo "<BR>执 照 ID:".$_shop->license;
echo "<BR>描述相符:".$_shop->inshopDes;
echo "<BR>描述相符:".$_shop->inshopDesLevel;
echo "<BR>服务态度:".$_shop->inshopSer;
echo "<BR>服务态度:".$_shop->inshopSerLevel;
echo "<BR>发货速度:".$_shop->inshopShip;
echo "<BR>发货速度:".$_shop->inshopShipLevel;



echo "<BR><BR><BR>【获取类目信息】==============================";
echo "<BR>【1.查询指定类目】============================";
$shopCategory = $shopCategoryManager->queryById (1);
echo "<BR>类 目 ID:".$shopCategory->id;
echo "<BR>类目名称:".$shopCategory->name;
echo "<BR>父类目ID:".$shopCategory->parentId;
echo "<BR>店 铺 ID:".$shopCategory->shopId;

echo "<BR><BR><BR>【2.查询指定类目的子类目】====================";
$subCategories=$shopCategoryManager->querySubCategories (0);
foreach($subCategories as $shopCategory){
	echo "<BR>类目名称:".$shopCategory->name;
}

echo "<BR><BR><BR>【3.查询所有类目】============================";
$allShopCategory=$shopCategoryManager->queryAll();
foreach($allShopCategory as $shopCategory){
	echo "<BR>类目名称:".$shopCategory->name;
}



echo "<BR><BR><BR>【获取商品信息】==============================";
echo "<BR>【1.获取指定商品信息_单个】===================";
$item = $itemManager->queryById(8);
echo "<BR>商 品 ID:".$item->id;
echo "<BR>商品标题:".$item->title;
echo "<BR>商品价格:".$item->price;
echo "<BR>商品库存:".$item->storeCount;
echo "<BR>商品图片:".$item->picUrl;
echo "<BR>图片尺寸:".$item->getPicUrl(80);
echo "<BR>卖 家 ID:".$item->ownerId;
echo "<BR>类 目 ID:".$item->itemCategoryId;
echo "<BR>销 售 量:".$item->soldCount;
echo "<BR>收 藏 量:".$item->collectedCount;
echo "<BR>评 论 数:".$item->commentCount;
echo "<BR>上架时间:".$item->shelvesDate;

echo "<BR>【2.获取指定商品信息_批量】===================";
$ids = array(1,2,3);
$items = $itemManager->queryByIds($ids,"hotsell");
foreach($items as $item ){
	echo "<BR>宝贝标题:".$item->title;
}

echo "<BR>【3.获取指定类目的商品信息】==================";
$items=$itemManager->queryByCategory(8,"hotsell",3);
foreach($items as $item ){
	echo "<BR>宝贝标题:".$item->title;
}

echo "<BR>【4.获取指定关键词的商品信息】================";
$items=$itemManager->queryByKeyword("8","hotsell",3);
foreach($items as $item){
	echo "<BR>宝贝标题:".$item->title;
}



echo "<BR><BR><BR>【获取URL信息】==============================";
echo "<BR>【1.获取详情页URL】==========================";
echo "<BR>详情页URL:".$uriManager->detailURI($item);
echo "<BR>【2.获取列表页URL】========================";
echo "<BR>列表页URL:".$uriManager->searchURI();
echo "<BR>【3.获取类目页URL】========================";
echo "<BR>列表页URL:".$uriManager->shopCategoryURI($shopCategory);
echo "<BR>【4.获取收藏URL】========================";
echo "<BR>收藏店铺URL:".$uriManager->favoriteLink();
echo "<BR>收藏商品URL:".$uriManager->favoriteLink(1);
echo "<BR>【5.获取客服URL】========================";
echo "<BR>客服链接URL:".$uriManager->contactTag("nick");
echo "<BR>客服链接URL:".$uriManager->supportTag("客服旺旺ID号");
echo "<BR>客服链接URL:".$uriManager->supportTag("客服旺旺ID号","请点击直接访问");
echo "<BR>客服链接URL:".$uriManager->supportTag("客服旺旺ID号","请点击直接访问",1);
echo "<BR>客服链接URL:".$uriManager->supportTag("客服旺旺ID号","请点击直接访问",1,false);
echo "<BR>【6.加入购物车URL】========================";
echo "<BR>加入购物车URL:".$uriManager->addCartURI("1");
?>