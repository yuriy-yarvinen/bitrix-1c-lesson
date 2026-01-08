<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<!-- Call to Action Section -->
<section class="page-section bg-dark text-white" id="news">
	<div class="container text-center">
		<h2 class="mb-0">Новости</h2>
		<hr class="divider my-4">
	</div>
	<div class="container text-center">
		<div class="row justify-content-center">
			<? foreach ($arResult["ITEMS"] as $arItem): ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
			<div class="col-lg-4 text-center">
				<div class="card bg-secondary border border-dark">
							<img class="card-img-top" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
								 alt="<? echo $arItem["NAME"] ?>">
							<div class="card-body ">
								<h5 class="card-title"><? echo $arItem["NAME"] ?></h5>
								<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
									<p class="card-text"><? echo $arItem["PREVIEW_TEXT"]; ?></p>
								<? endif; ?>
								<a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>" class="btn btn-primary">Подробнее</a>
							</div>
				</div>
			</div>
			<? endforeach; ?>
		</div>
	</div>
</section>
