function vanillaAjax(url, data, method='POST', success) {
  var params = typeof data == 'string' ? data : Object.keys(data).map(
          function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
      ).join('&');

  var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
  xhr.open(method, url);
  xhr.onreadystatechange = function() {
      if (xhr.readyState > 3 && xhr.status == 200) { success(xhr.responseText); }
  };
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  if (document.querySelector('meta[name="csrf-token"]')) {
    xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
  }
  xhr.send(params);
  return xhr;
}

// Old jQuery-based building/classroom functions (if still used elsewhere)
function getBuilding() {
  var school_id = document.getElementById("school_id").value;
  if (school_id > 0) {
    $.getJSON('/building/' + school_id, function(data) {
      var select = '<select name="building_id" id="building_id" class="form-control" onchange="getClassroom($(this))">';
      select += '<option value=""> --- Select Building --- </option>';
      $.each(data, function(index) {
        select += '<option value="' + data[index].id + '">' + data[index].name + '</option>';
      });
      select += '</select>';
      document.getElementById("load_building").innerHTML = select;
      getClassroom();
    });
  }
}

function getClassroom() {
  var id = document.getElementById("building_id").value;
  if (id > 0) {
    $.getJSON('/classroom/' + id, function(data) {
      var select = '<select name="classroom_id" class="form-control">';
      select += '<option value=""> --- Select Classroom --- </option>';
      $.each(data, function(index) {
        select += '<option value="' + data[index].id + '">' + data[index].name + '</option>';
      });
      select += '</select>';
      document.getElementById("load_classroom").innerHTML = select;
    });
  }
}


// Example for a test function (not used in cascading selects)
function getClassroomTest() {
  var id = document.getElementById("building_id").value;
  if (id > 0) {
    var select = '<select name="classroom_id" class="form-control">';
    document.getElementById("load-classrooms-spinner").innerHTML = '<img width="50" src="/img/progressring.gif">';
    vanillaAjax('/classroom/' + id, '', 'GET', function(data) {
      document.getElementById("load-classrooms-spinner").innerHTML = '';
      // Example: parse and use data as needed
      try {
        var parsed = JSON.parse(data);
        parsed.forEach(function(arrayItem) {
          select += '<option value="' + arrayItem.id + '">' + arrayItem.name + '</option>';
        });
      } catch (e) {
        // fallback or error
      }
      select += '</select>';
      document.getElementById("load_classroom").innerHTML = select;
    });
  }

// Cascading Building → Floor → Room (pure JS, uses classrooms global variable)
document.addEventListener('DOMContentLoaded', function() {
  const buildingSelect = document.getElementById('building_id');
  const floorSelect = document.getElementById('floor_no');
  const roomSelect = document.getElementById('room_id');

  if (buildingSelect) {
    buildingSelect.addEventListener('change', function() {
      let buildingId = this.value;
      let building = buildings.find(b => String(b.id) === String(buildingId));
      floorSelect.innerHTML = '<option value="">Select Floor</option>';
      roomSelect.innerHTML = '<option value="">Select Room</option>';
      if (building && building.no_of_floors) {
        for (let i = 1; i <= parseInt(building.no_of_floors); i++) {
          floorSelect.innerHTML += `<option value="${i}">${i}</option>`;
        }
      }
      // Debug: log selected building
      console.log('Selected building:', building ? building.name : 'None', 'ID:', buildingId);
    });
  }

  if (floorSelect) {
    floorSelect.addEventListener('change', function() {
      let buildingId = buildingSelect.value;
      let floorNo = this.value;
      let rooms = classrooms.filter(
        c => String(c.building_id) === String(buildingId) && String(c.floor_no) === String(floorNo)
      );
      roomSelect.innerHTML = '<option value="">Select Room</option>';
      rooms.forEach(room => {
        roomSelect.innerHTML += `<option value="${room.id}">${room.room_no}</option>`;
      });
      // Debug: log selected floor
      console.log('Selected floor_no:', floorNo, 'in building ID:', buildingId);
    });
  }

  if (roomSelect) {
    roomSelect.addEventListener('change', function() {
      let roomId = this.value;
      let room = classrooms.find(r => String(r.id) === String(roomId));
      // Debug: log selected room
      console.log('Selected room:', room ? room.room_no : 'None', 'ID:', roomId);
    });
  }
});

  return false;
}