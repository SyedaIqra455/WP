<?php
Class ReadMorePages {

	public $functionsObj;
	public $readMoreDataObj;

	public function __construct() {
		
	}

	public function mainPage() {
		require_once(YRM_VIEWS.'readMorePagesView.php');
	}

	public function addNewPage() {
		require_once(YRM_VIEWS.'readMoreAddNew.php');
	}

	public function morePlugins() {
		require_once(YRM_VIEWS.'morePlugins.php');
	}

	public function support() {
		require_once(YRM_VIEWS.'support.php');
	}

	public function help() {
		require_once(YRM_VIEWS.'help.php');
	}

	public function settings() {
		$functions = $this->functionsObj;
		require_once(YRM_VIEWS.'settings.php');
	}

	public function addNewButtons() {

		global $YrmRemoveOptions;

		$id = @$_GET['readMoreId'];
		$type = 'button';

		if(!empty($_GET['type'])) {
			$type = $_GET['type'];
		}

		$className = ucfirst($type).'TypeReadMore';
		$classPaths = YRM_CLASSES;
		global $YRM_TYPES;
		global $YRM_EXTENSIONS;
		
		if(!empty($YRM_TYPES[$type])) {
			$classPaths = $YRM_TYPES[$type];
		}
		if(in_array($type, $YRM_EXTENSIONS)) {
			$this->renderExtension($classPaths, $className);
			return;
		}
		if(file_exists($classPaths.$className.'.php')) {
			require_once($classPaths.$className.'.php');
			$typeObj = new $className();
			$YrmRemoveOptions = $typeObj->getRemoveOptions();
		}
		$dataObj = $this->readMoreDataObj;
		$dataObj->setId($id);
		$buttonWidth = $dataObj->getOptionValue('button-width');
		$buttonHeight = $dataObj->getOptionValue('button-height');
		$fontSize = $dataObj->getOptionValue('font-size');
		$yrmBtnHoverAnimate = $dataObj->getOptionValue('yrm-btn-hover-animate');
		$yrmBtnFontWeight = $dataObj->getOptionValue('yrm-btn-font-weight');
        $yrmEasings = $dataObj->getOptionValue('yrm-animate-easings');
		$animationDuration = $dataObj->getOptionValue('animation-duration');
		$btnBackgroundColor = $dataObj->getOptionValue('btn-background-color');
		$btnTextColor = $dataObj->getOptionValue('btn-text-color');
		$expanderFontFamily = $dataObj->getOptionValue('expander-font-family');
		$btnBorderRadius = $dataObj->getOptionValue('btn-border-radius');
		$horizontal = $dataObj->getOptionValue('horizontal');
		$vertical = $dataObj->getOptionValue('vertical');
		$hiddenContentBgColor = $dataObj->getOptionValue('hidden-content-bg-color');
		$hiddenContentTextColor = $dataObj->getOptionValue('hidden-content-text-color');
		$hiddenContentPadding = $dataObj->getOptionValue('hidden-content-padding');
		$showOnlyDevices = $dataObj->getOptionValue('show-only-devices', true);
		$selectedDevices = $dataObj->getOptionValue('yrm-selected-devices');
		$hoverEffect = $dataObj->getOptionValue('hover-effect', true);
		$btnHoverTextColor = $dataObj->getOptionValue('btn-hover-text-color');
		$btnHoverBgColor= $dataObj->getOptionValue('btn-hover-bg-color');
		$buttonForPost = $dataObj->getOptionValue('button-for-post', true);
		$yrmSelectedPost= $dataObj->getOptionValue('yrm-selected-post');
		$hideAfterWordCount = $dataObj->getOptionValue('hide-after-word-count');;
		$savedObj = $dataObj;
		$readMoreTitle = $dataObj->getOptionValue('expm-title');

		$dataParams = $dataObj->getOptionsData();
		$functions = $this->functionsObj;
		require_once(YRM_VIEWS."readMoreAddNewButton.php");
	}

	private function renderExtension($classPaths, $className) {

		if(file_exists($classPaths.$className.'.php')) {
			require_once($classPaths.$className.'.php');
			$typeObj = new $className();
			if($typeObj instanceof ReadMoreTypes) {
				if(!empty($_GET['readMoreId'])) {
					$typeObj->setId($_GET['readMoreId']);
				}
				$typeObj->prepareSavedValue();
				$typeObj->renderView();
			}
		}
	}
}