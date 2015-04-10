var $ = jQuery.noConflict();
var test;
/* Skip navigation fix for accessibility */
(function() {
    var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
        is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
        is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

    if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
        window.addEventListener( 'hashchange', function() {
            var id = location.hash.substring( 1 ),
                element;

            if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
                return;
            }

            element = document.getElementById( id );

            if ( element ) {
                if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
                    element.tabIndex = -1;
                }

                element.focus();
            }
        }, false );
    }
})();
// Add new attribute
function fcwpf_addNewAttribute(elementID, attrName, attrValue) {
	var theElementID = document.getElementById(elementID),
		theAttrName = document.createAttribute(attrName);
	// check if ariaValue isset, if not add NULL as Default
	attrValue = typeof attrValue !== 'undefined' ? attrValue : 'NULL';
	// if attrValue not set, do not add a value to the attribute
	if(attrValue !== 'NULL') {
		theAttrName.value = attrValue;
	}
  	// set the attribute
    theElementID.setAttributeNode(theAttrName);
}

function fcwpf_addNewClassName(elementClass, newClass) {
	var element = document.querySelectorAll('.' + elementClass);
	element.className += " " + newClass;
}
(function( $ ) {
'use strict';

    $(function() {
        
    });

})( jQuery );
(function( $ ) {
	'use strict';
	// Add aria-expand aatribute to the mobile menu icon
	fcwpf_addNewAttribute('menu__icon', 'aria-expanded', 'false');

	fcwpf_addNewClassName('menu__icon', 'closed');

	fcwpf_addNewClassName('main-menu-item', 'closed');


})( jQuery );