// Opens the folder
$(document).on('click', '.nav-btn', function(){
  var id = $(this).data('id');

  // Changes the view
  $('.pages').css('display','none');
  $(`#${id}`).css('display','initial');
});

$('.downnotify').map(function(){
  // Gets the info for the task.
  var name = $(this).data('name');
  var ip = $(this).data('ip');
  var port = $(this).data('port');

  var string = `<p>${name}(${ip}) - ${port}</p>`;

  $(`div#down-devices`).append(`${string}`);
})

// Opens the folder
$(document).on('click', '.OpenDrop', function(){
  var id = $(this).data('id');

  // Changes the view
  $('.toggle-sec').css('display','none');
  $(`.${id}`).css('display','initial');

  $(`.OpenDrop`).css('display','initial');
  $(`.CloseDrop`).css('display','none');

  $(`.OpenDrop-${id}`).css('display','none');
  $(`.CloseDrop-${id}`).css('display','initial');
});

// Opens the folder
$(document).on('click', '.CloseDrop', function(){
  var id = $(this).data('id');

  // Changes the view
  $('.toggle-sec').css('display','none');

  $(`.OpenDrop`).css('display','initial');
  $(`.CloseDrop`).css('display','none');
});