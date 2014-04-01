$(document).ready(function(){
  $('fieldset .field input[type="radio"]').click(function(){
    radioGroup = $(this).attr('name');
    if ($(this).is(':checked')) {
      $('input[type="radio"][name="' + radioGroup + '"]').parents('.field').removeClass('field-active');
      $(this).parents('.field').addClass('field-active');
    }
  });

  $('fieldset#new-shape input[type="radio"]').click(function(){
    shapeName = $(this).attr('id');
    if (shapeName == "shape-octagon") {
    };
    $('form')
      .attr('class', '')
      .addClass(shapeName);
  });

  $('#shape-octagon').click();

});