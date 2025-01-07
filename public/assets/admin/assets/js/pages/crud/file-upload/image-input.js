'use strict';

// Class definition
var KTImageInputDemo = function () {
	// Private functions
	var initDemos = function () {
		// Example 1
		var avatar1 = new KTImageInput('kt_image_1');

		// Example 2
		var avatar2 = new KTImageInput('kt_image_2');

		// Example 3
		var avatar3 = new KTImageInput('kt_image_3');

		// Example 4
		var avatar4 = new KTImageInput('kt_image_4');

		// Example 5
		var avatar6 = new KTImageInput('kt_image_6');
		var avatar7 = new KTImageInput('kt_image_7');
		var avatar8 = new KTImageInput('kt_image_8');
		var avatar9 = new KTImageInput('kt_image_9');
		var avatar10 = new KTImageInput('kt_image_10');
		var avatar11 = new KTImageInput('kt_image_11');
		var avatar12 = new KTImageInput('kt_image_12');
		var avatar13 = new KTImageInput('kt_image_13');
		var avatar14 = new KTImageInput('kt_image_14');
		var avatar15 = new KTImageInput('kt_image_15');

	}

	return {
		// public functions
		init: function() {
			initDemos();
		}
	};
}();

KTUtil.ready(function() {
	KTImageInputDemo.init();
});
