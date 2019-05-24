$(document).ready(function () { // выполнять при загрузке страницы
  $("#auto").change(function () {
    $('#noSelect1').attr('disabled', 'true') // после первого изменения убрать возможность редактирования
    $("#models").find('option').remove();   // очистка имеющихся значению у select #models
    $.ajax({    // Отправка запроса на сервер за моделями
      url: "../server/getModel.php",
      data: {auto_id: $("#auto").val()},
      success: function (res) {
        $('.models').addClass('done')
        JSON.parse(res).forEach(el => {  // Парсим и "печатаем " на странице варианты
          $('<option>', { text: el}).appendTo('#models');
        });
      }
    });
  })
});