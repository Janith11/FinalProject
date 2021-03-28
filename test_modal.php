<!DOCTYPE html>
<html>
<head>
	<title>Calender</title>
		
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

<<<<<<< HEAD
		<link rel="stylesheet" href="modalstyle.css">

		<!-- google font links -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
=======
		<!-- my own style sheet  -->
<!-- 		<link rel="stylesheet" type="text/css" href="pop_up_style.css"> -->
>>>>>>> 3383cecc31766d3a150b6353f6af02676b350ce9

</head>
<body>

<div class="container">

  <div id="calendar"></div>

  	<script>
		$(document).ready(function(){
			var calender = $('#calendar').fullCalendar({
				editable:true,
				header:{
					left:'prev,next today',
					center:'title',
					right:'month,agendaWeek,agendaDay'
				},
				//events: 'load.php',
				selectable:true,
				selectHelper:true,


				dayClick: function(date, jsEvent, view) {

				    function Popup() {
						// craete dialog box
						var myDialog = document.createElement("dialog");
						myDialog.className += 'modal_body';
						document.body.appendChild(myDialog)

						//enter dialog box text
						var headerdiv = document.createElement('div');
						headerdiv.className += 'header';
						myDialog.appendChild(headerdiv);
						var text = document.createTextNode("Enter Shedule Details");
						headerdiv.appendChild(text);

						// name and date div
						var namedate = document.createElement('div');
						namedate.className += 'name_date';
						myDialog.appendChild(namedate);
						var clicked_date = date.format();
						var cliet_name = document.createTextNode("Your Name : Sandamal Ranasinghe");
						namedate.appendChild(cliet_name);
						var line_brack = document.createElement('br');
						namedate.appendChild(line_brack);
						var choos_date = document.createTextNode("Your Choose : " + clicked_date);
						namedate.appendChild(choos_date);

						var shedule_name = document.createElement('div');
						shedule_name.className += 'shedule_name';
						myDialog.appendChild(shedule_name);
						var text_s_name = document.createTextNode("Shedule Name");
						shedule_name.appendChild(text_s_name);

						var line_brack_one = document.createElement('br');
						shedule_name.appendChild(line_brack_one);
						// set shedule name
						var event_name = document.createElement("input");
						event_name.setAttribute('type', 'text');
						event_name.className += 'event_name';
						shedule_name.appendChild(event_name);

						// time div
						var time_div = document.createElement('div');
						time_div.className += 'time_div';
						myDialog.appendChild(time_div);
						var text_time = document.createTextNode("Choose Time");
						text_time.className += 'text';
						time_div.appendChild(text_time);
						var line_brack_two = document.createElement('br');
						time_div.appendChild(line_brack_two);
						var time = document.createElement('input');
						time.className += 'time';
						time_div.appendChild(time);
						time.setAttribute('type', 'time');

						// select vehicle category
						var category_div = document.createElement('div');
						category_div.className += 'category_div';
						myDialog.appendChild(category_div);
						var text_category = document.createTextNode('Select Category');
						category_div.appendChild(text_category);
						var category = ["Choose..","Motor Bicycle","Three Weeler","Car","Van","Bus","Lorry","Long vehicle","Hevy Vehicle"];
						var selectList = document.createElement("select");
						selectList.className += 'vehicle_category';
						selectList.id = "mySelect";
						category_div.appendChild(selectList);
						for (var i = 0; i < category.length; i++) {
							var option = document.createElement("option");
							option.value = category[i];
							option.text = category[i];
							selectList.appendChild(option);
						}

						
						// tranmission type
						var tranmission_div = document.createElement('div');
						tranmission_div.className += 'tranmission_div';
						myDialog.appendChild(tranmission_div);
						var auto = document.createElement("input");
						auto.className += 'auto';
						auto.setAttribute("type", "radio");
						auto.setAttribute('name', 'transmission');
						tranmission_div.appendChild(auto);
						var text_auto = document.createTextNode(' Auto Transmission');
						text_auto.className += 'text';
						tranmission_div.appendChild(text_auto);
						var text_space = document.createElement('br');
						tranmission_div.appendChild(text_space);
						var manual = document.createElement("input");
						manual.className += 'auto';
						manual.setAttribute("type", "radio");
						manual.setAttribute('name', 'transmission');
						tranmission_div.appendChild(manual);
						var text_manual = document.createTextNode(' Manual Transmission');
						text_manual.className += 'text';
						tranmission_div.appendChild(text_manual);

						// span class
						var span_div = document.createElement('div');
						span_div.className += 'span_div';
						span_div.setAttribute('id', 'span');
						myDialog.appendChild(span_div);
					  	
					  	// footer div
					  	var footer = document.createElement('div');
					  	myDialog.appendChild(footer);
						footer.className += 'footer';
					  	//set button shedule
						var btn_shedule = document.createElement('button');
						btn_shedule.textContent = "Shedule";
						btn_shedule.className += 'btn btn-success';
						btn_shedule.onclick = function(){
							document.getElementById('span').innerHTML = 'Enter all data to shedule '+ clicked_date;
							//myDialog.close();
						}
						footer.appendChild(btn_shedule);

						//set button close
						var btn_close = document.createElement('button');
						btn_close.setAttribute('value', "Close");
						btn_close.textContent = "Close";
						btn_close.className += 'btn btn-danger';
						btn_close.onclick = function(){
							myDialog.close();
						}
						footer.appendChild(btn_close);

						

						myDialog.showModal();

					}
					//Popup();
					if (Popup()) {
						$('calendar').click(false);
					}
					//$("#myModal").modal();
				    // change the day's background color just for fun
				    //$(this).css('background-color', 'red');

				},
			});
		});
	</script>
</body>
</html>
