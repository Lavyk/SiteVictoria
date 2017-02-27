$( "div" ).on( "click", function() {
  $( this ).css({
    width: function( index, value ) {
      return parseFloat( value ) * 1.2;
    },
    height: function( index, value ) {
      return parseFloat( value ) * 1.2;
    }
  });
});