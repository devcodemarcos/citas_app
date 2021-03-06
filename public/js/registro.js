/******/ (() => { // webpackBootstrap
/*!**********************************!*\
  !*** ./resources/js/registro.js ***!
  \**********************************/
$.validator.addMethod("valueNotEquals", function (value, element, arg) {
  return arg !== value;
}, "Value must not equal arg.");
$('#frm-registro-cita').validate({
  rules: {
    names: {
      required: true
    },
    surnames: {
      required: true
    },
    email: {
      required: true,
      email: true
    },
    sede: {
      min: 1
    },
    date: {
      valueNotEquals: "0"
    }
  },
  messages: {
    names: {
      required: 'Tu nombre es necesario'
    },
    surnames: {
      required: 'Tus apellidos son necesarios'
    },
    email: {
      required: 'Tu correo es necesario',
      email: 'Correo no valido'
    },
    sede: {
      min: 'La sede es necesaria'
    },
    date: {
      valueNotEquals: 'La fecha y hora es necesaria'
    }
  }
});
$('#sede').on('change', function () {
  var route = $(this).data('route');
  var sede_id = $(this).val();

  if (parseInt(sede_id) > 0) {
    $.ajax({
      url: route,
      method: 'POST',
      dataType: 'json',
      data: {
        sede_id: sede_id
      }
    }).done(function (response) {
      if (response.status) {
        var options = '<option value="0">-- Selecciona una fecha --</option>';
        var available_dates = response.available_dates;
        available_dates.forEach(function (date, index) {
          options += "<option value=\"".concat(date.date, ",").concat(date.start_hour, ",").concat(date.end_hour, "\">Cita de la sede ").concat(date.sede_id, " de ").concat(date.start_hour, " a ").concat(date.end_hour, " del ").concat(moment(date.date).locale('es').format('LL'), " (").concat(date.available_dates, " lugares disponibles)</option>");
        });
        $('#date').empty().append(options);
      } else {
        $('#date').empty().append('<option value="0">-- Selecciona una fecha --</option>');
        alert(response.message);
      }
    }).fail(function () {}).always(function () {});
  } else {
    $('#date').empty().append('<option value="0">-- Selecciona una fecha --</option>');
  }
});
/******/ })()
;