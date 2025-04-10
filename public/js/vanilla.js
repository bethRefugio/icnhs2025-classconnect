
function vanillaAjax(url, data, method='POST', success) {
  var params = typeof data == 'string' ? data : Object.keys(data).map(
          function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
      ).join('&');

  var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
  //xhr.open('POST', url);
  xhr.open(method, url);
  xhr.onreadystatechange = function() {
      if (xhr.readyState>3 && xhr.status==200) { success(xhr.responseText); }
  };
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  //xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
  xhr.send(params);
  return xhr;
}

function getBuilding() {
  var school_id = document.getElementById("school_id").value;
  if(school_id > 0) {
    $.getJSON('/building/'+school_id, function(data) {
      var select = '<select name="building_id" id="building_id" class="form-control" onchange="getClassroom($(this))">';
          select += '<option value=""> --- Select Building --- </option>';
      $.each(data, function(index) {
          console.log(data[index].name);
          select += '<option value="'+data[index].id+'">'+data[index].name+'</option>';
      });
      select += '</select>';
      document.getElementById("load_building").innerHTML = select;
      getClassroom();
    });
  }
}

function getClassroom() {
  var id = document.getElementById("building_id").value;
  if(id > 0) {
    $.getJSON('/classroom/'+id, function(data) {
      var select = '<select name="classroom_id" class="form-control">';
          select += '<option value=""> --- Select Classroom --- </option>';
      $.each(data, function(index) {
          console.log(data[index].name);
          select += '<option value="'+data[index].id+'">'+data[index].name+'</option>';
      });
      select += '</select>';
      document.getElementById("load_classroom").innerHTML = select;
    });
  }
}

function getClassroomTest() {

  var id = document.getElementById("building_id").value;
  if(id > 0) {
    var select = '<select name="classroom_id" class="form-control">';
    document.getElementById("load-classrooms-spinner").innerHTML = '<img width="50" src="/img/progressring.gif">';
    vanillaAjax('/classroom/'+id, '', 'GET', function(data){
        document.getElementById("load-classrooms-spinner").innerHTML = '';
        //$('#songList').append(data);
        //$('#current_page').val(currentpage)
        console.log(data.data);
        data.forEach(function (arrayItem) {
          console.log(arrayItem.name);
        });

        console.log(data);
        select += '<option>abc</option>';
        select += '<option>zzz</option>';
        select += '</select>';
        document.getElementById("load_classroom").innerHTML = select;
    });
  }
  return false;

}


