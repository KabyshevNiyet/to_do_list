<script src="../vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="../vendor/bootstrap-4.1/popper.min.js"></script>
<script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="../vendor/slick/slick.min.js">
</script>
<script src="../vendor/wow/wow.min.js"></script>
<script src="../vendor/animsition/animsition.min.js"></script>
<script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="../vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="../vendor/circle-progress/circle-progress.min.js"></script>
<script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../vendor/chartjs/Chart.bundle.min.js"></script>
<script src="../vendor/select2/select2.min.js">
</script>
<!-- Main JS-->
<script src="../js/main.js">   
</script>

<script>
function alertDelete() {
  var txt;
  var r = confirm("Вы уверены, что хотите удалить ?");
  if (r == true) {
  	alert("Сотрудник удалён !");
  }
}
</script>

<script type="text/javascript">
		$(function() {
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    
      $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,list'
      },
      buttonText: {
        today: 'Сегодня'
      },
      defaultView: 'agendaWeek',
      selectable: true,
      editable: true,
      selectHelper: true,
      
      events: 'calendar/load.php',
    select: function(start,end){
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm");
      document.getElementById('eventTitle').innerHTML = start
      document.getElementById('eventTitle2').innerHTML = end; 
      document.getElementById('startT').value = start
      document.getElementById('endT').value = end; 
      document.getElementById('eventModal').style.display = 'block'; 
      
    },

    eventClick:function(event)
    {
     if(confirm("Are you sure you want to remove it?"))
     {
      var id = event.id;
      $.ajax({
       url:"calendar/delete.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        location.reload(); 
       }
      })
     }
    },

    });
		});
    </script>