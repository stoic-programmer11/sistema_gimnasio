const calendar = document.querySelector(".calendar"),
  date = document.querySelector(".date"),
  daysContainer = document.querySelector(".days"),
  prev = document.querySelector(".prev"),
  next = document.querySelector(".next"),
  todayBtn = document.querySelector(".today-btn"),
  gotoBtn = document.querySelector(".goto-btn"),
  dateInput = document.querySelector(".date-input"),
  eventDay = document.querySelector(".event-day"),
  eventDate = document.querySelector(".event-date"),
  eventsContainer = document.querySelector(".events"),
  addEventBtn = document.querySelector(".add-event"),
  addEventWrapper = document.querySelector(".add-event-wrapper "),
  addEventCloseBtn = document.querySelector(".close "),
  addEventTitle = document.querySelector(".event-name "),
  addEventFrom = document.querySelector(".event-time-from "),
  addEventTo = document.querySelector(".event-time-to "),
  addEventSubmit = document.querySelector(".add-event-btn ");

let today = new Date();
let activeDay;
let mes = today.getMonth();
let anio = today.getFullYear();

const months = [
  "Enero",
  "Febrero",
  "Marzo",
  "Abril",
  "Mayo",
  "Junio",
  "Julio",
  "Agosto",
  "Septiembre",
  "Octubre",
  "Noviembre",
  "Diciembre",
];

// const eventsArr = [
//   {
//     day: 13,
//     mes: 11,
//     anio: 2022,
//     events: [
//       {
//         title: "Event 1 lorem ipsun dolar sit genfa tersd dsad ",
//         time: "10:00 AM",
//       },
//       {
//         title: "Event 2",
//         time: "11:00 AM",
//       },
//     ],
//   },
// ];

const eventsArr = [];
getEvents();
console.log(eventsArr);

//función para agregar días en días con día de clase y fecha anterior fecha siguiente en el mes anterior y días del mes siguiente y activo en today
function initCalendar() {
  const firstDay = new Date(anio, mes, 1);
  const lastDay = new Date(anio, mes + 1, 0);
  const prevLastDay = new Date(anio, mes, 0);
  const prevDays = prevLastDay.getDate();
  const lastDate = lastDay.getDate();
  const day = firstDay.getDay();
  const nextDays = 7 - lastDay.getDay() - 1;

  date.innerHTML = months[mes] + " " + anio;

  let days = "";

  for (let x = day; x > 0; x--) {
    days += `<div class="day prev-date">${prevDays - x + 1}</div>`;
  }

  for (let i = 1; i <= lastDate; i++) {
    //check if event is present on that day
    let event = false;
    eventsArr.forEach((eventObj) => {
      if (
        eventObj.day === i &&
        eventObj.mes === mes + 1 &&
        eventObj.anio === anio
      ) {
        event = true;
      }
    });
    if (
      i === new Date().getDate() &&
      anio === new Date().getFullYear() &&
      mes === new Date().getMonth()
    ) {
      activeDay = i;
      getActiveDay(i);
      updateEvents(i);
      if (event) {
        days += `<div class="day today active event">${i}</div>`;
      } else {
        days += `<div class="day today active">${i}</div>`;
      }
    } else {
      if (event) {
        days += `<div class="day event">${i}</div>`;
      } else {
        days += `<div class="day ">${i}</div>`;
      }
    }
  }

  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="day next-date">${j}</div>`;
  }
  daysContainer.innerHTML = days;
  addListner();
}

//function to add mes and anio on prev and next button
function prevMonth() {
  mes--;
  if (mes < 0) {
    mes = 11;
    anio--;
  }
  initCalendar();
}

function nextMonth() {
  mes++;
  if (mes > 11) {
    mes = 0;
    anio++;
  }
  initCalendar();
}

prev.addEventListener("click", prevMonth);
next.addEventListener("click", nextMonth);

initCalendar();

//Función para agregar activa el día actual

function addListner() {
  const days = document.querySelectorAll(".day");
  days.forEach((day) => {
    day.addEventListener("click", (e) => {
      getActiveDay(e.target.innerHTML);
      updateEvents(Number(e.target.innerHTML));
      activeDay = Number(e.target.innerHTML);
      //remove active
      days.forEach((day) => {
        day.classList.remove("active");
      });
      //si se hace clic en fecha anterior o fecha siguiente, cambie a ese mes
      if (e.target.classList.contains("prev-date")) {
        prevMonth();
        //Agregar activa al día en que se hace clic después de que cambie
        setTimeout(() => {
          //add active where no prev-date or next-date
          const days = document.querySelectorAll(".day");
          days.forEach((day) => {
            if (
              !day.classList.contains("prev-date") &&
              day.innerHTML === e.target.innerHTML
            ) {
              day.classList.add("active");
            }
          });
        }, 100);
      } else if (e.target.classList.contains("next-date")) {
        nextMonth();
        //Agregar activa al día en que se hace clic después de que se cambie
        setTimeout(() => {
          const days = document.querySelectorAll(".day");
          days.forEach((day) => {
            if (
              !day.classList.contains("next-date") &&
              day.innerHTML === e.target.innerHTML
            ) {
              day.classList.add("active");
            }
          });
        }, 100);
      } else {
        e.target.classList.add("active");
      }
    });
  });
}

todayBtn.addEventListener("click", () => {
  today = new Date();
  mes = today.getMonth();
  anio = today.getFullYear();
  initCalendar();
});

dateInput.addEventListener("input", (e) => {
  dateInput.value = dateInput.value.replace(/[^0-9/]/g, "");
  if (dateInput.value.length === 2) {
    dateInput.value += "/";
  }
  if (dateInput.value.length > 7) {
    dateInput.value = dateInput.value.slice(0, 7);
  }
  if (e.inputType === "deleteContentBackward") {
    if (dateInput.value.length === 3) {
      dateInput.value = dateInput.value.slice(0, 2);
    }
  }
});

gotoBtn.addEventListener("click", gotoDate);

function gotoDate() {
  console.log("here");
  const dateArr = dateInput.value.split("/");
  if (dateArr.length === 2) {
    if (dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4) {
      mes = dateArr[0] - 1;
      anio = dateArr[1];
      initCalendar();
      return;
    }
  }
  alert("Dato incorrecto");
}

//la función activa el nombre y la fecha del día y actualiza el día del evento fecha del evento
function getActiveDay(date) {
  const day = new Date(anio, mes, date);
  dayName = day.toString().split(" ")[0];
  switch (dayName) {
    case "Mon":
      dayName = "Lunes";
      break;
    case "Tue":
      dayName = "Martes";
      break;
    case "Wed":
      dayName = "Miércoles";
      break;
    case "Thu":
      dayName = "Jueves";
      break;
    case "Fri":
      dayName = "Viernes";
      break;
    case "Sat":
      dayName = "Sábado";
      break;
    case "Sun":
      dayName = "Domingo";
      break;
  }
  console.log(dayName);
  eventDay.innerHTML = dayName;
  eventDate.innerHTML = date + " " + months[mes] + " " + anio;
}

//function update events when a day is active
function updateEvents(date) {
  let events = "";
  eventsArr.forEach((event) => {
    if (
      date === event.day &&
      mes + 1 === event.mes &&
      anio === event.anio
    ) {
      event.events.forEach((event) => {
        events += `<div class="event">
            <div class="title">
              <i class="fas fa-circle"></i>
              <h3 class="event-title">${event.title}</h3>
            </div>
            <div class="event-time">
              <span class="event-time">${event.time}</span>
            </div>
        </div>`;
      });
    }
  });
  if (events === "") {
    events = `<div class="no-event">
            <h3>No existe informacion<br><center>guardada</center></h3>
        </div>`;
  }
  eventsContainer.innerHTML = events;
  saveEvents();
}

//function to add event
addEventBtn.addEventListener("click", () => {
  addEventWrapper.classList.toggle("active");
});

addEventCloseBtn.addEventListener("click", () => {
  addEventWrapper.classList.remove("active");
});

document.addEventListener("click", (e) => {
  if (e.target !== addEventBtn && !addEventWrapper.contains(e.target)) {
    addEventWrapper.classList.remove("active");
  }
});

//allow 50 chars in eventtitle
addEventTitle.addEventListener("input", (e) => {
  addEventTitle.value = addEventTitle.value.slice(0, 60);
});

function defineProperty() {
  var osccred = document.createElement("div");
  osccred.style.position = "absolute";
  osccred.style.bottom = "0";
  osccred.style.right = "0";
  osccred.style.fontSize = "16px";
  osccred.style.color = "#ccc";
  osccred.style.fontFamily = "sans-serif";
  osccred.style.padding = "5px";
  osccred.style.background = "#fff";
  osccred.style.borderTopLeftRadius = "5px";
  osccred.style.borderBottomRightRadius = "5px";
  osccred.style.boxShadow = "0 0 5px #ccc";
  document.body.appendChild(osccred);
}

defineProperty();

//allow only time in eventtime from and to
addEventFrom.addEventListener("input", (e) => {
  addEventFrom.value = addEventFrom.value.slice(0, 200);
  // if (addEventFrom.value.length === 2) {
  //   addEventFrom.value += ":";
  // }
  // if (addEventFrom.value.length > 5) {
  //   addEventFrom.value = addEventFrom.value.slice(0, 5);
  // }
});

// addEventTo.addEventListener("input", (e) => {
//   addEventTo.value = addEventTo.value.replace(/[^0-9:]/g, "");
//   if (addEventTo.value.length === 2) {
//     addEventTo.value += ":";
//   }
//   if (addEventTo.value.length > 5) {
//     addEventTo.value = addEventTo.value.slice(0, 5);//
//   }
// });

//funcion para agregar evento
addEventSubmit.addEventListener("click", () => {
  const eventTitle = addEventTitle.value;
  const eventTimeFrom = addEventFrom.value;
  if (eventTitle === "" || eventTimeFrom === "") {
    alert("Por favor llene todos los campos");
    return;
  }

  //formato de hora 00:00 verificar
  // const timeFromArr = eventTimeFrom.split(":");
  // const timeToArr = eventTimeTo.split(":");
  // if (
  //   timeFromArr.length !== 2 ||
  //   timeToArr.length !== 2 ||
  //   timeFromArr[0] > 23 ||
  //   timeFromArr[1] > 59 ||
  //   timeToArr[0] > 23 ||
  //   timeToArr[1] > 59
  // ) {
  //   alert("Formato de hora incorrecto");
  //   return;
  // }

  // const timeFrom = convertTime(eventTimeFrom);
  // const timeTo = convertTime(eventTimeTo);

  // const horaActual = new Date().toLocaleTimeString();\

  //----------------------------------------------
  var fecha = new Date();
  var hora = fecha.getHours();
  var minutos = fecha.getMinutes();
  var segundos = fecha.getSeconds();
  var ampm = hora >= 12 ? 'PM' : 'AM'; // Determina si es por la tarde o por la mañana

  var horaActual = eventTimeFrom + '<br>'+'<span style="color: red; padding-left:13px; font-size: 1.4rem;" ><b>Hora guardado:</b></span> ' + hora + ':' + minutos + ':' + segundos + ' ' + ampm;

  //verificar si el evento ya está agregado
  let eventExist = false;
  eventsArr.forEach((event) => {
    if (
      event.day === activeDay &&
      event.mes === mes + 1 &&
      event.anio === anio
    ) {
      event.events.forEach((event) => {
        if (event.title === eventTitle) {
          eventExist = true;
        }
      });
    }
  });
  if (eventExist) {
    alert("Evento ya agregado");
    return;
  }
  const newEvent = {
    title: eventTitle,
    time: horaActual,
  };
  console.log(newEvent);
  console.log(activeDay);
  let eventAdded = false;
  if (eventsArr.length > 0) {
    eventsArr.forEach((item) => {
      if (
        item.day === activeDay &&
        item.mes === mes + 1 &&
        item.anio === anio
      ) {
        item.events.push(newEvent);
        eventAdded = true;
      }
    });
  }

  if (!eventAdded) {
    eventsArr.push({
      day: activeDay,
      mes: mes + 1,
      anio: anio,
      events: [newEvent],
    });
  }

  console.log(eventsArr);
  addEventWrapper.classList.remove("active");
  addEventTitle.value = "";
  addEventFrom.value = "";
  updateEvents(activeDay);
  //select active day and add event class if not added
  const activeDayEl = document.querySelector(".day.active");
  if (!activeDayEl.classList.contains("event")) {
    activeDayEl.classList.add("event");
  }
});

//function to delete event when clicked on event
eventsContainer.addEventListener("click", (e) => {
  if (e.target.classList.contains("event")) {
    if (confirm("¿Está seguro de que desea eliminar este evento??")) {
      const eventTitle = e.target.children[0].children[1].innerHTML;
      eventsArr.forEach((event) => {
        if (
          event.day === activeDay &&
          event.mes === mes + 1 &&
          event.anio === anio
        ) {
          event.events.forEach((item, index) => {
            if (item.title === eventTitle) {
              event.events.splice(index, 1);
            }
          });
          //si no quedan eventos en un día, elimine ese día de eventsAr
          if (event.events.length === 0) {
            eventsArr.splice(eventsArr.indexOf(event), 1);
            //eliminar la clase de evento del día
            const activeDayEl = document.querySelector(".day.active");
            if (activeDayEl.classList.contains("event")) {
              activeDayEl.classList.remove("event");
            }
          }
        }
      });
      updateEvents(activeDay);
    }
  }
});

//función para guardar eventos en el almacenamiento local
function saveEvents() {
  localStorage.setItem("events", JSON.stringify(eventsArr));
}

//función para obtener eventos del almacenamiento local
function getEvents() {
  //verifique si los eventos ya están guardados en el almacenamiento local y luego devuelva el evento más nada
  if (localStorage.getItem("events") === null) {
    return;
  }
  eventsArr.push(...JSON.parse(localStorage.getItem("events")));
}

function convertTime(time) {
  //convertir la hora a formato de 24 horas
  let timeArr = time.split(":");
  let timeHour = timeArr[0];
  let timeMin = timeArr[1];
  let timeFormat = timeHour >= 12 ? "PM" : "AM";
  timeHour = timeHour % 12 || 12;
  time = timeHour + ":" + timeMin + " " + timeFormat;
  return time;
}
