( function( api ) {

	// Extends our custom "medical-trauma-center" section.
	api.sectionConstructor['medical-trauma-center'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );