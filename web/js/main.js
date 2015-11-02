/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){

    $('#send1').click(function(){

        console.log('___+++ SEND1 +++___');
        $.ajax({
          type: "POST",
          url: "http://localhost:8000/send",
          data: {

          },
          dataType: "json",
          success: function(response) {
            console.log(response);
          }
        });

    });



    $('#appbundle_event_startTime_date').datetimepicker({
      lang:'ch',
      format: 'Y-m-d',
      timepicker:false,

    });
    $('#appbundle_event_startTime_time').datetimepicker({
      datepicker:false,
      format:'H:i',
      step:5
    });
    $('#appbundle_event_endTime_date').datetimepicker({
      lang:'ch',
      format: 'Y-m-d',
      timepicker:false,

    });
    $('#appbundle_event_endTime_time').datetimepicker({
      datepicker:false,
      format:'H:i',
      step:5
    });

});
