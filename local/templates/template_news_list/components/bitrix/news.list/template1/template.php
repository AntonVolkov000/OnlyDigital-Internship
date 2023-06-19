<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div id="barba-wrapper">
	<div class="article-list">
		<?if($arParams["DISPLAY_TOP_PAGER"]):?>
			<?=$arResult["NAV_STRING"]?><br />
		<?endif;?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<a class="article-item article-list__item" href="for-individuals.html" data-anim="anim-3"
				<?=$this->GetEditAreaId($arItem['ID']);?>>
				<?if($arParams["DISPLAY_PICTURE"]!="N" && $arItem["PREVIEW_PICTURE"]["SRC"]):?>
					<div class="article-item__background">
						<img src="<?echo $arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""/>
					</div>
				<?endif?>
				<div class="article-item__wrapper">
					<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
						<div class="article-item__title"><?echo $arItem["NAME"]?></div>
					<?endif;?>
					<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
						<div class="article-item__content"><?echo $arItem["PREVIEW_TEXT"];?></div>
					<?endif;?>
				</div>
			</a>
		<?endforeach;?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<br /><?=$arResult["NAV_STRING"]?>
		<?endif;?>
	</div>
</div>
