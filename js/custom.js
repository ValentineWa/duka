$(document).ready(function() {
  
 $('.addtocart').click(function (e) {
  e.preventDefault();
  var shoesId = $(this).attr('val');
  $.get('addtocart?shoesId='+shoesId, function (data) {
      $('#addtocart').modal('show')
          .find('#addtocartContent')
          .html(data);
  });
});
});
