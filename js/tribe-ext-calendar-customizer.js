( function( $ ) {
    "use strict";

    /**
     * MONTH VIEW
     */

    /* Header row background color */
    wp.customize( 'tecc_header_row_background', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar thead th' ).css( 'background-color', to );
        } );
    } );

    /* Header row text color */
    wp.customize( 'tecc_header_row_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.tribe-events-calendar thead th' ).css( 'color', to );
        } );
    } );

    /* Header row cell border color */
    wp.customize( 'tecc_header_row_cell_border_color', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar thead th' ).css( { 'border-left-color': to, 'border-right-color': to } );
        } );
    } );

    /* Current month past day header background color */
    wp.customize( 'tecc_past_day_header_background', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"]' ).css( 'background-color', to );
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"] > a' ).css( 'background-color', to );
        } );
    } );

    /* Current month past day text color */
    wp.customize( 'tecc_past_day_text_color', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"]' ).css( 'color', to );
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"] > a' ).css( 'color', to );
        } );
    } );

    /* Current month past day background color */
    wp.customize( 'tecc_past_day_background', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-past' ).css( 'background-color', to );
        } );
    } );

    /* Current month present day header background color */
    wp.customize( 'tecc_present_day_header_background', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"]' ).css( 'background-color', to );
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"] > a' ).css( 'background-color', to );
        } );
    } );

    /* Current month present day text color */
    wp.customize( 'tecc_present_day_text_color', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"]' ).css( 'color', to );
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"] > a' ).css( 'color', to );
        } );
    } );

    /* Current month present day background color */
    wp.customize( 'tecc_present_day_background', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-present' ).css( 'background-color', to );
        } );
    } );

    /* Current month future day header background color */
    wp.customize( 'tecc_future_day_header_background', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-future div[id*="tribe-events-daynum-"]' ).css( 'background-color', to );
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-future div[id*="tribe-events-daynum-"] > a' ).css( 'background-color', to );
        } );
    } );

    /* Current month future day text color */
    wp.customize( 'tecc_future_day_text_color', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-future div[id*="tribe-events-daynum-"]' ).css( 'color', to );
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-future div[id*="tribe-events-daynum-"] > a' ).css( 'color', to );
        } );
    } );

    /* Current month future day background color */
    wp.customize( 'tecc_future_day_background', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar td.tribe-events-future' ).css( 'background-color', to );
        } );
    } );

    /* Date alignment */
    wp.customize( 'tecc_date_alignment', function( value ) {
        value.bind( function( to ) {
            if ( to == 'left' ) {
                $( '#tribe-events-content .tribe-events-calendar div[id*="tribe-events-daynum-"]' ).css( {
                    textAlign: 'left'
                } );
            }
            else if ( to == 'center' ){
                $( '#tribe-events-content .tribe-events-calendar div[id*="tribe-events-daynum-"]' ).css( {
                    textAlign: 'center'
                } );
            }
            else if ( to == 'right' ) {
                $( '#tribe-events-content .tribe-events-calendar div[id*="tribe-events-daynum-"]' ).css( {
                    textAlign: 'right'
                } );
            }
            else {
                $( '#tribe-events-content .tribe-events-calendar div[id*="tribe-events-daynum-"]' ).css( {
                    textAlign: 'initial'
                } );
            }
        } );
    } );

    /* Date size */
    wp.customize( 'tecc_date_size', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-calendar div[id*="tribe-events-daynum-"]' ).css( { 'fontSize': to + 'px' } );
            $( '#tribe-events-content .tribe-events-calendar div[id*="tribe-events-daynum-"] a' ).css( { 'fontSize': to + 'px' } );
        } );
    } );

    /* Event title text color */
    wp.customize( 'tecc_event_title_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.tribe-events-calendar div[id*="tribe-events-event-"] h3.tribe-events-month-event-title a' ).css( 'color', to );
            $( '.tribe-events-calendar td .tribe-events-viewmore a' ).css( 'color', to );
        } );
    } );

    /* View all text color */
    wp.customize( 'tecc_view_all_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.tribe-events-calendar td .tribe-events-viewmore a' ).css( 'color', to );
        } );
    } );

    /* Featured event background color */
    wp.customize( 'tecc_featured_event_background_color', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content.tribe-events-month table.tribe-events-calendar .type-tribe_events.tribe-event-featured' ).css( 'background-color', to );
        } );
    } );

    /* Featured event text color */
    wp.customize( 'tecc_featured_event_text_color', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content table.tribe-events-calendar .type-tribe_events.tribe-event-featured .tribe-events-month-event-title a' ).css( 'color', to );
        } );
    } );

    /**
     * LIST VIEW
     */

    /* List view separator visibility */
    wp.customize( 'list_separator_visibility', function( value ) {
        value.bind( function( to ) {
            var display = true === to ? 'none' : 'block' ;
            $( '#tribe-events-content .tribe-events-list-separator-month' ).css( 'display', display );
        } );
    } );

    /* List view, month separator font size */
    wp.customize( 'list_separator_font_size', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-list-separator-month' ).css( { 'fontSize': to + 'px' } );
        } );
    } );

    /* List view, separator text color */
    wp.customize( 'list_separator_text_color', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-list-separator-month' ).css( 'color', to );
        } );
    } );

    /* List view, separator background color */
    wp.customize( 'list_separator_background_color', function( value ) {
        value.bind( function( to ) {
            $( '#tribe-events-content .tribe-events-list-separator-month' ).css( 'background-color', to );
            $( '#tribe-events-content .tribe-events-list-separator-month span' ).css( 'background-color', to );
        } );
    } );

    /* Date alignment */
    wp.customize( 'list_separator_alignment', function( value ) {
        value.bind( function( to ) {
            if ( to == 'left' ) {
                $( '#tribe-events-content .tribe-events-list-separator-month' ).css( {
                    textAlign: 'left'
                } );
            }
            else if ( to == 'center' ){
                $( '#tribe-events-content .tribe-events-list-separator-month' ).css( {
                    textAlign: 'center'
                } );
            }
            else if ( to == 'right' ) {
                $( '#tribe-events-content .tribe-events-list-separator-month' ).css( {
                    textAlign: 'right'
                } );
            }
            else {
                $( '#tribe-events-content .tribe-events-list-separator-month' ).css( {
                    textAlign: 'initial'
                } );
            }
        } );
    } );


})( jQuery );