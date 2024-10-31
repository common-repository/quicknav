( function($) {

	// Conditional Field

	var $selector = $( '[name="quicknav_options[content_type]"]' ),
	 	$menu 	 = $( '.select-menu' ),
		$product = $( '.select-product' ),
		$blog 	 = $('.select-blog');

	// default content type

	switch( $selector.val() ) {

		case 'menu' :
			$menu.show()
			$product.hide()
			$blog.hide()
		break;
		case 'blog' :
			$blog.show()
			$menu.hide()
			$product.hide()
		break;
		case 'product' :
			$product.show()
			$blog.hide()
			$menu.hide() 
		break;
	}

	// On change content type
	$selector.on( 'change', function() {

		var $this = $(this),
			$val = $this.val();

			switch( $val ) {

				case 'menu' :
					$menu.show()
					$product.hide()
					$blog.hide()
				break;
				case 'blog' :
					$blog.show()
					$menu.hide()
					$product.hide()
				break;
				case 'product' :
					$product.show()
					$blog.hide()
					$menu.hide() 
				break;
			}

	} )



	// Color Picker
	$('.wsf-color-picker').wpColorPicker();

	// Media Upload
	var mediaUploader, t;

	$('.wsf_image_button').click( function(e) {
		e.preventDefault();

		t = $(this).parent().find('.wsf_background_image');

		if (mediaUploader) {
		  mediaUploader.open();
		  return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
		  title: 'Choose Image',
		  button: {
		  text: 'Choose Image'
		}, multiple: false });
		mediaUploader.on('select', function() {
		var attachment = mediaUploader.state().get('selection').first().toJSON();

			t.val( attachment.url )

		});
		mediaUploader.open();
	});

	// Text repeter

	$( document ).on( 'click', '.add-field', function() {

		var $this = $(this),
			$itemParent = $this.parent().parent(),
			$btnParent  = $this.parent();

			$itemClone = $btnParent.clone();
			$itemClone.find('input').val('');

		var $t = $itemClone.find('input').attr('name', ),
			$makeName = 'weqe';


			console.log( $itemParent.data('name') );


			$itemClone.appendTo( $itemParent );

		var t = $itemParent.find( '.text-repeater' ).length;

		if( t > 1 ) {
			$itemParent.find( '.remove-field' ).show();
		}

			

	} );

	$( document ).on( 'click', '.remove-field', function() {

		var $this = $(this),
		$itemParent = $this.parent().parent(),
		$btnParent = $this.parent();

		$btnParent.remove();

		var t = $itemParent.find( '.text-repeater' ).length;

		if( t == 1 ) {
			$itemParent.find( '.remove-field' ).hide();
		}

	} )


	// Range Slider
	$(".wsf-range").each( function() {

		var $this = $(this);

		$this.slider({
			range: "min",
			min: $this.data('min'),
			max: $this.data('max'),
			value: $this.data('range'),
			slide: function (e, ui) {

				var $this = $(this),
					$value = ui.value;
				$this.find('.ui-slider-handle').text( $value );
			 	$(this).find('input').val( $value );
			} 
		});

	} )


	// Text repeter

	var $t  = $( '.push-val' ).val();

	var Totalval = $t ? JSON.parse( $t ) : [];


	$( document ).on( 'click', '.add-items', function(e) {

		e.preventDefault();

		var $this = $(this),
			$thisParent = $this.parent(),
			$findInputArea = $thisParent.find('.items-form'),
			$findInput = $findInputArea.find('.input');

			var $singleItems = [];

			$findInput.each( function( i, items ) {

				$singleItems.push($(items).val())
				

			} )


			Totalval.push( $singleItems );

			var items 	   = $('.items-preview'),
				length 	   = items.find( 'tbody tr' ).length,
				itemNumber = length + 1;
				itemIndex  = length;


   			items.find( 'tbody' ).append('<tr><td scope="row">Quick Nav:- '+itemNumber+'</td><td>'+$singleItems[0]+'</td><td>'+$singleItems[1]+'</td><td><i class="'+$singleItems[2]+'"></i></td><td><span data-index="'+itemIndex+'" class="item-remove" >X</span></td></tr>');

			$thisParent.parent().find('.push-val').val( JSON.stringify(Totalval) );

			$findInput.val('')

		
	} );

	// Remove Item
	$( document ).on( 'click', '.item-remove', function() {

		var $this 		= $( this ),
			$pushVal 	= $( '.push-val' ),
			$itemIndex  = $this.data('index'),
			$getVal 	= $pushVal.val(),
			$parseVal 	= JSON.parse( $getVal ),
			$removeVal 	= $parseVal.splice( $itemIndex, 1 );

			$pushVal.val( JSON.stringify( $parseVal ) );

			$this.parent().parent().remove();


	} );




})(jQuery)