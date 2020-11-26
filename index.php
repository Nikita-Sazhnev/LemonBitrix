<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 
<main>
          <?$APPLICATION->IncludeComponent(
                  "bitrix:news.list",
                  "slider",
                  Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "slider",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "1",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(0=>"URL_ARTICLE",1=>"",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "Y",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                  )
                );?>
          <div class="main__preview shadow__box">
            <div class="row pt-3">
                          <?$APPLICATION->IncludeComponent(
				"bitrix:news.list", 
				"preview_three", 
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"COMPONENT_TEMPLATE" => "preview_three",
					"DETAIL_URL" => "/recipes/#ELEMENT_CODE#/",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(
						0 => "SHOW_COUNTER",
						1 => "",
					),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "2",
					"IBLOCK_TYPE" => "content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "3",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(
						0 => "ATT_READ_TIME",
						1 => "BLOG_COMMENTS_CNT",
						2 => "",
					),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "Y",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "DESC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "N"
				),
				false
			);?>
            </div>
          </div>
         <?$APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.random", 
	"big_preview", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "/recipes/#ELEMENT_CODE#/",
		"IBLOCKS" => array(
			0 => "2",
		),
		"IBLOCK_TYPE" => "content",
		"PARENT_SECTION" => "2",
		"COMPONENT_TEMPLATE" => "big_preview"
	),
	false
);?>
        </main>
        <div class="modeles__group d-flex justify-content-around flex-wrap">
          <div class="first__mcolum d-flex flex-column">
           

            <?$APPLICATION->IncludeComponent(
			  "bitrix:news.detail",
			  "chichi",
			  Array(
			    "ACTIVE_DATE_FORMAT" => "",
			    "ADD_ELEMENT_CHAIN" => "N",
			    "ADD_SECTIONS_CHAIN" => "Y",
			    "AJAX_MODE" => "N",
			    "AJAX_OPTION_ADDITIONAL" => "",
			    "AJAX_OPTION_HISTORY" => "N",
			    "AJAX_OPTION_JUMP" => "N",
			    "AJAX_OPTION_STYLE" => "Y",
			    "BROWSER_TITLE" => "-",
			    "CACHE_GROUPS" => "Y",
			    "CACHE_TIME" => "36000000",
			    "CACHE_TYPE" => "A",
			    "CHECK_DATES" => "Y",
			    "COMPONENT_TEMPLATE" => "chichi",
			    "DETAIL_URL" => "",
			    "DISPLAY_BOTTOM_PAGER" => "Y",
			    "DISPLAY_DATE" => "N",
			    "DISPLAY_NAME" => "Y",
			    "DISPLAY_PICTURE" => "N",
			    "DISPLAY_PREVIEW_TEXT" => "N",
			    "DISPLAY_TOP_PAGER" => "N",
			    "ELEMENT_CODE" => "",
			    "ELEMENT_ID" => "5",
			    "FIELD_CODE" => array(0=>"SHOW_COUNTER",1=>"CREATED_BY",2=>"CREATED_USER_NAME",3=>"",),
			    "IBLOCK_ID" => "2",
			    "IBLOCK_TYPE" => "content",
			    "IBLOCK_URL" => "",
			    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
			    "MESSAGE_404" => "",
			    "META_DESCRIPTION" => "-",
			    "META_KEYWORDS" => "-",
			    "PAGER_BASE_LINK_ENABLE" => "N",
			    "PAGER_SHOW_ALL" => "N",
			    "PAGER_TEMPLATE" => ".default",
			    "PAGER_TITLE" => "Страница",
			    "PROPERTY_CODE" => array(0=>"ATT_READ_TIME",1=>"BLOG_COMMENTS_CNT",2=>"",),
			    "SET_BROWSER_TITLE" => "Y",
			    "SET_CANONICAL_URL" => "N",
			    "SET_LAST_MODIFIED" => "N",
			    "SET_META_DESCRIPTION" => "Y",
			    "SET_META_KEYWORDS" => "Y",
			    "SET_STATUS_404" => "N",
			    "SET_TITLE" => "Y",
			    "SHOW_404" => "N",
			    "STRICT_SECTION_CHECK" => "N",
			    "USE_PERMISSIONS" => "N",
			    "USE_SHARE" => "N"
			  )
			);?>


               <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => "/includes/target.php"
				)
			);?>
            </div>
          </div>

          <div class="second__mcolum d-flex flex-column">
            
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/includes/tabs.php"
                )
              );?>
              
                <?$APPLICATION->IncludeComponent(
                  "bitrix:menu",
                  "tags",
                  Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(0=>"",),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "tags",
                    "USE_EXT" => "N"
                  )
                );?>

            <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => "/includes/calendar.php"
				)
			);?>

          </div>
          <div class="third__mcolum d-flex flex-column">
            <?$APPLICATION->IncludeComponent(
            	"bitrix:news.detail", 
            	"popular", 
            	array(
            		"ACTIVE_DATE_FORMAT" => "",
            		"ADD_ELEMENT_CHAIN" => "N",
            		"ADD_SECTIONS_CHAIN" => "Y",
            		"AJAX_MODE" => "N",
            		"AJAX_OPTION_ADDITIONAL" => "",
            		"AJAX_OPTION_HISTORY" => "N",
            		"AJAX_OPTION_JUMP" => "N",
            		"AJAX_OPTION_STYLE" => "Y",
            		"BROWSER_TITLE" => "-",
            		"CACHE_GROUPS" => "Y",
            		"CACHE_TIME" => "36000000",
            		"CACHE_TYPE" => "A",
            		"CHECK_DATES" => "Y",
            		"DETAIL_URL" => "",
            		"DISPLAY_BOTTOM_PAGER" => "Y",
            		"DISPLAY_DATE" => "N",
            		"DISPLAY_NAME" => "Y",
            		"DISPLAY_PICTURE" => "N",
            		"DISPLAY_PREVIEW_TEXT" => "N",
            		"DISPLAY_TOP_PAGER" => "N",
            		"ELEMENT_CODE" => "",
            		"ELEMENT_ID" => "5",
            		"FIELD_CODE" => array(
            			0 => "SHOW_COUNTER",
            			1 => "",
            		),
            		"IBLOCK_ID" => "2",
            		"IBLOCK_TYPE" => "content",
            		"IBLOCK_URL" => "",
            		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            		"MESSAGE_404" => "",
            		"META_DESCRIPTION" => "-",
            		"META_KEYWORDS" => "-",
            		"PAGER_BASE_LINK_ENABLE" => "N",
            		"PAGER_SHOW_ALL" => "N",
            		"PAGER_TEMPLATE" => ".default",
            		"PAGER_TITLE" => "Страница",
            		"PROPERTY_CODE" => array(
            			0 => "ATT_READ_TIME",
            			1 => "BLOG_COMMENTS_CNT",
            			2 => "ATT_POPULAR",
            			3 => "ATT_POPULAR_IMG",
            			4 => "",
            		),
            		"SET_BROWSER_TITLE" => "Y",
            		"SET_CANONICAL_URL" => "N",
            		"SET_LAST_MODIFIED" => "N",
            		"SET_META_DESCRIPTION" => "Y",
            		"SET_META_KEYWORDS" => "Y",
            		"SET_STATUS_404" => "N",
            		"SET_TITLE" => "Y",
            		"SHOW_404" => "N",
            		"STRICT_SECTION_CHECK" => "N",
            		"USE_PERMISSIONS" => "N",
            		"USE_SHARE" => "N",
            		"COMPONENT_TEMPLATE" => "popular"
            	),
            	false
            );?>
   
            <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => "/includes/timeline.php"
				)
			);?>
          </div>
        </div>
       
        <!-- <div class="comment__post bg-white my-3 py-3 py-lg-4 px-2 px-md-5 shadow__box">
          <div class="ahead__string d-flex justify-content-between">
            <h3 class="font-italic">Post a Comment</h3>
            <div class="comment__linking d-none d-sm-inline-block">
              <a target="_blank" class="font-weight-bolder font-italic" href="https://facebook.com">Faceboock</a>
              <span>|</span>
              <a target="_blank" class="font-weight-bolder font-italic" href="https://twitter.com">Twitter</a>
            </div>
          </div>
          <div class="form__string d-flex justify-content-between py-1 py-lg-2 px-1 px-lg-3 mb-3" style="background: #edefee;">
            <a href="#">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/comment-avatar.png" alt="">
            </a>
            <form class="form" action="#" name="post__comment" method="POST">
              <div class="input-group-append w-100" style="margin-top: 0.3rem;">
                <input type="text" class="comment__input-text px-2" style="min-height: 2.7rem;">
                <input type="submit" value="Post" class="px-4 ml-1 bg-dark text-white text-uppercase"></input>
              </div>
            </form>
          </div>
        </div>
        <div class="comments__view my-3 my-lg-5 bg-white shadow__box">
          <div class="comments__view-heading underline py-4 px-3 px-lg-5">
            <h3 class="font-italic">Comments</h3>
          </div>
          <div class="comment__shell px-3 px-lg-5 pb-3 pb-lg-5">
            <div class="comment__body row">
              <div class="avatar__place col-auto col-lg-1 ml-1 m-lg-0 pr-3 pr-lg-0 d-flex justify-content-end">
                <a href="#">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/comment-avatar.png" class="mb-2" alt="">
                </a>
              </div>
              <div class="comment__body-place col-auto col-lg-11 pl-3 pl-lg-5">
                <p class="m-0">post by</p>
                <div class="name__info-string d-flex justify-content-between">
                  <div class="name__reply d-flex">
                    <h4 class="font-weight-bold comment__name" style="font-size: 1.1rem;">Smuckerger Topping</h4>
                    <button class="reply__btn btn-sm mx-2">Reply</button>
                  </div>
                  <p class="mr-3 d-inline-block"><i class="fa fa-share-alt" aria-hidden="true" style="cursor: pointer;"></i> 465 <i class="fa fa-thumbs-o-up" aria-hidden="true" style="cursor: pointer;"></i> 640</p>
                </div>
                <data class="comment__data d-block">6/10/2014</data>
                <div class="image__comment mt-3 mb-2 d-inline-block position-relative">
                  <a data-fancybox="gallery" href="http://lemon.loc<?=SITE_TEMPLATE_PATH?>/img/big-image/Photo-mail-small1_photos_v2_x4.png">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/Photo-mail-small1.png" alt="">
                  </a>
                  <div class="pintres__comment-link d-inline-block position-absolute">
                    <a target="_blank" href="https://pinterest.com">
                      <i class="fa fa-pinterest mx-2 my-2" aria-hidden="true" style="color: black; font-size: 23px;"></i>
                    </a>
                  </div>
                </div>
                <p class="comment-sense underline mb-1">Thank you for the recipe1!</p>
                <div class="comment__body row">
                  <div class="avatar__place col-auto col-lg-1 ml-1 m-lg-0 pr-3 pr-lg-0 d-flex justify-content-end">
                    <a href="#">
                      <img src="<?=SITE_TEMPLATE_PATH?>/img/comment-avatar.png" class="mb-2" alt="">
                    </a>
                  </div>
                  <div class="comment__body-place col-auto col-lg-11 pl-3 pl-lg-5">
                    <p class="m-0">post by</p>
                    <div class="name__info-string d-flex justify-content-between">
                      <div class="name__reply d-flex">
                        <h4 class="font-weight-bold comment__name" style="font-size: 1.1rem;">Smuckerger Topping</h4>
                        <button class="reply__btn btn-sm mx-2">Reply</button>
                      </div>
                      <p class="mr-3 d-inline-block"><i class="fa fa-share-alt" aria-hidden="true" style="cursor: pointer;"></i> 465 <i class="fa fa-thumbs-o-up" aria-hidden="true" style="cursor: pointer;"></i> 640</p>
                    </div>
                    <data class="comment__data d-block">6/10/2014</data>
                    <p class="comment-sense mb-1 font-weight-bold">Thank you for the recipe! Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                  <button class="w-100 border-0 font-weight-light underline my-1 my-lg-2" style="outline: none; background: none;">24 more comments</button>
                </div>
              </div>
            </div>
            <div class="comment__body row">
              <div class="avatar__place col-auto col-lg-1 ml-1 m-lg-0 pr-3 pr-lg-0 d-flex justify-content-end">
                <a href="#">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/comment-avatar.png" class="mb-2" alt="">
                </a>
              </div>
              <div class="comment__body-place col-auto col-lg-11 pl-3 pl-lg-5">
                <p class="m-0">post by</p>
                <div class="name__info-string d-flex justify-content-between">
                  <div class="name__reply d-flex">
                    <h4 class="font-weight-bold comment__name" style="font-size: 1.1rem;">Smuckerger Topping</h4>
                    <button class="reply__btn btn-sm mx-2">Reply</button>
                  </div>
                  <p class="mr-3 d-inline-block"><i class="fa fa-share-alt" aria-hidden="true" style="cursor: pointer;"></i> 465 <i class="fa fa-thumbs-o-up" aria-hidden="true" style="cursor: pointer;"></i> 640</p>
                </div>
                <data class="comment__data d-block">6/10/2014</data>
                <p class="comment-sense mb-1">Thank you for the recipe!.</p>
              </div>
            </div>
          </div>
        </div> -->

        <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.comments", 
	"comment", 
	array(
		"BLOG_USE" => "Y",
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMMENTS_COUNT" => "5",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "16",
		"FB_USE" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"SHOW_DEACTIVATED" => "N",
		"TEMPLATE_THEME" => "blue",
		"URL_TO_COMMENT" => "",
		"VK_USE" => "N",
		"WIDTH" => "",
		"COMPONENT_TEMPLATE" => "comment",
		"BLOG_TITLE" => "Комментарии",
		"BLOG_URL" => "catalog_comments",
		"PATH_TO_SMILE" => "/bitrix/images/blog/smile/",
		"EMAIL_NOTIFY" => "N",
		"SHOW_SPAM" => "Y",
		"SHOW_RATING" => "Y",
		"RATING_TYPE" => ""
	),
	false
);?>
      </div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>