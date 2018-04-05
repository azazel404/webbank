$(document).on('click', '#btnDelete', function(){

  //send data id ke form modal
  $('#idPost').val($(this).data('id'));

  //munculin modal
  $('#modalDelete').modal('show');
});
